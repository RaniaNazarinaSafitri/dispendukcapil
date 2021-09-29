<?php
include "../koneksi.php";
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$agama = $_POST['agama'];
	$status_perkawinan = $_POST['status_perkawinan'];
	$pekerjaan = $_POST['pekerjaan'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
		$ket = $_POST['ket'];
	$NamaFile = $_FILES['NamaFile'];
		
		
			
			mysql_query("INSERT into tbl_ktpel set nama='$nama',ttl='$ttl',jenis_kelamin='$jenis_kelamin',alamat='$alamat',agama='$agama',status_perkawinan='$status_perkawinan',pekerjaan='$pekerjaan',kewarganegaraan='$kewarganegaraan',keterangan='$ket',file='$file'");
			
				echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=ktpel';
				</script>";
		

	
?>