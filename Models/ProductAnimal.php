<?php

class ProductAnimal extends Product
{
    public $type;
    public function __construct($name, $price, $image, $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->type = $type;
    }
}
