<?php
    declare(strict_types = 1);
    $id = 5;
    $user = "root";
    $pass = "";
    $template = file_get_contents("../templates/singleRecepe.html", true);
    $connection = new PDO("mysql:host=localhost;dbname=recipe_book", $user, $pass);
    $statement = $connection->query("SELECT * FROM recipes WHERE id = $id");
    $data = $statement->fetch();

    $replace = ["{title}", "{preperation}","{image_url}" , "{ingredientlist}"];
    $values = [$data["name"], $data["preperation"], $data["image_url"] ,""];

    echo str_replace($replace, $values, $template);
?>