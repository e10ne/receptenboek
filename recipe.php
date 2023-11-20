<?php
    declare(strict_types = 1);
    require_once("database.php");
    
    $id = 1;
    
    $mainTemplate = file_get_contents("./templates/layout.html", true);
    $contentTemplate = file_get_contents("./templates/singleRecepe.html", true);
    
    $statement = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
    $statement->execute(["id" => $id]);
    $data = $statement->fetch();

    $recipeReplace = ["{title}", "{preperation}","{image_url}" , "{ingredientlist}", "{description}"];
    $recipeValues = [$data["name"], $data["preperation"], $data["image_url"] ,"", $data["description"]];
    $recipeContent = str_replace($recipeReplace, $recipeValues, $contentTemplate);

    $mainReplace = ["{pageTitle}", "{pageContent}"];
    $mainValues = [$data["name"], $recipeContent];
    echo str_replace($mainReplace, $mainValues, $mainTemplate);
    
?>