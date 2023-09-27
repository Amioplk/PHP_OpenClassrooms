<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php include_once('header.php'); ?>
        <h1>Ajoutez votre propre recette !</h1>
        <form action="submit_contribution.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Titre de votre recette</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">La descritpion de votre recette</label>
                <textarea class="form-control" placeholder="Soyez complets" id="message" name="message"></textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Votre adresse email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
            </div>
            <div class="mb-3">
                <p>Voulez-vous rendre votre recette accessible à tout le monde ?<br>
                    <input type="radio" value='yes' name="enabled" id="enabled_yes"> <label for="enabled_yes">Oui</label><br>
                    <input type="radio" value='no' name="enabled" id="enabled_no"> <label for="enabled_no">Non</label><br>
                </p>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>

    <!-- <?php
    $sqlQuery = "ALTER USER 'root'@'localhost' IDENTIFIED BY 'root';";
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute();
    // $recipes = $recipesStatement->fetchAll();
    ?> -->

    <?php include_once('footer.php'); ?>
</body>
</html>