<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pelayanan Dispenduk</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>
  
  <body class="size-1140">
  	 <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo White Version -->
            
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?module=profil">Profile</a></li>
            <!-- <li><a href="#">Informasi</a></li> -->
            <li><a href="index.php?module=register">Daftar</a></li>
            <li><a href="index.php?module=kontak">Contact</a></li>
            <li><a href="index.php?module=login">Login</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="img/header2.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
                    <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Dinas Kependudukan <br>Kabupaten Lumajang</h1>
                    <div class="s-12 m-10 l-8 center"></div>
                    <div class="line">
                      <div class="s-10 m-10 l-2 center">
                        <img src="img/logo-daerah.png">
                      </div>       
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      
      <!-- Section 1 -->

      
      <!-- Section 1 -->
      
      
      <!-- Section 2 -->
      
      
      <!-- Section 3 -->
      
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 -->
      
      
      <!-- Section 5 --> 
<?php
					if (@$_GET['module'] == "") { 

		 
		?>
		<section class="section background-dark">
        <div class="line">
        Dinas Kependudukan dan Catatan Sipil Kabupaten Lumajang atau biasa disebut dengan Dispendukcapil Kabupaten Lumajang merupakan 
        dinas yang menjalankan urusan pelaksana otonom daerah di bidang kependudukan dan catatan sipil. Dimana di dalam dinas 
        tersebut melaksanakan tugas sebagaimana dimaksud yaitu, perumusan kebijakan teknis di bidang kependudukan dan catatan 
        sipil, penyelenggaraan urusan pemerintah dan pelayanan umum, pembinaan dan pelaksanaan tugas sebagaimana dimaksud, 
        pengelolaan ketatausahaan dinas, dan dipimpin oleh seorang Kepala Dinas yang berada di bawah dan bertanggung jawab 
        kepada Bupati Lumajang. Visi    dari    Dispendukcapil    adalah    pelayanan    prima    tertib    administrasi 
        kependudukan.  Berada di Jalan Basuki Rahmat No. 3, Tompokersan, Lumajang, Tompokersan, Jogotrunan, Kec. Lumajang, Kabupaten Lumajang, Jawa Timur.

        </div>
      </section>
	  <?php
		
		}else{
		
		if($_GET["module"]){
	include_once($_GET["module"].".php");
}
		}
					?>
	  
      
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">Contact Us: (0000) 000000</p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">  	  
            <iframe src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10916.60641351621!2d113.22746828644672!3d-8.120082961051132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x476f2545f06ea81b!2sKantor%20Dispendukcapil%20Kabupaten%20Lumajang!5e0!3m2!1sid!2sid!4v1627963301126!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
        
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Alamat</h3>
                  <p>Jalan Basuki Rahmat No. 3, Tompokersan, Lumajang, Tompokersan, Jogotrunan, Kec. Lumajang, Kabupaten Lumajang, Jawa Timur.<br>
                     
                  </p>               
                </div>
               
                
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Phone Numbers</h3>
                  <p>(0000) 000000<br>
                  </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Copyright 2021 | Dinas Kependudukan Dukcapil</p>
          
        </div>
       
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>