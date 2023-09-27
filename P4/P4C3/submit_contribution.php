<?php
session_start();

$postData = $_POST;

print_r($postData);

// Ecriture de la requête
$sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

// Préparation
$insertRecipe = $db->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$insertRecipe->execute([
    'title' => $postData['title'],
    'recipe' => $postData['message'],
    'author' => $postData['email'],
    'is_enabled' => $postData['enabled'],
]);

?>

<?php include_once('header.php'); ?>