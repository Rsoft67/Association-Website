<!DOCTYPE html>
<html> <head>



</head>
<body>
    <link rel="stylesheet" type="text/css" href="page5.css">
    <header> <!-- Entete -->
        <a href="page2.php"><img   src="logo1.png" alt="Logo de mon site web" ></a> <!-- Ajout du logo, qui renvoie à l'accueil si cliqué -->
        <div>
            <h1 align="right"> R&Eacute;F&Eacute;RENT </h1>
            <h2> Je confirme la valeur de ton engagement !</h2>
        </div>
    </header>

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

<h3> Confirmez cette exp&eacute;rience et ce que vous avez pu constater au contact de ce jeune. </h3>
<p> SES SAVOIRS &Ecirc;TRE</p>

<div id="container">
    <div id="commentaires"><div id="Qualité">
        <table id="vert">
            <tr>
               <th align="center" style="color:white";> Commentaires </th>
            </tr>
            <tr>
                <td>
                <p>
                    <textarea name="Commentaires" rows="6">Entrer vos commentaires sur le jeune...</textarea>
                </p>
            </tr>
        </table>
    </div>
</div>
    <div class="form-style-5" id="form"> <fieldset id="Informations">
        <table>
            <tr>
                <td><label for="Nom">Nom :</label></td>
                <td><input type="text" name="Nom" id="Nom" maxlength="50"></td>
            </tr>
            <tr>
                <td><label for="Prénom">Pr&eacute;nom :</label></td>
                <td><input type="text" name="Prénom" id="Prénom" maxlength="50"></td>
            </tr>
            <tr>
                <td><label for="Date de naissance">Date de naissance :</label></td>
                <td><input type="date" name="Naissance" id="Naissance"></td>
            </tr>
            <tr>
                <td><label for="Email">Email :</label></td>
                <td><input type="email" name="Email" id="Email"></td>
            </tr>
            <tr>
                <td><label for="Num">Num&eacute;ro de t&eacute;l&eacute;phone :</label></td>
                <td><input type="number" name="Num" id="Num" maxlength="10"></td>
            </tr>
            <tr>
                <td><label for="Réseaux">R&eacute;seau social :</label></td>
                <td><input type="text" name="Réseaux" id="Réseaux" maxlength="50"></td>
            </tr>
            <tr>
                <td><label for="Présentation">Pr&eacute;sentation :</label></td>
                <td><input type="text" name="Engagement" id="Engagement" maxlength="300"></td>
            </tr>
            <tr>
                <td><label for="Durée">Dur&eacute;e :</label></td>
                <td><input type="text" name="Durée" id="Durée" maxlength="30"></td>
            </tr>
        </table>
    </fieldset></div>
    <div id="cocher"> <div id="Qualité">
        <table id="vert">
            <tr>
                <th align="center" style="color:white";> Je confirme sa(son)* </th>
            </tr>
            <tr>
                <td>
                <p>
                    <input type="checkbox" name="Qualité" value="Confiance"> Confiance<br>
                    <input type="checkbox" name="Qualité" value="Bienveillance"> Bienveillance<br>
                    <input type="checkbox" name="Qualité" value="Respect"> Respect<br>
                    <input type="checkbox" name="Qualité" value="Honnêteté"> Hon&ecirc;tet&eacute;<br>
                    <input type="checkbox" name="Qualité" value="Tolérance"> Tol&eacute;rance<br>
                    <input type="checkbox" name="Qualité" value="Ponctualité"> Ponctualit&eacute;<br>
                    <input type="checkbox" name="Qualité" value="Juste"> Juste<br>
                    <input type="checkbox" name="Qualité" value="Impartial"> Impartial<br>
                    <input type="checkbox" name="Qualité" value="Travail"> Travail<br>
                </p></td>
            </tr>
        </table>
    </div></div>
</div>

<p>*Faire 4 choix maximum </p>
<button type="submit">Valider</button>

</body>


</html>
