<?php
    class RecipePage extends RecipeDB implements PageDisplay {
        private string $pageTitle;

        private function setTitle(string $title): void
        {
            $this->pageTitle = $title;
        }

        private function displayIngredients(): string
        {
            $output = "";
            $ingredients = $this->data["ingredients"];
            foreach($ingredients as $ingredient) {
                $template = file_get_contents("./templates/ingredient.html");
                $replace = "{ingredientName}";
                $value = $ingredient->getName();
                $output .= str_replace($replace, $value, $template);
            }
            

            return $output;
        }

        private function displayRecipe(): string
        {
            $template = file_get_contents("./templates/singleRecipe.html");
            $replace = ["{image_url}", "{title}", "{description}", "{preperation}", "{ingredientlist}"];
            $recipe = $this->data["recipe"];
            $this->setTitle($recipe->getName());
            $ingredients = $this->displayIngredients();
            $values = [$recipe->getImage(), $recipe->getName(), $recipe->getDescription(), $recipe->getPreperation(), $ingredients];
            
            return str_replace($replace, $values, $template);
        }

        private function displayNotFound(): string
        {
            $template = file_get_contents("./templates/notFound.html");
            $replace = ["{dataType}"];
            $values = ["recept"];
            $this->setTitle("Recept niet gevonden");

            return str_replace($replace, $values, $template);
        }
        
        public function displayPage(): string
        {
            $template = file_get_contents("./templates/layout.html");
            $replace = ["{pageTitle}", "{pageContent}"];
            if (!empty($this->data["recipe"])) {
                $content = $this->displayRecipe();
            } else {
                $content = $this->displayNotFound();
            }
            // Replace first value when implementing
            $values = [$this->pageTitle, $content];

            return str_replace($replace, $values, $template);
        }
    }
?>