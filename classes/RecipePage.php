<?php
    class RecipePage extends Recipe implements PageDisplay {
        private function displayRecipe(): string
        {
            $template = file_get_contents("./templates/singleRecipe.html");
            $replace = ["{image_url}", "{title}", "{description}", "{preperation}", "{ingredientlist}"];
            // replace values when implementing
            $values = ["", "", "", "", ""];
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