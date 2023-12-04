<?php
 declare(strict_types = 1);
 require_once("./interfaces/DatabaseOperations.php");
 require_once("./interfaces/PageDisplay.php");
 require_once("./classes/Database.php");
 require_once("./classes/Recipe.php");
 require_once("./classes/RecipeDB.php");
 require_once("./classes/IndexPage.php");
// remove when done testing
require_once("./classes/Validation.php");

 $env = parse_ini_file(".env", false, INI_SCANNER_RAW);
 $hostname = $env["DB_HOST"];
 $dbname = $env["DB_NAME"];
 $username = $env["DB_USER"];
 $password = $env["DB_PASS"];
 $dsn = "mysql:host=$hostname;dbname=$dbname";

 $database = new Database($dsn, $username, $password);

 $index = new IndexPage($database);

 $limit = $_POST["recipeLimit"] ?? 3;

 $index->findMultiple((int)$limit);

 echo $index->displayPage();

 // remove when done testing
 $validation = new Validation;
$errors = $validation->validateNewRecipe("asdaf/", "aaaawqe", "", [], "");
echo "<pre>";
print_r($errors);
echo "</pre>";
?>
