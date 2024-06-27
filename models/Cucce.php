<?php

require_once __DIR__ .'/Prodotti.php';

class Cucce extends Product {
    private ?string $size = null;

    // DIMENSIONI
    public function getSize(): ?string{
        return $this->size;
    }

    public function setSize($size): void{
        $this->size = $size;
    }
}
