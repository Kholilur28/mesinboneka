<?php

class Doll
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$dolls = [
    new Doll('Beruang', 900000),
    new Doll('Elang', 900000),
    new Doll('Harimau', 900000),
    new Doll('Naga', 900000),
    new Doll('Singa', 900000),
];
