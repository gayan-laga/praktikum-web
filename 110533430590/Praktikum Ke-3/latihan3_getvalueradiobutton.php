<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Data Radio Button</title>									<!--judul tab browser-->
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">		<!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Jenis Kelamin
			<input type="radio" name="sex" value="Pria" />Pria				<!--input berupa radio button (opsi pria)-->
			<input type="radio" name="sex" value="Wanita" />Wanita <br />	<!--input berupa radio button (opsi wanita)-->
			<input type="submit" value="OK" />								<!--membuat button submit -->
		</form>

		<?php 
			if (isset($_POST['sex'])){										//kondisi melakukan cek sex mempunyai nilai atau tidak
					echo $_POST['sex'];										//mencetak isi dari variabel 'sex' dengan menggunakan superglobal POST
			}
		?>
	</body>
</html>