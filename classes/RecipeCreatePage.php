<?php
    class RecipeCreatePage extends RecipeDB implements PageDisplay {
        

        public function displayPage(): string
        {
            $template = file_get_contents("./templates/layout.html", true);
            $replace = ["{pageTitle}", "{pageContent}"];
            // replace second value when implementing
            $values = ["Nieuw recept maken", ""];
            return "";
        }
    }
?>