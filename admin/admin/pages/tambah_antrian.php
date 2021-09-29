<?php
include "koneksi.php";
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$nomor_hp = $_POST['nomor_hp'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$loket = $_POST['loket'];
	$tanggal = $_POST['tanggal'];
		
	
			mysql_query("INSERT into tbl_antrian set nik='$nik',nama='$nama',nomor_hp='$nomor_hp',jenis_kelamin='$jenis_kelamin',loket='$loket',tanggal='$tanggal'");
			
			echo "<script>alert('Data Sukses Tersimpan');
				window.location='index.php?module=antrian';
			</script>"
		

	
?>