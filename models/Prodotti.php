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
        if(strlen($name) < 3) {
            throw new Exception("nome del prodotto non valido");
        }
        $this -> name = $name;
    }

    public function getName(): string{
        return $this -> name;
    }

    //IMMAGINE

    public function setImg(string $img): void{
        if(!strlen($img)) {
            throw new Exception("percorso dell'immagine non valido");
        }
        $this -> img = $img;
    }

    public function getImg(): ?string{
        return $this -> img;
    }

    //PREZZO

    public function setPrice(float $price): void{
        if($price < 0) {
            throw new Exception("prezzo non valido");
        }
        $this -> price = $price;
    }

    public function getPrice(): float{
        return $this -> price;
    }

    //DESCRIZIONE

    public function setDescription(float $description): void{
        if(strlen($description) < 20) {
            throw new Exception("descrizione del prodotto non valida");
        }
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
    public function setAvailability( bool $availability): void {
        if(!is_bool($availability)) {
            $this->availability = false;
        }
        $this->availability = $availability;
    }

    public function getAvailability():string{
        if($this->availability === false)
            return 'Non disponibile';
        else 
            return 'Disponibile';
    }

}