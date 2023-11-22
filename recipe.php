<?php
    declare(strict_types = 1);
    require_once("./classes/Database.php");
    require_once("./interfaces/DatabaseOperations.php");
    require_once("./interfaces/PageDisplay.php");
    require_once("./classes/Recipe.php");
    require_once("./classes/RecipePage.php");

    $env = parse_ini_file(".env", false, INI_SCANNER_RAW);
    $hostname = $env["DB_HOST"];
    $dbname = $env["DB_NAME"];
    $username = $env["DB_USER"];
    $password = $env["DB_PASS"];
    $dsn = "mysql:host=$hostname;dbname=$dbname";

    $database = new Database($dsn, $username, $password);

    $recipe = new RecipePage($database);
    
    if (!isset($_GET["id"]) || empty($_GET["id"])) {
        // redirect to index?
    }

    $id = (int) $_GET["id"];

    $recipe->findOne($id);
    
    echo $recipe->displayPage();
?>