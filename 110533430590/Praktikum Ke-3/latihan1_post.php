<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Identifikasi Metode</title>							<!--judul tab browser-->
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"><!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Nama <input type="text" name="nama" /> <br />			<!--membuat Text Field yang nanti nilainya disimpan dalam variabel 'nama'-->	
			<input type="submit" value="OK" />						<!--membuat button submit -->
		</form>
		<?php 
			if (isset($_POST['nama'])){								//kondisi melakukan cek variabel 'nama' mempunyai nilai atau tidak
					echo 'Hallo, '.$_POST['nama'];					//mencetak isi dari variabel 'nama' dengan menggunakan superglobal POST
			}
		?>
	</body>
</html>