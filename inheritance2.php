<?php
echo "==========CONTOH SINGLE INHERITANCE========== <br><br>";
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
$test = new Anak("Anita Putri dari Bapak Joko <br>");
$test->Hallo();

$test2 = new Anak("Anfredo anak ke-2 dari Bapak Joko <br>");
$test2->Hallo();
?>