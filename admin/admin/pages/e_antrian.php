<?php
include "koneksi.php";
$id_antrian = $_POST['id_antrian'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$nomor_hp = $_POST['nomor_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$loket = $_POST['loket'];
$tanggal = $_POST['tanggal'];
	

		mysql_query("UPDATE tbl_antrian set id_antrian='$id_antrian',nik='$nik',nama='$nama',nomor_hp='$nomor_hp',jenis_kelamin='$jenis_kelamin',loket='$loket',tanggal='$tanggal' where id_antrian='$id_antrian'");
		
		echo "<script>alert('Data Sukses Tersimpan');
			window.location='index.php?module=antrian';
		</script>"
		
?>