<?php
class mobil{
	private $merk;
	private $harga;
function __construct($merk,$harga,$warna,$tipe){
	$this->merk=$merk;
	$this->harga=$harga;
	$this->warna=$warna;
	$this->tipe=$tipe;
}
function BacaMerk(){
	return $this->merk;
}
function BacaHarga(){
	return $this->harga;
}
function BacaWarna(){
	return $this->warna;
}
function BacaTipe(){
	return $this->tipe;
}
//function __destruct(){
//	echo "Merk, harga, warna dan tipe telah dihapus";
//}
}
$mobil = new mobil("Yaris",250000000,"Putih","Tipe J");
echo "Merk Mobil = ".$mobil->BacaMerk()."<br>";
echo "Harga Mobil = ".$mobil->BacaHarga()."<br>";
echo "Warna Mobil = ".$mobil->BacaWarna()."<br>";
echo "Tipe Mobil = ".$mobil->BacaTipe()."<br>";
?>