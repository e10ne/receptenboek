<?php
    class Validation {
        private array $errors = [];

        private function validateLength(string $value, int $min, int $max): bool
        {
            return !(strlen($value) > $min && strlen($value) < $max);
        }

        private function validateImage(string $url): bool
        {
            // implement when i have a better idea
            return true;
        }

        private function validateCharacters(string $value)
        {
            return preg_match("/[^a-zA-Z\d\s\-\.\,]/m", $value);        
        }

        public function validateNewRecipe(string $title, string $description, string $preperation, array $ingredients, string $image_url): array
        {
            if ($this->validateLength($title, 3, 20))$this->errors["titleLength"] = "Titel moet tussen 3 en 20 karakters zijn.";
            if ($this->validateCharacters($title)) $this->errors["titleChars"] = "Titel bevat ongeldige karakters.";
            
            if ($this->validateLength($description, 3, 255)) $this->errors["descriptionLength"] = "Beschrijving moet tussen 3 en 255 karakters zijn.";
            if ($this->validateCharacters($description)) $this->errors["descriptionChars"] = "Beschrijving bevat ongeldige karakters";

            if ($this->validateLength($preperation, 255, 6500)) $this->errors["preperationLength"] = "Bereidingswijze moet op zijn minst 255 karakters zijn.";
            if ($this->validateCharacters($preperation)) $this->errors["preperationChars"] = "bereidingswijze heeft ongeldige karakters";
            // zet lijst geldige karakters in recipeForm.html

            return $this->errors;
        }


        /*
            titel,
            beschrijving
            bereidingswijze
            ingredienten (andere pagina dan recept)
            image_url
        */
    }
?>