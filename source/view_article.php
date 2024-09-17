<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    try {
        $connexion_bdd = new PDO('mysql:host=localhost;dbname=bdd_articles;charset=utf8','root','',array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
    } catch (Exception $erreur) {
        die('Erreur : '. $erreur->getMessage());
    }
    ?>

    <?php
    include('includes/header.php');
    ?>

    <main>
        <h2>Les derniers articles</h2>

        <section id="vue_article">
            <?php
            $req_view_article = 'SELECT * FROM articles ORDER BY created_at DESC LIMIT 3' ;
            $view_article = $connexion_bdd->prepare($req_view_article);
            $view_article->execute();

            while($rangee = $view_article->fetch()){
            ?>
            <article>
                <h3><?php echo $rangee['articleName']; ?></h3>
                <p>
                    <?php echo $rangee['description'];?>

                </p>
                <p class="date_article">C'est article a été créé le <strong> <?php echo $rangee['created_at']; ?> </strong> et a été modifié le <strong><?php echo $rangee['update_at'];?></strong></p>
            </article>

            <?php
            }

            $view_article->closeCursor();
            ?>
        </section>
    </main>

    <?php 
    include('includes/footer.php');
    ?>


    
</body>
</html>