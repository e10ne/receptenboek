<?php
   
    class Ingredient {
        private int $ingredient_id;
        private string $name;

        public function getID(): int
        {
            return $this->ingredient_id;
        }

        public function getName(): string
        {
            return $this->name;
        }
    }
?>