<?php

require_once __DIR__ . "/Doll.php";
require_once __DIR__ . "/Accessory.php";

class Payment
{
    private $doll = null;
    private $accessories = [];

    private $total = 0;

    public function __construct()
    {
    }

    public function selectDoll(Doll $doll)
    {
        $this->doll = $doll;
    }


    public function addAccessory(Accessory $accessory)
    {
        $this->accessories[] = $accessory;
    }

    public function getDoll()
    {
        return $this->doll;
    }

    public function getAccessories()
    {
        return $this->accessories;
    }

    public function discount1()
    {
        $hasPedang = false;
        $hasPerisai = false;

        foreach ($this->accessories as $accessory) {
            if ($accessory->getName() === "Pedang") $hasPedang = true;
            if ($accessory->getName() === "Perisai") $hasPerisai = true;
        }

        if ($hasPedang && $hasPerisai) {
            $this->total = $this->total + 0.10;
        }
    }

    public function discount2()
    {
        $hasTopi = false;
        $hasSayapMalaikat = false;

        foreach ($this->accessories as $accessory) {
            if ($accessory->getName() === "Topi") $hasTopi = true;
            if ($accessory->getName() === "Sayap Malaikat") $hasSayapMalaikat = true;
        }

        if ($hasTopi && $hasSayapMalaikat) {
            $this->total = $this->total + 0.13;
        }
    }

    public function discount3()
    {
        if (isset($this->accessories[2]) && $this->accessories[2] . getName() === "Cincin Sakti") {
            $this->total = $this->total + 0.2;
        }
    }

    public function calculate() {
        $this->total = $this->doll->getPrice();

        foreach ($this->accessories  as $accessory) {
            $this->total += $accessory->getPrice();
        }

        $this->discount1();
        $this->discount2();
        $this->discount3();
    }

    public function getTotal() {
        return $this->total;
    }
}
