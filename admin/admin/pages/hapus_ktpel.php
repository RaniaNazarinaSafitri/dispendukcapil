<?php
include "koneksi.php";
$bk=$_GET['id'];
mysql_query("DELETE FROM tbl_ktpel WHERE id_ktpel='$bk'");
echo "<script>alert('Data Sukses Terhapus');
					window.location='index.php?module=ktpel';
				</script>";
 ?>