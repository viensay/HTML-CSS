<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Création de nouveaux utilisateurs</title>
</head>
<body>
    <?php 
        include 'includes/header.php';
    ?>

    <main>
        <form action="php/process_user.php" method="post">
            <fieldset>
                <legend>Entrez les données de l'utilisateur</legend>

                <label for="f_firstname">Prénom</label>
                <input type="text" name="f_firstname" id="f_firstname" placeholder="Veuillez introduire le prénom">

                <label for="f_lastname">Nom</label>
                <input type="text" name="f_lastname" id="f_lastname" placeholder="Veuillez introduire le nom">

                <label for="f_genre" class="s_genre">Genre</label>
                <select name="f_genre" id="f_genre">
                    <option value=""></option>
                    <option value="H">Homme</option>
                    <option value="F">Femme</option>
                    <option value="X">Autre</option>
                </select>

                <label for="f_birthdate">Date de naissance</label>
                <input type="date" name="f_birthdate" id="f_birthdate">

                <label for="f_town">Ville</label>
                <input type="text" name="f_town" id="f_town" placeholder="Veuillez introduire la ville">
            </fieldset>

            <button type="submit">Créer le nouvel utilisateur</button>
        </form>


    </main>

    <?php 
        include 'includes/footer.php';
    ?>
    
</body>
</html>