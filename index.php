<?php

class Mobil {

	public $merk, $tipe, $mesin, $max_speed;

	public function cetakTipe(){
		return $this->tipe;
	}
}

$bmw = new mobil;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280km/h";

echo "Tipe ".$bmw->cetakTipe();