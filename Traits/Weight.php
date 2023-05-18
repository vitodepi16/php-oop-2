<?php
trait Weight
{
    public $weight;

    public function setWeight($weight, $unit)
    {
        return $this->weight = $weight . $unit;
    }
    public function getWeight()
    {
        return $this->weight;
    }
}
