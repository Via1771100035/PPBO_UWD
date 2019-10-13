<?php
	class kendaraan{
		private $merk;
		private $harga;
		private $jmlroda;
	
	function setMerk($merk){
		$this->merk=$merk;
	}
	function setHarga($harga){
		$this->harga=$harga;
	}
	function setJmlroda($jmlroda){
		$this->jmlroda=$jmlroda;
	}
	
	function status(){
		if($this->harga > 150000000){
			return "Mahal";
		}else{
			return "Murah";
		}
		}
	
	function getMerk(){
		return $this->merk;
	}
	function getHarga(){
		return $this->harga;
	}
	function getJmlroda(){
		return $this->jmlroda;
	}
	}
	$objkendaraan = new kendaraan();
	$objkendaraan->setMerk("Yaris");
	$objkendaraan->setHarga(140000000);
	$objkendaraan->setJmlroda(4);
	
	echo 'Merk Mobil adalah '.$objkendaraan->getMerk().'<br>';
	echo 'Harga Mobil = '.$objkendaraan->getHarga().'<br>';
	echo 'Jumlah Rodanya = '.$objkendaraan->getJmlroda.'<br>';
	echo 'Status Harga = '.$objkendaraan->status();
?>