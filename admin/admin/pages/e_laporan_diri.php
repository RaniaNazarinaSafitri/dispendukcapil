<?php
include "koneksi.php";
	$id_laporan = $_POST['id_laporan'];
	$nama = $_POST['nama'];
	$tgl_laporan = $_POST['tgl_laporan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$pekerjaan= $_POST['pekerjaan'];
	$judul_laporan= $_POST['judul_laporan'];
	$isi_laporan= $_POST['isi_laporan'];
	

		

			mysql_query("UPDATE tbl_lapor set id_laporan='$id_laporan',nama='$nama',tgl_laporan='$tgl_laporan',jenis_kelamin='$jenis_kelamin',alamat='$alamat',pekerjaan='$pekerjaan',judul_laporan='$judul_laporan',isi_laporan='$isi_laporan' where id_laporan='$id_laporan'");
		

			echo "<script>
					window.location='index.php?module=laporan_diri';
				</script>";
		
	
?>