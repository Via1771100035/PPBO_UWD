<?php
class pemrogram{
	var $nama;
	function getName(){
		return $this->nama;
	}
	function setName($nama){
		$this->nama=$nama;
		
	}
	function pemrogram($nama){
		$this->setName($nama);
	}
}
function changeName($pemrogram, $nama){
	$pemrogram->setName($nama);
}
$pemrog = new pemrogram("Mufty <br><br>");
echo "Objek sebelum diganti : <br>";
echo $pemrog->getName();

echo "Objek setelah diganti : <br>";
changeName($pemrog, "Via <br>");
echo $pemrog->getName();
?>