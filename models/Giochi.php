<?php

require_once __DIR__ .'/Prodotti.php';

class Toys extends Product {
    private ?string $material = null;
    private ?int $age = null;


    // MATERIALI
    public function getMaterial(): ?string{
        return $this->material;
    }

    public function setMaterial($material): void{
        $this->material = $material;
    }

    // ETA' CONSIGLIATA
    public function getAge(): ?int{
        return $this->age;
    }

    public function setAge($age): void{
        $this->age = $age;
    }
}