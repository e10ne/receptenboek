<?php
    Class Recipe {
        private int $id;
        private string $name;
        private string $description;
        private string $preperation;
        private string $image_url;
        private string $timestamp;
        private array $ingredients;

        public function getID(): int
        {
            return $this->id;
        }
        
        public function getName(): string
        {
            return $this->name;
        }

        public function getImage(): string
        {
            return $this->image_url;
        }

        public function getDescription(): string
        {
            return $this->description;
        }

        public function getPreperation(): string
        {
            return $this->preperation;
        }

        public function getTimestamp(): string
        {
            return $this->timestamp;
        }

    }
?>