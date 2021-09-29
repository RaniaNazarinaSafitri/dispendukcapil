        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">

<body onload="window.print ()">


<tr><td colspan=8 color="#FFF000"><center>Dinas Kependudukan Capil Lumajang</center></td></tr>
<tr><td colspan=8 ><center>LAPORAN DATA ANTRIAN ONLINE DINAS KEPENDUDUKAN LUMAJANG</center></td></tr>
<tr><td colspan=8 ><center>Jln. Basuki Rahmat No. 3, Tompokersan, Lumajang</center></td></tr>

<tr><td colspan=8 ><center>=======================================================</center></td></tr>

<table width="100%" border="1" cellpadding="8" cellspacing="0">
<tr bgcolor='#f2a91c'> 
<th>No</th> 
<td>NIK</td>
<td>Nama</td>
<td>Nomor HP</td>
<td>Jenis Kelamin</td>
<td>Loket</td>
<td>Tanggal</td>
</tr>

<?php
include"koneksi.php";
include"tglindo.php";
$sql = mysql_query("SELECT * FROM tbl_antrian ORDER BY id_antrian");
$no=1;
while($row = mysql_fetch_array($sql)){
?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='left'> <?php echo $row['nik']; ?></td>
<td align='left'> <?php echo $row['nama']; ?></td>
<td align='left'> <?php echo $row['nomor_hp']; ?> </td>
<td align='left'> <?php echo $row['jenis_kelamin']; ?>  </td>
<td align='left'> <?php echo $row['loket']; ?> </td>
<td align='left'> <?php echo $row['tanggal']; ?>  </td>
</tr>
<?php
$no++;
}
?>
</table>
<br>
<br>
<table>
<td>
<tr>Lumajang,<?php echo date('d - M - Y'); ?></tr><br>
<tr>        Ttd         </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>      Kepala Dispenduk Lumajang     </tr>
</td>
</table>

</div>
</div>
</div>
</div>