<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Rédaction d'article</title>
</head>
<body>
    <?php
    include('includes/header.php');
    ?>

    <main>
        <form action="php/process_article.php" method="post">

            <fieldset>
                <legend>Veuillez rédiger votre article</legend>

                <label for="f_title">Le titre</label>
                <input type="text" name="f_title" id="f_title">

                <label for="f_desc">Ton article</label>
                <textarea name="f_desc" id="f_desc"></textarea>
            </fieldset>

            <button type="submit">Créer l'article</button>
        </form>
    </main>

    

    <?php 
    include('includes/footer.php');
    ?>
    
</body>
</html>