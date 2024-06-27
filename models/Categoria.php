<?php 
class Category {

    private string $name_category;
    private string $icon_category;

    public function __construct(string $name_category, string $icon_category) {
        $this -> setNameCategory($name_category);
        $this -> setIconCategory($icon_category);
    }

    //NOME CATEGORIA

    public function setNameCategory(string $name_category): void{
        $this -> name_category = $name_category;
    }

    public function getNameCategory(): string{
        return $this -> name_category;
    }

    //ICONA CATEGORIA

    public function setIconCategory(string $icon_category): void{
        $this -> icon_category = $icon_category;
    }

    public function getIconCategory(): string{
        return $this -> icon_category;
    }

}