<?php
//————————— pengambilan isi variable ———————–
$angka1 = $_POST['angka1']; 				//inisialisasi variabel 'angka1' di dapat dari 'angka1' yang ada di index.php
$angka2 = $_POST['angka2'];					//inisialisasi variabel 'angka2' di dapat dari 'angka2' yang ada di index.php
$operator = $_POST['operator2'];			//inisialisasi variabel 'operator2' di dapat dari 'operator2' yang ada di index.php

//—————————- proses hitung ————————–
if ($operator == '+')
	{
		$hasil = $angka1+$angka2;			//jika 'operator2' bernilai '+' maka 'angka1' dijumlahkan dengan 'angka2'
	}
if ($operator == '-')
	{
		$hasil = $angka1-$angka2;			//jika 'operator2' bernilai '-' maka 'angka1' dikurangkan dengan 'angka2'
	}
if ($operator == '*')
	{
		$hasil = $angka1*$angka2;			//jika 'operator2' bernilai '*' maka 'angka1' dikalikan dengan 'angka2'
	}
if ($operator == '/')
	{
		$hasil = $angka1/$angka2;			//jika 'operator2' bernilai '/' maka 'angka1' dibagi dengan 'angka2'
	}

// —– url redirect sekaligus mengrimkan variable hasil ———
header ("location:index.php?hasil1=$hasil");
?>