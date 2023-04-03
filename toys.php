<?php

require_once __DIR__ . "/products.php";
require_once __DIR__ . "/categories.php";


class toys extends products{

    public $type;
    public $material;

    function __construct($_type,$_material,$_price,$_description,categories $_categories,) {
        $this->type = $_type;
        $this->material = $_material;

        parent::__construct($_price, $_description,$_categories);

    }

}


?>