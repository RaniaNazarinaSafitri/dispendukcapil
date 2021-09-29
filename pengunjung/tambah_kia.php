<?php
include "../koneksi.php";
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$no_kk = $_POST['no_kk'];
	$nama_kepala = $_POST['nama_kepala'];
	$no_akta = $_POST['no_akta'];
	$agama = $_POST['agama'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$alamat = $_POST['alamat'];
	$ket = $_POST['ket'];

		
		
			mysql_query("INSERT into tbl_kia set nik='$nik',nama='$nama',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',no_kk='$no_kk',nama_kepala='$nama_kepala',no_akta='$no_akta',agama='$agama',kewarganegaraan='$kewarganegaraan',alamat='$alamat',keterangan='$ket'");
			
			echo "<script>alert('Data Sukses Tersimpan');
				window.location='index.php?module=kia';
			</script>"
		

	
?>