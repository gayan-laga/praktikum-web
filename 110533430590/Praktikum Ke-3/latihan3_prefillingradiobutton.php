<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Prefill Data Radio Button</title>						<!--judul tab browser-->
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">	<!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Jenis Kelamin
			
			<!--input berupa radio button (opsi pria)-->
			<input type="radio" name="sex" value="Pria" checked			
				<?php
					if (@$_POST['sex'] == 'Pria'){						//'@' berfungsi untuk mengabaikan nilai undefined saat membuka file php pertama kali
																		//karena variabel 'sex' belum memiliki nilai saat pertama kali dijalankan.
						echo 'checked="checked"';						//untuk menandai radio button sesudah proses submit dilakukan (prefilling)
					}
				?>														
			/>Pria														<!-- radio button yang pertama diberi nama "Pria"-->
			
			<!--input berupa radio button (opsi wanita)-->
			<input type="radio" name="sex" value="Wanita" 				
				<?php
					if (@$_POST['sex'] == 'Wanita'){					//'@' berfungsi untuk mengabaikan nilai undefined saat membuka file php pertama kali
																		//karena variabel 'sex' belum memiliki nilai saat pertama kali dijalankan.
						echo 'checked="checked"';						//untuk menandai radio button sesudah proses submit dilakukan (prefilling)
					}
				?>
			/>Wanita <br />												<!--radio button yang pertama diberi nama "Wanita"-->
			<input type="submit" value="OK" />							<!--membuat button submit -->
		</form>
		
		<?php 
			if (isset($_POST['sex'])){									//kondisi melakukan cek variabel 'sex' mempunyai nilai atau tidak
				echo $_POST['sex'];										//mencetak isi dari variabel 'sex' dengan menggunakan superglobal POST
			}
		?>
	</body>
</html>