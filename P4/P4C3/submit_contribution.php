<?php
session_start();

include('config/mysql.php');

$postData = $_POST;

// print_r($postData);

// Ecriture de la requête
$sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

// Préparation
$insertRecipe = $mysqlClient->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$insertRecipe->execute([
    'title' => $postData['title'],
    'recipe' => $postData['message'],
    'author' => $postData['email'],
    'is_enabled' => $postData['enabled'],
]);

?>

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
        <!-- Inclure home.php nous donne un warning "Session strated : ignoring it" Comment faire pour s'en débarasser ? -->
    </div>
</body>
</html>