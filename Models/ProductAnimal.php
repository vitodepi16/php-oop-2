<?php
include __DIR__ . '/../Traits/Weight.php';
class ProductAnimal extends Product
{
    use Weight;
    public $type;
    public function __construct($name, $price, $image, $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->type = $type;
        // try {
        //     $this->setWeight($weight, $unit);
        // } catch (Exception $e) {
        //     echo 'Wrong' . $e->getMessage();
        // }
    }
}
