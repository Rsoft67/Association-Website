<!DOCTYPE html>
<html> <head>

</head>
<body>
<link rel="stylesheet" type="text/css" href="page4.css">

 <header> <!-- Entete -->
    <a href="page2.php"><img   src="logo1.png" alt="Logo de mon site web" ></a> <!-- Ajout du logo, qui renvoie à l'accueil si cliqué -->
    <div>
        <h1 align="right"> JEUNE </h1>
        <h2> Je donne de la valeur a mon engagement !</h2>
    </div>
</header> 


<?php 
    session_start();
    require_once 'config.php';

    if (empty($_SESSION['user'])){
        header('Location: index.php?'); die();
    }
?>


<ul class="menu">  <!-- Ajout des sections sous forme de menu -->
    <li>
        <a href="page4.php" id="jeune">JEUNE</a>      <!-- penser à changer les liens une fois en PHP -->
    </li>
    <li>
        <a href="page5.php" id="referent">R&Eacute;F&Eacute;RENT</a>
    </li>
    <li>
        <a href="page6.php" id="consultant">CONSULTANT</a>
    </li>
    <li>
        <a href="page3.php" id="partenaires">PARTENAIRES</a>
    </li>
</ul>

<a id="deconnexion" href="/projet/deconnexion.php">
    <button>Log Out</button>
</a> 
<a id="profil" href="/projet/monprofil.php">
    <button>Mon Profil</button>
</a> 


<h3> D&eacute;crivez votre exp&eacute;rience et mettez en avant ce que vous en avez retir&eacute;. </h3>

<?php                                                       //On s'occupe des messages d'erreur pour tel et tel cas
                if(isset($_GET['form_err']))
                {
                    $err = htmlspecialchars($_GET['form_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> <br> Le formulaire a bien été envoyé à votre référent ! <br> Vous pouvez consulter vos formulaires à partir de votre profil.
                            </div>
                        <?php
                        break;

                        case 'nom_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Le nom est trop long ! Réessayez
                            </div>
                        <?php
                        break;

                        case 'prenom_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Le prénom est trop long ! Réessayez
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> L'email est trop long ! Réessayez
                            </div>
                        <?php 
                        break;

                        case 'num':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Veuillez entrer un numéro de téléphone valide !
                            </div>
                        <?php 
                        case 'reseaux_length':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> Les réseaux sont trop longs ! Réessayez
                                </div>
                            <?php 
                        case 'nbcases':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Veuillez cocher 4 cases maximum !
                            </div>
                        <?php 
                        case 'entrees':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> Veuillez remplir tous les champs !
                                </div>
                            <?php 

                    }
                }
                ?>

<p>MES SAVOIRS &Ecirc;TRE </p>

<div id="container">
    <form class='form-style-4' action='formulaires.php' method="post" id="form">
    <fieldset id="Informations">
    <table>
        <tr>
            <td><label for="nom">Nom du r&eacute;f&eacute;rent:</label></td>
            <td><input type="text" name="nom" id="nom" maxlength="50"></td>
        </tr>
        <tr>
            <td><label for="prenom">Pr&eacute;nom du r&eacute;f&eacute;rent :</label></td>
            <td><input type="text" name="prenom" id="prenom" maxlength="50"></td>
        </tr>
        <tr>
            <td><label for="Date de naissance">Date de naissance :</label></td>
            <td><input type="date" name="naissance" id="naissance"></td>
        </tr>
        <tr>
            <td><label for="email">Email :</label></td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td><label for="num">Num&eacute;ro de t&eacute;l&eacute;phone :</label></td>
            <td><input type="number" name="num" id="num" maxlength="10"></td>
        </tr>
        <tr>
            <td><label for="reseaux">R&eacute;seau social :</label></td>
            <td><input type="text" name="reseaux" id="reseaux" maxlength="50"></td>
        </tr>
        <tr>
            <td><label for="engagement">Mon engagement :</label></td>
            <td><input type="text" name="engagement" id="engagement" maxlength="300"></td>
        </tr>
        <tr>
            <td><label for="duree">Dur&eacutee :</label></td>
            <td><input type="text" name="duree" id="duree" maxlength="30"></td>
        </tr>
    </table>
    </fieldset>

    <div id="cocher"> <div id="Qualité">
        <table id="Qualité">
            <tr>
                <th align="center" style="color:white";> Je suis* </th>
            </tr>
            <tr>
                <td>
                <p>
                    <input type="checkbox" name="qualite[]" value="Autonome"> Autonome<br>
                    <input type="checkbox" name="qualite[]" value="Passioné"> Passion&eacute;<br>
                    <input type="checkbox" name="qualite[]" value="Réfléchi"> R&eacute;fl&eacute;chi<br>
                    <input type="checkbox" name="qualite[]" value="A l'écoute"> &Agrave; l'&eacute;coute<br>
                    <input type="checkbox" name="qualite[]" value="Organisé"> Organis&eacute;<br>
                    <input type="checkbox" name="qualite[]" value="Fiable"> Fiable<br>
                    <input type="checkbox" name="qualite[]" value="Patient"> Patient<br>
                    <input type="checkbox" name="qualite[]" value="Responsable"> Responsable<br>
                    <input type="checkbox" name="qualite[]" value="Sociable"> Sociable<br>
                    <input type="checkbox" name="qualite[]" value="Optimiste"> Optimiste<br>
                </p></td>
            </tr>
        </table>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" id="form">Valider et envoyer</button>
    </div>   
    </form>
</div>
</div>

<?php 
    echo $_SESSION['id'];
?>

<p>*Faire 4 choix maximum </p>

</body>
</html>
