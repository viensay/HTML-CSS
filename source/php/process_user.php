<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intégration d'utilisateur</title>
</head>
<body>
    <?php 
    try {
        $connexion_bdd = new PDO('mysql:host=localhost;dbname=coursmysql;charset=utf8','root','',array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
        echo 'Connexion réussie ! ';
    } catch (Exception $erreur) {
        die('Erreur : '. $e->getMessage());
    }

    $insert_user = $connexion_bdd->prepare('INSERT INTO users(
    firstname,
    lastname,
    gender
    date_of_birth,
    city
    )VALUES (
    :prenom,
    :nom,
    :genre,
    :datedenaissance,
    :ville)
    ');

    $insert_user->execute(
    );

    header('Location:../index.php');
    
    ?>

    
</body>
</html>