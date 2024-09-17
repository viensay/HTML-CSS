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
        $connexion_bdd = new PDO('mysql:host=localhost;dbname=bdd_articles;charset=utf8','root','',array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
        echo "Connexion à la base de données réussie ! \n";
    } catch (Exception $erreur) {
        die('Erreur : '. $erreur->getMessage());
    }

    // echo $_POST['f_firstname'];
    // echo isset($_POST['f_firstname']);

    // echo $_POST['f_lastname'];
    // echo isset($_POST['f_lastname']);

    // echo $_POST['f_genre'];
    // echo isset($_POST['f_genre']);

    // echo $_POST['f_birthdate'];
    // echo isset($_POST['f_birthdate']);

    // echo $_POST['f_town'];
    // echo isset($_POST['f_town']);


    if  (
        isset($_POST['f_firstname']) 
        && 
        isset($_POST['f_lastname'])
        &&
        isset($_POST['f_genre'])
        &&
        isset($_POST['f_birthdate'])
        &&
        isset($_POST['f_town'])
        ){
            $req_insert_user = 'INSERT INTO users(
                firstname,
                lastname,
                gender,
                date_of_birth,
                city
                ) VALUES(
                :prenom,
                :nom,
                :genre,
                :datedenaissance,
                :ville)';

            $insert_user = $connexion_bdd->prepare($req_insert_user);
                
            $insert_user->execute(array(
                'prenom' => htmlspecialchars($_POST['f_firstname']),
                'nom' => htmlspecialchars($_POST['f_lastname']),
                'genre' => htmlspecialchars($_POST['f_genre']),
                'datedenaissance' => htmlspecialchars($_POST['f_birthdate']),
                'ville' => htmlspecialchars($_POST['f_town'])
                )
                );

            $insert_user->closeCursor();

        }
        else{
            echo 'Entrée échouée';
        }



    header('Location:../index.php');
    
    ?>

    
</body>
</html>