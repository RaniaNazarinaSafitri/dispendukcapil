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
$d = mysql_fetch_array(mysql_query("SELECT * FROM tbl_ktpel where id_ktpel='$_GET[id]'"));
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img src='../../../img/logo-daerah.png' width='85px'></td>
</tr> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>POLISI DAERAH KALIMANTAN TIMUR<br>
         RESOR KOTA SAMARINDA <br> SEKTOR KOTA SAMARINDA UTARA </h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. D.I. Panjaitan 110, Samarinda, 75117 </p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>SURAT TANDA NOMOR KENDARAAN </h3></td>
</tr> 
<tr>
    <td align="center"><p>Nomor : 00<?php echo "$d[id_ktpel]"; ?>/198/TRANTIB/309.07/VIII/2018</p></td>
</tr> 
</table>

<br>


<table width='50%' align="center">
<tr>
<td width="5%">1</td>
<td width="30%">Nama Lengkap</td>
<td width="65%">: <?php echo "$d[nama]";?></td>
</tr>

<tr>
<td>3</td>
<td>Jenis</td>
<td>: <?php echo "$d[jenis]";?></td>
</tr>
<tr>
<td>4</td>
<td>Merk</td>
<td>: <?php echo "$d[merk]";?></td>
</tr>
<tr>
<td>5</td>
<td>Alamat</td>
<td>: <?php echo "$d[alamat]";?></td>
</tr>
<tr>
<td>6</td>
<td>Type</td>
<td>: <?php echo "$d[type]";?></td>
</tr>
<tr>
<td>7</td>
<td>Model</td>
<td>: <?php echo "$d[model]";?></td>
</tr>
<tr>
<td>8</td>
<td>Tahun</td>
<td>: <?php echo "$d[tahun]";?></td>
</tr>
<tr>
<td>9</td>
<td>Isi Silinder</td>
<td>: <?php echo "$d[isi_silinder]";?></td>
</tr>
<tr>
<td>10</td>
<td>Warna</td>
<td>: <?php echo "$d[warna]";?></td>
</tr>
<tr>
<td>11</td>
<td>Keterangan</td>
<td>: <?php echo "$d[keterangan]";?></td>
</tr>

<tr>
<td>12</td>
<td>Masa Berlaku</td>

<td>: <?php echo TanggalIndo($d['masa']);?></td>
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
          KEPALA KEDINASAN KEPENDUDUKAN LUMAJANG<br>Waka<br><br><br>

          <u>AAAAAAAA</u><br>
         
          BBBBBBB
        </center>
    </td>
  </tr>
</table> 
</body>