<?php
require_once __DIR__ . "/categories.php";


class products{
    public $price;
    public $description;
    public categories $categories;

    function __construct($_price,$_description, categories $_categories) {
        $this->price = $_price;
        $this->description = $_description;
        $this->categories = $_categories;
    }
}


?>