<?php
class Bapak{
	var $nama="Bapak";
	function Bapak ($n){
		$this->nama = $n;
	}
	function Hallo(){
		echo "Halo, saya $this->nama <br>";
	}
}
class Anak extends Bapak{
}
$test = new Anak("Anak dari Bapak <br>");
$test->Hallo();
?>