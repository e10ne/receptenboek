<?php
   
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
        <h1>Receptenboek:</h1>
    </header>

    <nav class="navigation">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Add Recipe</a></li>
            <li><a href="#">Add Category</a></li>
        </ul>
    </nav>

    <div class="content">
        <div class="flex flexVertical spaceAround">
        <div></div>
            <div class="flex flexVertical">
                <div class="flex flexHorizontal recipeContainer">

                    <a href="recipeView.php" class="recipePreviewBox flex">
                        <div>
                            <h3>Recipe Name</h1>
                                <p>Recipe description</p>
                        </div>
                    </a>

                    <a href="recipeView.php" class="recipePreviewBox flex">
                        <div>
                            <h3>Recipe Name</h1>
                                <p>Recipe description</p>
                        </div>
                    </a>

                    <a href="recipeView.php" class="recipePreviewBox flex">
                        <div>
                            <h3>Recipe Name</h1>
                                <p>Recipe description</p>
                        </div>
                    </a>

                </div>
                <div class="flex flexHorizontal recipeContainer">
                    <a href="recipeView.php" class="recipePreviewBox flex">
                        <div>
                            <h3>Recipe Name</h1>
                                <p>Recipe description</p>
                        </div>
                    </a>

                    <a href="recipeView.php" class="recipePreviewBox flex">
                        <div>
                            <h3>Recipe Name</h1>
                                <p>Recipe description</p>
                        </div>
                    </a>

                    <a href="recipeView.php" class="recipePreviewBox flex">
                        <div>
                            <h3>Recipe Name</h1>
                                <p>Recipe description</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="buttonContainer">
                <button class="button">Show More</button>
            </div>
            <div></div>
        </div>
    </div>

    <footer class="footer flex">
        <p class="center">Gemaakt door: Etienne en Sabrina</p>
    </footer>

</body>

</html>