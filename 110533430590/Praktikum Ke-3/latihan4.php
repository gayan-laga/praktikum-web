<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Data Seleksi</title>						<!--judul tab browser-->
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">	<!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Pekerjaan
			<select name="job">							<!--membuat combo box yang nantinya nilainya disimpan dalam variabel 'job'-->
				<option value="Mahasiswa">Mahasiswa		<!--membuat pilihan Mahasiswa-->
				<option value="ABRI">ABRI				<!--membuat pilihan ABRI-->
				<option value="PNS">PNS					<!--membuat pilihan PNS-->
				<option value="Swasta">Swasta			<!--membuat pilihan Swasta-->
			</select> <br />
			<input type="submit" value="OK" />			<!--membuat Button Submit-->
		</form>

		<?php 
			if (isset($_POST['job'])){					//kondisi melakukan cek variabel 'job' mempunyai nilai atau tidak
				echo $_POST['job'];						//mencetak isi dari variabel 'job' dengan menggunakan super global POST
			}
		?>
	</body>
</html>