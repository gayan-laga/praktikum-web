<!--
	Algoritma Membuat Combobox yang Presellecting:
		1.start
		2.tampilkan combobox dan periksa variabel 'job' apabila empty isi variabel $a = 'kosong' dan apabila tidak empty isi variabel $a dengan nilai dari variabel 'job'
		3.lakukan pengecekan kondisi $a sama dengan nilai value,jika sama option akan diseleksi,dan jika tidak sama option tidak diseleksi
		4.tampilkan button submit apabila di klik akan memproses kondisi yang melakukan cek variabel 'job' dan menampilkan isi dari variabel 'job'
		5.Finish
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Preselecting Data Seleksi</title>					<!--judul tab browser-->
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"><!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Pekerjaan
			<select name="job">										<!--membuat combo box yang nanti nilainya akan disimpan dalam variabel job-->
				<!--membuat opsi 'Mahasiswa'-->	
				<option value="Mahasiswa"							
					<?php
						if (empty($_POST['job'])){					//kondisi yang akan dilakukan saat variabel 'job' bernilai empty
							$a = 'Kosong';							//memberikan variabel 'a' nilai 'Kosong'
						}else{										//kondisi yang akan dilakukan saat variabel 'job' tidak bernilai empty
							$a = $_POST['job'];						//memberikan variabel 'a' nilai dari variabel 'job'
						}

						if ($a == 'Mahasiswa'){						//option Mahasiswa akan terseleksi apabila variabel 'a' = 'Mahasiswa'
							echo 'selected="selected"';				//Presellecting
						}
					?>
				> Mahasiswa											<!--membuat menu pilihan combo box dengan value Mahasiswa-->
				
				<!--membuat opsi 'ABRI'-->
				<option value="ABRI"								
					<?php
						if ($a == 'ABRI'){							//option ABRI akan terseleksi apabila variabel 'a' = 'ABRI'
							echo 'selected="selected"';				//Presellecting
						}
					?>
				>ABRI												<!--membuat menu pilihan combo box dengan value ABRI-->
				
				<!--membuat opsi 'PNS'-->
				<option value="PNS"									
					<?php
						if ($a == 'PNS'){							//option Mahasiswa akan terseleksi apabila variabel 'a' = 'PNS'
							echo 'selected="selected"';				//Presellecting
						}
					?>
				>PNS												<!--membuat menu pilihan combo box dengan value PNS-->
				
				<!--membuat opsi 'Swasta'-->
				<option value="Swasta"								
					<?php
						if ($a == 'Swasta'){						//option Mahasiswa akan terseleksi apabila variabel 'a' = 'Swasta'
							echo 'selected="selected"';				//Presellecting
						}
					?>
				>Swasta												<!--membuat menu pilihan combo box dengan value Swasta-->
			</select> <br />
			<input type="submit" value="OK" />						<!--membuat Button Submit-->
		</form>
		
		<?php 
			if (isset($_POST['job'])){								//kondisi melakukan cek variabel 'job' mempunyai nilai atau tidak
				echo $_POST['job'];									//mencetak isi dari variabel 'job' dengan menggunakan superglobal POST
			}
		?>
	</body>
</html>