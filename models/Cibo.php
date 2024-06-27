<?php 

require_once __DIR__ .'/Prodotti.php';

class Food extends Product {
    private ?string $ingredients = null;
    private ?string $allergens = null;
    private ?string $expiration_date = null;

    // INGREDIENTI
    public function getIngredients(): ?string{
        return $this->ingredients;
    }


    public function setIngredients($ingredients): void{
        $this->ingredients = $ingredients;
    }

    // ALLERGENI
    public function getAllergens(): ?string{
        return $this->allergens;
    }

    public function setAllergens($allergens): void{
        $this->allergens = $allergens;
    }

    // DATA DI SCADENZA
    public function getExpiration_date(): ?string{
        return $this->expiration_date;
    }

    public function setExpiration_date($expiration_date): void{
        $this->expiration_date = $expiration_date;
    }
}