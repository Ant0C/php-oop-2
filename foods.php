<?php

require_once __DIR__ . "/products.php";
require_once __DIR__ . "/categories.php";
require_once __DIR__ . "/deals.php";


class foods extends products{
    use deals;

    public $type;
    public $weight;

    function __construct($_type,$_weight,$_price,$_description,categories $_categories) {
        $this->type = $_type;
        $this->weight = $_weight;

        parent::__construct($_price, $_description,$_categories);

    }

}


?>