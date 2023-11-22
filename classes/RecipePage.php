<?php
    class RecipePage extends Recipe implements PageDisplay {
        private function displayIngredients(): string
        {
            $output = "";
            $ingredients = $this->data["ingredients"];
            foreach($ingredients as $ingredient) {
                $template = file_get_contents("./templates/ingredient.html");
                $replace = "{ingredientName}";
                $value = $ingredient["name"];
                $output .= str_replace($replace, $value, $template);
            }
            

            return $output;
        }

        private function displayRecipe(): string
        {
            $template = file_get_contents("./templates/singleRecipe.html");
            $replace = ["{image_url}", "{title}", "{description}", "{preperation}", "{ingredientlist}"];
            $recipe = $this->data["recipe"];
            $ingredients = $this->displayIngredients();
            $values = [$recipe["image_url"], $recipe["name"], $recipe["description"], $recipe["preperation"], $ingredients];
            
            return str_replace($replace, $values, $template);
        }
        
        public function displayPage(): string
        {
            $template = file_get_contents("./templates/layout.html");
            $replace = ["{pageTitle}", "{pageContent}"];
            $content = $this->displayRecipe();
            // Replace first value when implementing
            $values = ["", $content];

            return str_replace($replace, $values, $template);
        }
    }
?>