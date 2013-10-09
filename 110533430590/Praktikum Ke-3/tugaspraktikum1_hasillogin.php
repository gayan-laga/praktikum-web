<!--
	Algoritma
		1.start
		2.tugaspraktikum1_hasillogin.php akan menyimpan hasil inputan pada variabel $Id dan $passwd
		3.tugaspraktikum1_hasillogin.php akan melakukan cek kondisi inputan berupa string atau bukan dengan fungsi is_string
		4.jika inputan berupa string maka tugaspraktikum1_hasillogin.php akan mencocokkan nilai $Id dengan $username dan $passwd dengan $password
		  apabila mempunyai nilai sama maka akan muncul pesan selamat datang dan jika tidak sama maka akan muncul pesan gagal
		5.jika inputtan bukan merupakan string maka akan muncul pesan inputan bukan string
		6.Finish
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>hasil Login</title>
</head>

<body>
	<?php
		$username = 'gayan';								//username yang dapat login
		$password = 'laga';									//password yang dapat login
		$Id = $_REQUEST['id'];								//inputan dimasukkan pada variabel $Id
		$passwd = $_REQUEST['password'];					//inputan dimasukkan pada variabel $passwd
		if(is_string($Id) && is_string($passwd)){			//cek nilai variabel apakah berupa string
			if($Id == $username && $passwd == $password){	//membandingkan nilai inputan dengan predefined
				echo '<h1>Selamat Datang '.$Id;				//tulisan jika login sukses
			}else{
				echo '<h1>Maav Anda Gagal Login</h1><br /><h1>Harap Periksa Username dan Password Anda</h1>';	//tulisan jika login gagal
			}
		}else{
			echo '<h1>Username dan Password Tidak Berupa String</h1>';	//pesan jika inputan bukan string
		}
	?>
</body>
</html>