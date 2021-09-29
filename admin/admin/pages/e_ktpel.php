<?php
include "koneksi.php";
$id_ktpel = $_POST['id_ktpel'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$status_perkawinan = $_POST['status_perkawinan'];
$pekerjaan = $_POST['pekerjaan'];
$kewarganegaraan = $_POST['kewarganegaraan'];
	$ket = $_POST['keterangan'];

		

	mysql_query("UPDATE tbl_ktpel set id_ktpel='$id_ktpel',nama='$nama',ttl='$ttl',jenis_kelamin='$jenis_kelamin',alamat='$alamat',agama='$agama',status_perkawinan='$status_perkawinan',pekerjaan='$pekerjaan',kewarganegaraan='$kewarganegaraan',keterangan='$ket' where id_ktpel='$id_ktpel'");
		

			echo "<script>('Data Sukses Tersimpan');
					window.location='index.php?module=ktpel';
				</script>";
		
	
?>