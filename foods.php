<?php

require_once __DIR__ . "/products.php";

class foods extends products{
    public $type;
    public $weight;

    function __construct($_type,$_weight,$_price,$_description) {
        $this->type = $_type;
        $this->weight = $_weight;

        parent::__construct($_price, $_description);

    }
}


?>