<?php
echo "===================== <br>";
echo " TUGAS POLIMORPHISM <br>";
echo "===================== <br><br>";
class kendaraan{
	private $merk;
	private $harga;
	private $negara;
	
	function __construct($merk,$harga,$negara){
		$this->merk=$merk;
		$this->harga=$harga;
		$this->negara=$negara;
	}
	function BacaMerk(){
		return $this->merk;
	}
	function BacaHarga(){
		return $this->harga;
	}
	function BacaNegara(){
		return $this->negara;
	}
}
$motor = new kendaraan("Yaris",10000000,"Australia");
echo "Merk Kendaraan = ".$motor->BacaMerk()."<br>";
echo "Harga Motor = ".$motor->BacaHarga()."<br>";
echo "Negara Asal = ".$motor->BacaNegara()."<br>";
echo "======================= <br>";

$motor2 = new kendaraan("Terios",150000000,"Prancis");
echo "Merk Kendaraan = ".$motor2->BacaMerk()."<br>";
echo "Harga Motor = ".$motor2->BacaHarga()."<br>";
echo "Negara Asal = ".$motor2->BacaNegara()."<br>";
echo "======================= <br>";

$motor3 = new kendaraan("Avanza",120000000,"Amerika");
echo "Merk Kendaraan = ".$motor3->BacaMerk()."<br>";
echo "Harga Motor = ".$motor3->BacaHarga()."<br>";
echo "Negara Asal = ".$motor3->BacaNegara()."<br>";
?>