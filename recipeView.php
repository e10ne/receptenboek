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
    <link rel="stylesheet" href="Styles/recipeBook.css">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Recipe Book:</title>
</head>

<body class="gridContainer">

    <header class="header flex">
        <h1>Recipe:</h1>
    </header>

    <nav class="navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Add Recipe</a></li>
            <li><a href="#">Add Category</a></li>
        </ul>
    </nav>

    <div class="content recipeGrid">
        <div class="imgUrl">
            <img class="recipeImage" src="images/kerstboompizza.jpg" alt="">
        </div>

        <div class="title">
            <h1 class="recipeTitle">Kerstboompizza</h1>
        </div>

        <div class="ingredients bottomSpacing">
            <ul class="recipeIngredientsList">
                <li class="recipeIngredient">sanelay8</li>
                <li class="recipeIngredient">dverrierc</li>
                <li class="recipeIngredient">storbett2</li>
                <li class="recipeIngredient">tvokins5</li>
                <li class="recipeIngredient">clukinsh</li>
                <li class="recipeIngredient">arathbone4</li>
            </ul>
        </div>

        <div class="descr">
            <p class="spacing bottomSpacing">De mooiste kerstboom dit jaar? Die staat op je pizza! Kerstbomen versieren was nog nooit zó leuk.</p>
        </div>

        <div class="prep">
            <p class="spacing bottomSpacing">
                1

                Verwarm de oven voor op 200 °C. Haal het pizzadeeg uit de verpakking, de tomatensaus gebruik je niet. Snijd de rol(len) deeg door de helft en halveer in de breedte. Je hebt nu rechthoeken, maak ze met de hand wat ovaler. Leg deze op een met bakpapier beklede bakplaat.
                2

                Snijd de mozzarella in plakken van een ½ cm. Snijd de paprikaatjes in dunne plakjes van 1 cm breed. Rasp de broccoli grof. Halveer de rode ui en snijd in dunne boogjes van 1 mm.
                3

                Besmeer de pizzabodems dun met de ricotta, beleg met de mozzarella. Leg de broccoli strak op de plakjes mozzarella, in de vorm van een kerstboom (gebruik de liniaal om rechte lijnen te maken). Beleg de kerstboom met plakjes paprika en rode ui en de olijven als piek. Breek de pecannoten doormidden en leg als stam onder aan de boom. Besprenkel met olijfolie. Breng alles op smaak met zout en versgemalen peper.
                4

                Bak de pizza in het midden van de oven in ca. 12 min. gaar en knapperig.
            </p>
        </div>
    </div>

    <footer class="footer flex">
        <p class="center">Gemaakt door: Etienne en Sabrina</p>
    </footer>

</body>

</html>