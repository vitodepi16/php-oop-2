<?php

class Product
{
    public $name, $price, $image;

    public  function __construct($name, $price, $image,)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}
