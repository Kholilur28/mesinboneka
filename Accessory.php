<?php

class Accessory
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

$accessories = [
    new Accessory('Topi', 30000),
    new Accessory('Tongkat', 20000),
    new Accessory('Pedang', 50000),
    new Accessory('Perisai', 40000),
    new Accessory('Cincin sakti', 120000),
    new Accessory('Sayap malaikat', 100000),
];
