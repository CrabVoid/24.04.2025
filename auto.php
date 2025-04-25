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
    public function showInfo()
    {
        return "Marka: $this->marka, Modelis: $this->modelis, Gads: $this->gads";
    }
}

$auto1 = new Auto("BMW", "X5", 2020);
$auto2 = new Auto("Audi", "A4", 2022);

echo $auto1->showInfo();
echo "<br>";
echo $auto2->showInfo();
