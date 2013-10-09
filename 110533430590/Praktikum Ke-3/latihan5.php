<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Data CheckBox</title>											<!--judul tab browser-->
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"><!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Hobby
			<input type="checkbox" name="hobby[]" value="Membaca" />Membaca		<!-- membuat CheckBox 'Membaca' -->
			<input type="checkbox" name="hobby[]" value="Olahraga" />Olahraga	<!-- membuat CheckBox 'Olahraga' -->
			<input type="checkbox" name="hobby[]" value="Menyanyi" />Menyanyi	<!-- membuat CheckBox 'Menyanyi' -->
			<input type="submit" value="OK" />									<!-- membuat button submit -->
		</form>

		<?php 
			//Ekstraksi Nilai
			if (isset($_POST['hobby'])){						//kondisi melakukan cek variabel 'hobby' mempunyai nilai atau tidak
				foreach ($_POST['hobby'] as $key => $val){		//pengulangan untuk mendapatkan nilai array 'hobby' dan disimpan pada variabel $val
					echo $key.'->'.$val.'<br />';				//menampilkan index array dan isi array
				}
			}
		?>
	</body>
</html>