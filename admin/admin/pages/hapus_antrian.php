<?php
include "koneksi.php";
$bk=$_GET['id'];
mysql_query("DELETE FROM tbl_antrian WHERE id_antrian='$bk'");
echo "<script>alert('Data Sukses Terhapus');
				window.location='index.php?module=antrian';
			</script>";
 ?>