<head>	
	<title>Kalkulator PHP</title>															<!--Memberi judul tab browser-->
</head>


<body style="background-color:yellow ; font-family: 'Trebuchet MS', Arial; font-size:14px">	<!--Mengatur tampilan html keseluruhan-->

<?php
		$hasil1= 0;																			//Memberi nilai default variabel hasil1 = 0
?>

<center>
<table border='1' style="background-color:red ; border:'5px'; border-size:5px; border-color:black">	<!--Mengatur tampilan tabel-->

	<tr>
	<form name="form1" method="post" action="hitung.php" style="width: 250">				<!--Disini kita membuat form yang menempati kolom-kolom tabel-->
																							<!--Menggunakan metode POST yang nantinya diolah di hitung.php-->
		<td>
			<div align="left" style="margin:5px">											<!--Mengatur tampilan text box-->
				<input name="angka1" type="text" id="angka1" maxlength="15">				<!--Membuat text box yang nanti mengisi variabel 'angka1'-->
			</div>
		</td>
		
		<td>
			<div style="margin:5px">														<!--Mengatur tampilan combo box-->
				<div style="float:left">													<!--Mengatur tampilan combo box--->
					<select name="operator2" id="operator2">								<!--Membuat combo box yang nanti mengisi variabel 'operator2'-->
						<option>+</option>													<!--Membuat pilihan '+' di combo box-->
						<option>-</option>													<!--Membuat pilihan '-' di combo box-->
						<option>*</option>													<!--Membuat pilihan '*' di combo box-->
						<option>/</option>													<!--Membuat pilihan '/' di combo box-->
					</select>
				</div>
			</div>
		</td>
				
		<td>
			<div align="left" style="margin:5px">											<!--Mengatur tampilan text box-->
				<input name="angka2" type="text" id="angka2" maxlength="15">				<!--Membuat text box yang nanti mengisi variabel 'angka2'-->
			</div>
		</td>
		
		<td><input type="submit" name="Submit2" value="Hitung"/></td>						<!--Membuat tombol 'Hitung', variabel 'angka1' & 'angka2' dilempar ke hitung.php untuk diproses-->
		
		<td>
			<div align="left" style="margin:5px">											<!--Mengatur tampilan text box-->
				<input name="hasil1" type="text" readonly="true" value="<?php if (isset($_GET['hasil1'])) echo $_GET['hasil1']?>"/>
				<!--Membuat text box sebagai keluaran hasi hitung, yang nanti mengisi variabel 'hasil1'-->
			</div>
		</td>
	
	</form>
	</tr>
	

</table>
</center>
	
<footer>
		<br/><center>&copy; Gayan Laga</center>
</footer>
</body>
</html>