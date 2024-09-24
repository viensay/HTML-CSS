<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Liste utilisateur</title>
</head>
<body>
    <?php 
    try {
        $connexion_bdd = new PDO('mysql:host=localhost;dbname=bdd_articles;charset=utf8','root','',array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
    } catch (Exception $erreur) {
        die('Erreur : '. $erreur->getMessage());
    }

    include ('includes/header.php');
    ?>

    <main>
        <h2>Voici la liste des utilisateurs</h2>

        <section>
            <table>
                <thead>
                    <th>ID utilisateur</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Genre</th>
                    <th>Date de naissance</th>
                    <th>Ville</th>
                </thead>

                <tbody>
                    <?php 
                    $req_view_user = 'SELECT * FROM users';
                    $view_user = $connexion_bdd->prepare($req_view_user);
                    $view_user->execute();
            
                    while($rangee = $view_user->fetch()){
                    ?>
                    <tr>
                        <td><?php echo $rangee['id_user'] ?></td>
                        <td><?php echo $rangee['firstname'] ?></td>
                        <td><?php echo $rangee['lastname'] ?></td>
                        <td><?php echo $rangee['gender'] ?></td>
                        <td><?php echo $rangee['date_of_birth'] ?></td>
                        <td><?php echo $rangee['city'] ?></td>
                    </tr>
                    
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </section>

    </main>

    <?php
        include ('includes/footer.php');
        //
    ?>
    
</body>
</html>