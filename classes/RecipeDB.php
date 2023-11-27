<?php
    class RecipeDB implements DatabaseOperations {
        protected Database $database;
        protected $data;

        public function create(array $values)
        {
            
        }

        public function findOne(int $id)
        {
            $recipe = $this->database->run("SELECT * FROM `recipes` where `id` = :id", ["id" => $id])->fetchObject("Recipe");

            $ingredientsQuery = "SELECT `ingredients`.`name`, `ingredients`.`id` AS ingredient_id FROM `recipe_ingredients` RIGHT JOIN `ingredients` ON `recipe_ingredients`.`ingredient_id` = `ingredients`.`id` WHERE `recipe_ingredients`.`recipe_id` = :id";
            $ingredients = $this->database->run($ingredientsQuery, ["id" =>$id])->fetchAll(PDO::FETCH_CLASS, "Ingredient");
            
            $this->data = ["recipe" => $recipe, "ingredients" => $ingredients];
        }

        public function findMultiple(int $limit)
        {
            
        }

        public function update(int $id, array $values)
        {
            
        }

        public function delete(int $id)
        {
            
        }

        public function __construct(Database $database)
        {
            $this->database = $database;            
        }
    }
?>