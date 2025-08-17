<!DOCTYPE html>
<html> <head>

</head>
<body>
<link rel="stylesheet" type="text/css" href="monprofil.css">

<?php  
    session_start();
    require_once 'config.php';

    if (empty($_SESSION['user'])){
        header('Location: index.php?'); die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM jeunes WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data_jeune = $req->fetch();

    // On récupere les données des formulaires de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM formulaires WHERE user = ?');
    $req->execute(array($_SESSION['id']));
?>

    <h1 class="p-5">Bonjour <?php echo $data_jeune['prenom']; ?>, bienvenue sur votre profil !</h1>

<table>
    <thead>
        <th> Informations du formulaire et référent associé </th>
        <th>Nom prénom</th>
        <th>Naissance</th>
        <th>Email</th>
        <th>Numéro de téléphone</th>
        <th>Réseaux</th>
        <th>Engagement</th>
        <th>Durée</th>
        <th>Cases</th>
    </thead>
    <tbody>
        <?php   
            $i=1;
        while ($data_formulaire = $req->fetch()){
            global $i;
            ?>
                    <tr>
                        <th> <?php echo "Formulaire n°".$i ?> </th>
                        <td> <?php echo $data_formulaire['nom']." ".$data_formulaire['prenom']  ?> </td>
                        <td> <?php echo $data_formulaire['naissance'] ?> </td>
                        <td> <?php echo $data_formulaire['email'] ?> </td>
                        <td> <?php echo $data_formulaire['num'] ?> </td>
                        <td> <?php echo $data_formulaire['reseaux'] ?> </td>
                        <td> <?php echo $data_formulaire['engagement'] ?> </td>
                        <td> <?php echo $data_formulaire['duree'] ?> </td>
                        <td> <?php echo $data_formulaire['cases'] ?> </td>
                    </tr>
                <?php $i+=1;
        }
        ?>
    </tbody>
</table>

<a id="" href="/projet/page4.php">
    <button>Revenir aux formulaires</button>
</a>

</body>