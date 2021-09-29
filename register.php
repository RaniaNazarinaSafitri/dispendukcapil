<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Pelayanan Dispendukcapil Lumajang</title>

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">
</head>
  
  <body class="size-1140">
  <div class="back-to-top"></div>

<header>
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 text-sm">
          <div class="site-info">
            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
            <span class="divider">|</span>
            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
          </div>
        </div>
        <div class="col-sm-4 text-right text-sm">
          <div class="social-mini-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-dribbble"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .topbar -->

  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Dinas Kependudukan</span>-Lumajang</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profil.php">Profile</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="index.php?module=register">Daftar</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="berita.php">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.php">Contact</a>
            </li>
            <li class="nav-item active">
              <a class="btn btn-primary ml-lg-3" href="login.php">Login / Register</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  <div class="page-banner overlay-dark bg-image" style="background-image: url(assets/img/dispenduk.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
        </nav>
        <h1 class="font-weight-normal">Login / Register</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p><span>Chat</span> Dengan Admin Dispenduk</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>Mengutamakan</span>-Protokol Kesehatan</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p><span>Kepuasan Anda</span> -Kebanggaan Kami!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="daftar">
<div class="tab-content">
  <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
		      <div class="container">
		<div class="page-section">
    <div class="container">
<h1 class="text-center wow fadeInUp">DAFTAR</h1>
<table border="0px">
<form method="post" enctype="multipart/form-data">
<div class="col-12 py-2 wow fadeInLeft" data-wow-delay="300ms">
  <input name="username" type="text" class="form-control" placeholder="Username">
</div>
<div class="col-12 py-2 wow fadeInLeft" data-wow-delay="300ms">
  <input name="password" type="password" class="form-control" placeholder="Password">
</div>
<div class="col-12 py-2 wow fadeInLeft" data-wow-delay="300ms">
  <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap">
</div>
<div class="col-12 py-2 wow fadeInLeft" data-wow-delay="300ms">
  <input name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
</div>
<div class="col-12 py-2 wow fadeInRight" data-wow-delay="300ms">
  <select name="jenis_kelamin" class="custom-select" value="<?php $_POST['jenis_kelamin']?>">
  <option value="pilih">--Gender--</option>
  <option value="Laki-laki">Laki-Laki</option>
  <option value="Perempuan">Perempuan</option>
  </select>
</div>
<div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
  <input name="alamat" type="text" class="form-control" placeholder="Alamat">
</div>
<div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
  <select name="agama" class="custom-select" value="<?php $_POST['agama']?>">
    <option value="pilih">--Agama--</option>
    <option value="Islam">Islam</option>
    <option value="kristen">Kristen</option>
    <option value="Hindu">Hindu</option>
    <option value="buddha">Buddha</option>
  </select>
</div>
<div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
  <input name="no_telpon" type="text" class="form-control" placeholder="No Telepon / WA">
</div>
<tr><td><input type="submit" value="Simpan" class="btn btn-primary mt-3 wow zoomIn">
    <input type="hidden" name="act" value="add"></td></tr>

</table>
<tr>Sudah memiliki akun?</tr><a href="login.php">Login</a>
</form>
</div></blockquote>
</div>
</div>
</div>
</div>

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="#" target="_blank">Dispendukcapil</a>. Lumajang</p>
    </div>
  </footer>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/theme.js"></script>
  
</body>
</html>

<?php
include "koneksi.php";
?>

    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <blockquote class="tr_bq">
				
<?php
error_reporting(0);
session_start();


if(@$_POST["login"]){ //jika tombol Login diklik
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	$level=$_POST["level"];
	 if($level=="Pengunjung"){$tabel="tbl_pengunjung";}else{$tabel="tbl_admin";}
	if($user!="" && $pass!=""){

		$em = mysql_query("select * from $tabel where password = '$pass' AND username = '$user'");
		$data = mysql_fetch_assoc($em);
		
		if($data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Login Anda Berhasil 
                  </div>";
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=$data["password"];
			$_SESSION["nama_lengkap"]=$data["nama_lengkap"];
			 if($level=="Pengunjung"){
			 
			?>
			
			<script>alert ("Selamat Datang '<?php echo $_SESSION['nama_lengkap']; ?>'")
						 window.location.href='pengunjung/index.php'</script>
						 exit;
						 <?php
						
			 }else{
			?>
			<script>alert ("Selamat Datang '<?php echo $_SESSION['nama_lengkap']; ?>'")
						 window.location.href='admin/admin/index.php'</script>
						 exit;
			<?php
			 }
						 ?>
		<?php
		}else{
			echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Mohon Ulangi Lagi !! Data Tidak Ditemukan!!</b>
                  </div><center>";
		}
	}

}
?>
   <!-- PAGE CONTENT --> 
    <div class="container">
  


</div>

</blockquote>	
                </div>
              </div>
            </div>      
          </div>
        </div> 
      </article>
    </main>
    
    <!-- FOOTER -->
    
<?php
include "koneksi.php";
?>

    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <blockquote class="tr_bq">
<?php

if (@$_POST['act']=="add"){
    $sql_add=mysql_query("INSERT INTO tbl_pengunjung (username,password,nama_lengkap,tgl_lahir,jenis_kelamin,alamat,agama,no_telpon) VALUES ("
    ."'".$_POST['username']."',
    '".$_POST['password']."',
    '".$_POST['nama_lengkap']."',
    '".$_POST['tgl_lahir']."',
    '".$_POST['jenis_kelamin']."',
    '".$_POST['alamat']."',
    '".$_POST['agama']."',
    '".$_POST['no_telpon']."') ");
    echo'<script>alert("Data Berhasil Disimpan");window.location ="./";</script>';
}
?>
                </div>
              </div>
            </div>      
          </div>
        </div> 
      </article>
    </main>
    
    <!-- FOOTER -->
    