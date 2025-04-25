<?php

class Auto
{
    public $marka;
    public $modelis;
    public $gads;

    public function __construct($marka, $modelis, $gads)
    {
        $this->marka = $marka;
        $this->modelis = $modelis;
        $this->gads = $gads;
    }

    public function showinfo()
    {
        return "Marka: $this->marka,
        Modelis: $this->modelis,
        Gads: $this->gads";
    }
}

$auto1 = new Auto("Audi", "A4", 2000);
$auto2 = new Auto("Volvo", "XV70", 2003);

echo $auto1->showinfo();
