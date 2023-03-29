<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une nouvelle recette</title>
</head>
<body>
    <form method="post">
        <p>
            <label for="title">Titre : </label>
            <input type="text" name="title" id="title">
        </p>

        <p>
            <label for="description">Description : </label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </p>

        <p>
            <input type="submit" value="Ok">
        </p>
    </form>
</body>
</html>