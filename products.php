<?php

class products{
    public $price;
    public $description;

    function __construct($_price,$_description) {
        $this->price = $_price;
        $this->description = $_description;
    }

}


?>