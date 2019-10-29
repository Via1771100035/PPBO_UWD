<?php
class mobil{
	var $warna;
	var $merk;
	function __construct(){
		$this->warna="Biru <br>";
		$this->merk="BMW";
	}
	function gantiWarna($warnaBaru){
		$this->warna=$warnaBaru;
	}
	function tampilWarna(){
		echo "Warna Mobilnya : ".$this->warna;
	}
}
$a=new mobil();
$b=new mobil();
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br><b>Mobil pertama ganti warna</b><br>";
$a->gantiWarna("Merah");
$a->tampilWarna();
?>