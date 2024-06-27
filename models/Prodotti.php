<?php
require_once __DIR__ .'/categoria.php';

class Product {
    private string $name;
    private ?string $img = null;
    private float $price = 0;
    private ?string $description = null;
    private Category $category; //se per cani o gatti
    private bool $availability = false;

    //COSTRUTTORE
    public function __construct(string $name, int $price, Category $category,) {
        $this -> setName($name);
        $this -> setPrice($price);
        $this -> setCategory($category);
    }

    //TIOLO

    public function setName(string $name): void{
        $this -> name = $name;
    }

    public function getName(): string{
        return $this -> name;
    }

    //IMMAGINE

    public function setImg(string $img): void{
        $this -> img = $img;
    }

    public function getImg(): ?string{
        return $this -> img;
    }

    //PREZZO

    public function setPrice(float $price): void{
        $this -> price = $price;
    }

    public function getPrice(): float{
        return $this -> price;
    }

    //DESCRIZIONE

    public function setDescription(float $description): void{
        $this -> description = $description;
    }

    public function getDescription(): ?string{
        return $this -> description;
    }

    //CATEGORIA

    public function setCategory(Category $category): void{
        $this -> category = $category;
    }

    public function getCategory(): Category{
        return $this -> category;
    }




    // DISPONIBILITA'
    public function getAvailability():string{
        return $this->availability;
    }

    public function setAvailability( string $availability): void {
        $this->availability = $availability;
    }
}