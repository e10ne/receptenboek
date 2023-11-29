<?php
    class IndexPage extends RecipeDB implements PageDisplay {

        private function displayShowMoreButton(): string
        {
            $template = file_get_contents("./templates/showMoreButton.html", true);
            $replace = "{limit}";
            $value = "6";

            return str_replace($replace, $value, $template);
        }

        private function displayRecipe(Recipe $recipe): string
        {
            $template = file_get_contents("./templates/recipeThumbnail.html", true);
            $replace = ["{recipeID}", "{recipeName}", "{recipeDescription}"];
            $values = [$recipe->getID(), $recipe->getName(), $recipe->getDescription()];

            return str_replace($replace, $values, $template);
        }

        private function displaySingleRow(array $recipeRow): string
        {
            $template = file_get_contents("./templates/recipeRow.html", true);
            $replace = "{recipeThumbnails}";
            $value = "";
            
            foreach($recipeRow as $recipe) {
                $value .= $this->displayRecipe($recipe);
            }

            return str_replace($replace, $value, $template);
        }

        private function displayAllRows(): string
        {
            $data = $this->data;
            $dataChunks = array_chunk($data, 3, true);

            $template = file_get_contents("./templates/mainPage.html", true);
            $replace = ["{recipeRows}", "{showMoreButton}"];
            $rows = "";
            foreach($dataChunks as $recipeRow) {
                $rows .= $this->displaySingleRow($recipeRow);
            }
            $replaceButton = $this->displayShowMoreButton();
            $values = [$rows, $replaceButton];

            return str_replace($replace, $values, $template);
        }

        public function displayPage(): string
        {
            $template = file_get_contents("./templates/layout.html", true);
            $replace = ["{pageTitle}", "{pageContent}"];
            $content = $this->displayAllRows();
            $values = ["recepten", $content];
            return str_replace($replace, $values, $template);
        }
    }
?>