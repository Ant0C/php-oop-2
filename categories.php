<?php

class categories {
    protected string $animal="cane";
    protected $img = "./img/cane.webp";

    function __construct($_animal) {

        if($_animal === "gatto"){
            $this->animal = $_animal;
            $this->img = "./img/gatto.avif";
        }
    }

    public function getAnimal() {
        return $this->animal;
    }

    public function getimg() {
        return $this->img;
    }

}

?>