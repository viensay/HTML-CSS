<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intégration d'article</title>
</head>
<body>
    

    <?php 
        try {
            $connexion_bdd = new PDO('mysql:host=localhost;dbname=bdd_articles;charset=utf8','root','',array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
            echo "Connexion à la base de données réussie ! \n";
        } catch (Exception $erreur) {
            die('Erreur : '. $erreur->getMessage());
        }

        if(isset($_POST['f_title']) && isset($_POST['f_desc'])){
            $req_insert_article = 'INSERT INTO articles(
            articleName,
            description) VALUES(
            :titre,
            :contenu)';

            $insert_article = $connexion_bdd->prepare($req_insert_article);

            $insert_article->execute(array(
                'titre' => htmlspecialchars($_POST['f_title']),
                'contenu' => htmlspecialchars($_POST['f_desc'])
            ));

            $insert_article->closeCursor();
        }
        else{
            echo 'Rien n\'a été introduit dans la base de données';
        }
        //

        header('Location:../index.php');
    ?>
    
</body>
</html>