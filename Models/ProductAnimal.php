<?php

class ProductAnimal extends Product
{
    public $type;
    public function __construct($name, $price, $image, $type)
    {

        $this->type = $type;
    }
}
