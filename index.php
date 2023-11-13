<?php

declare(strict_types=1);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="Styles/normalize.css">
    <link rel="stylesheet" href="Styles/recicpeBook.css">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Recipe Book:</title>
</head>

<body>
    <div class="flex flexVertical">
        <h1 class="center marginTop50">Receptenboek:</h1>
        <div class="flex flexVertical">
            <div class="flex flexHorizontal recipeContainer">
                <a href=""><img src="https://placehold.co/400x300" alt=""></a>
                <a href=""><img src="https://placehold.co/400x300" alt=""></a>
                <a href=""><img src="https://placehold.co/400x300" alt=""></a>
            </div>
            <div class="flex flexHorizontal recipeContainer">
                <a href=""><img src="https://placehold.co/400x300" alt=""></a>
                <a href=""><img src="https://placehold.co/400x300" alt=""></a>
                <a href=""><img src="https://placehold.co/400x300" alt=""></a>
            </div>
        </div>
        <div class="marginBot30 buttonContainer">
            <button class="button">Show More</button>
        </div>
    </div>

</body>

</html>