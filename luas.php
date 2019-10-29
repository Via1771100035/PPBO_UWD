<?php
echo "=================== <br>";
echo "Menghitung Bidang Datar <br>";
echo "=================== <br><br>";
function HitungLuasPersegiPanjang($panjang, $lebar){
	$luas = $panjang * $lebar;
	echo "Luas Persegi Panjang <br>";
	echo $luas;
	echo " Cm";
}
$x=5;
$y=10;

HitungLuasPersegiPanjang($x,$y);
echo "<br>*********************<br>";
function HitungLuasPersegi($sisi){
	$luas = $sisi * $sisi;
	echo "Luas Persegi <br>";
	echo $luas;
	echo " Cm";
}
$a=6;

HitungLuasPersegi($a);
echo "<br>*********************<br>";
function HitungLuasLingkaran($jari){
	$luas = $jari * $jari * 3.14;
	echo "Luas Lingkaran <br>";
	echo $luas;
	echo " Cm";
}
$b=8;

HitungLuasLingkaran($b);
echo "<br>*********************<br>";
echo "<b><br>Dapat ditambah luas bidang yang lain</b>";
?>