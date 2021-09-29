<?php
	$nik = $_POST['nik'];
	$username = $_POST['username'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$no_telpon = $_POST['no_telpon'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysql('localhost','root','','db_pelayanan2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into tbl_pengunjung(nik, username, nama_lengkap, jenis_kelamin, no_telpon, password) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $nik, $username, $nama_lengkap, $jenis_kelamin, $no_telpon, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "<script>alert('Data Sukses Tersimpan');
		window.location='index.html';
	</script>";
		$stmt->close();
		$conn->close();
	}
?>