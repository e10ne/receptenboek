<?php
    class Validation {
        private array $errors;

        private function validateLength(string $value, int $min, int $max): bool
        {
            return (strlen($value) > $min && strlen($value) < $max);
        }

        
    }
?>