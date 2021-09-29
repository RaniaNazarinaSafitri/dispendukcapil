<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title>Print Data Surat Tugas</title>
<body onLoad="window.print()">
<?php
error_reporting(0);
session_start();
include "koneksi.php"; 
include "tglindo.php"; 
$d = mysql_fetch_array(mysql_query("SELECT * FROM tbl_antrian where id_antrian='$_GET[id]'"));
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img src='../../../img/logo-daerah.png' width='85px'></td>
</tr> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>DINAS KEPENDUDUKAN CAPIL LUMAJANG<br>
         KAB LUMAJANG <br> KEC LUMAJANG </h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. Basuki Rahmat No. 3, Tompokersan, Lumajang, Kec. Lumajang, Kabupaten Lumajang, Jawa Timur </p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>ANTRIAN ONLINE</h3></td>
</tr> 
<!-- <tr>
    <td align="center"><p>Nomor : 00<?php echo "$d[id_antrian]"; ?>/198/TRANTIB/309.07/VIII/2018</p></td>
</tr>  -->
</table>

<br>


<table width='50%' align="center">
<tr>
<td width="5%">1</td>
<td width="30%">NIK</td>
<td width="65%">: <?php echo "$d[nik]";?></td>
</tr>

<tr>
<td>2</td>
<td>Nama</td>
<td>: <?php echo "$d[nama]";?>/ <?php echo TanggalIndo($d['tgl_lahir']);?></td>
</tr>
<tr>
<td>3</td>
<td>Nomor HP</td>
<td>: <?php echo "$d[nomor_hp]";?></td>
</tr>
<tr>
<td>4</td>
<td>Jenis Kelamin</td>
<td>: <?php echo "$d[jenis_kelamin]";?></td>
</tr>
<tr>
<td>5</td>
<td>Loket</td>
<td>: <?php echo "$d[loket]";?></td>
</tr>
<tr>
<td>6</td>
<td>Tanggal</td>
<td>: <?php echo "$d[tanggal]";?></td>
</tr>

</table>


<table width=100%>
  <tr>
    <td width="30%">
    </td>

    <td width="30%">

    </td>

    <td >
       
        <table>
            
            <tr>
              <td>Lumajang,</td>
              <td> <?php echo date("d M Y"); ?></td></tr>
        </table><br>
        <center>
          DINAS KEPENDUDUKAN DAN CATATAN SIPIL LUMAJANG<br>Waka<br><br><br>

          <u>KEPALA DISPENDUK</u><br>
         
        </center>
    </td>
  </tr>
</table> 
</body>