<?php 
    require_once 'config.php'; // On inclut la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['naissance']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS    htmlspecialchars protège des injections SQL
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $naissance = htmlspecialchars($_POST['naissance']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT nom, prenom, email, naissance, password FROM jeunes WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        if($row == 0){ // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if(strlen($nom) <= 100){ // On verifie que la longueur du nom <= 100
            if(strlen($prenom) <= 100){
                    if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                            if($password === $password_retype){ // si les deux mdp saisis sont bon

                                // On hash le mot de passe, salté avec le mail pour éviter les dictionnaires

                                $hash_password = hash('sha256', $password.$email);


                                // On stock l'adresse IP
                                $ip = $_SERVER['REMOTE_ADDR']; 
                                
                                // On insère dans la base de données
                                $insert = $bdd->prepare('INSERT INTO jeunes(nom, prenom, email, naissance, password, ip, token) VALUES(:nom, :prenom, :email, :naissance,  :password, :ip, :token)');
                                $insert->execute(array(
                                    'nom' => $nom,
                                    'prenom'=>$prenom,
                                    'email' => $email,
                                    'naissance'=> $naissance,
                                    'password' => $hash_password,
                                    'ip' => $ip,
                                    'token' => bin2hex(openssl_random_pseudo_bytes(64))
                                ));
                                // On redirige avec le message de succès
                                header('Location:inscription.php?reg_err=success');
                            }else{ header('Location: inscription.php?reg_err=password'); die();}
                        }else{ header('Location: inscription.php?reg_err=email'); die();}
                    }else{ header('Location: inscription.php?reg_err=email_length'); die();}
                }else{ header('Location: inscription.php?reg_err=prenom_length'); die();}
            }else{ header('Location: inscription.php?reg_err=nom_length'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }
