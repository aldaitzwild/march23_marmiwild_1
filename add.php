<?php

require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $recipe = array_map('trim', $_POST);

    if(!isset($recipe['title']) || empty($recipe['title']))
        $errors[] = "le titre est obligatoire";

    if(strlen($recipe['title']) > 100)
        $errors[] = "le titre est trop long";

    if(!isset($recipe['description']) || empty($recipe['description']))
        $errors[] = "la description est obligatoire";

    if (empty($errors)) {
        saveRecipe($recipe);
        header('Location: /');
    }
}

require __DIR__ . '/src/views/form.php';