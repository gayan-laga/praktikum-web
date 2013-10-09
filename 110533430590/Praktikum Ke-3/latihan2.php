<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Prefilling Text Field</title>						<!--judul tab browser-->
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"><!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Nama <input type="text" name="nama" 
			value="<?php 
				echo isset($_POST['nama']) ? $_POST['nama'] : ''; 	//menampilkan isi dari variabel 'nama' pada text field [prefilling]
			?>" /> <br />											<!-- membuat Text Field yang nanti nilainya disimpan dalam variabel 'nama' -->
			<input type="submit" value="OK" />
		</form>

		<?php 
			if (isset($_POST['nama'])){								//kondisi melakukan cek variabel 'nama' mempunyai nilai atau tidak
				echo $_POST['nama'];								//mencetak isi dari variabel 'nama' dengan menggunakan superglobal POST
			}
		?>
	</body>
</html>