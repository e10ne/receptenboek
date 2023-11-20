<?php
    declare(strict_types = 1);
    require_once("./classes/Database.php");
    require_once("./classes/RecipePage.php");

    $env = parse_ini_file(".env", false, INI_SCANNER_RAW);
    $hostname = $env["DB_HOST"];
    $dbname = $env["DB_NAME"];
    $username = $env["DB_USER"];
    $password = $env["DB_PASS"];
    $dsn = "mysql:host=$hostname;dbname=$dbname";

    $database = new Database($dsn, $username, $password);

    $recipe = new RecipePage($database);
    
    $id = 1;
    
    $mainTemplate = file_get_contents("./templates/layout.html", true);
    $contentTemplate = file_get_contents("./templates/singleRecipe.html", true);
    
    // $statement = $database->run("SELECT * FROM recipes WHERE id = ?", [$id]);
    // $data = $statement->fetch();

    

    $recipeReplace = ["{title}", "{preperation}","{image_url}" , "{ingredientlist}", "{description}"];
    $recipeValues = [$data["name"], $data["preperation"], $data["image_url"] ,"", $data["description"]];
    $recipeContent = str_replace($recipeReplace, $recipeValues, $contentTemplate);

    $mainReplace = ["{pageTitle}", "{pageContent}"];
    $mainValues = [$data["name"], $recipeContent];
    echo str_replace($mainReplace, $mainValues, $mainTemplate);
    
?>