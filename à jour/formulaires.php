<?php 
    session_start();
    require_once 'config.php'; // On inclut la connexion à la bdd
    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) &&!empty($_POST['naissance']) && !empty($_POST['email']) && !empty($_POST['num']) && !empty($_POST['reseaux']) && !empty($_POST['engagement']) && !empty($_POST['duree'] && !empty($_POST['qualite'])))
    {
        // Patch XSS    htmlspecialchars protège des injections SQL
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $naissance = htmlspecialchars($_POST['naissance']); 
        $email = htmlspecialchars($_POST['email']);
        $num = htmlspecialchars($_POST['num']); 
        $reseaux = htmlspecialchars($_POST['reseaux']); 
        $engagement = htmlspecialchars($_POST['engagement']); 
        $duree = htmlspecialchars($_POST['duree']); 

        // On s'occupe des cases cochées
        $cases = '';
        foreach($_POST['qualite'] as &$value) {
            $cases .=$value.", ";
        }
        $cases = htmlspecialchars(rtrim($cases, ", "));

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT nom, prenom, email, naissance, password FROM jeunes WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
    
        //Je stocke les données du jeune connecté pour les utiliser à l'envoi du mail
        $req = $bdd->prepare('SELECT * FROM jeunes WHERE token = ?');
        $req->execute(array($_SESSION['user']));
        $data_jeune = $req->fetch();

        if(strlen($nom) > 100){
            echo "Le nom est trop long !";
            header('Location: page4.php?form_err=nom_length');die();
        }
        if(strlen($prenom) > 100){
            echo "Le prénom est trop long !";
            header('Location: page4.php?form_err=prenom_length');die();
        }
        if(strlen($email) > 100){
            echo "L'email est trop long !";
            header('Location: page4.php?form_err=email_length');die();   
        }
        if(strlen($num) > 11){
            echo "Veuillez entrer un numéro de téléphone valide !";
            header('Location: page4.php?form_err=num');die();    
        }
        if(strlen($reseaux) > 100){
            echo "Trop long !";
            header('Location: page4.php?form_err=reseaux_length');die();
        }
        if(strlen($cases)>47){
            echo "Vous ne pouvez cocher que 4 cases !";
            header('Location: page4.php?form_err=nbcases');die();
        }

        $insert = $bdd->prepare('INSERT INTO formulaires(user, nom, prenom, naissance, email, num, reseaux, engagement, duree, cases)VALUES(:user, :nom, :prenom, :naissance, :email, :num, :reseaux, :engagement, :duree, :cases)');
        $insert->execute(array(
            'user'=> $_SESSION['id'],
            'nom' => $nom,
            'prenom'=>$prenom,
            'naissance'=> $naissance,
            'email' => $email,
            'num' => $num,
            'reseaux'=>$reseaux,
            'engagement'=> $engagement,
            'duree' => $duree,
            'cases' => $cases,
        ));

        //envoi du mail au référent

        //fonction sécurisant l'envoi de mail
        function sanitize_my_email($field) {    
            $field = filter_var($field, FILTER_SANITIZE_EMAIL);
            if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }
        $to_email = "$email";
        $subject = 'Demande de référence de la part de '.$data_jeune['nom']." ".$data_jeune['prenom'];
        $message = $data_jeune['nom']." ".$data_jeune['prenom']." a effectué une demande de référence à votre nom sur le site JEUNES 6.4. <br>
        Jeunes 6.4 est un site permettant aux jeunes de faire part de leurs compétences à un potentiel recruteur par l'intermédiaire d'un référent, vous. <br>
        Pour confirmer sa demande de référence, veuillez suivre le lien suivant : <a href=\"http://localhost/projet/page2.php\"> JEUNES 6.4 </a>";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        //check if the email address is invalid $secure_check
        $secure_check = sanitize_my_email($to_email);
        if ($secure_check == false) {
            echo "Invalid input";
            die();
        } else { //send email 
            mail($to_email, $subject, $message, $headers);
        }
        header('Location:page4.php?form_err=success');
    }else header('Location:page4.php?form_err=entrees');