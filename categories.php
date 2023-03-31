<?php

class categories {
    public $animal;
    //public $img = "...";

    function __construct($_animal) {
        $this->animal = $_animal;
        //$this->img = $_img;


    }

    public function verifyAnimal(){
        if($this->$animal === "gatto" || "cane"){
            return $this -> animal;
        }
    }
}

?>