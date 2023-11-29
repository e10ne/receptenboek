<?php
    class RecipeDB implements DatabaseOperations {
        protected Database $database;
        protected array $data;
        protected int $newLimit;
        protected bool $hasMoreRecipes;

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
            $limitPlusOne = $limit + 1;
            $recipes = $this->database->run("SELECT `id`, `name`, `description` from recipes ORDER BY `id` DESC LIMIT :limit", ["limit" =>$limitPlusOne])->fetchAll(PDO::FETCH_CLASS, "Recipe");

            if (count($recipes) === $limitPlusOne) {
                $this->hasMoreRecipes = true;
                $this->newLimit = $limit + 3;
            } else {
                $this->hasMoreRecipes = false;
            }

            $this->data = array_slice($recipes, 0, $limit);
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