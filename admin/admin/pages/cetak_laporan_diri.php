        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">

<body onload="window.print ()">



<tr><td colspan=8 color="#FFF000"><center>Dinas Kependudukan Capil Lumajang</center></td></tr>
<tr><td colspan=8 ><center>LAPORAN DATA DIRI DINAS KEPENDUDUKAN LUMAJANG</center></td></tr>
<tr><td colspan=8 ><center>Jln. Basuki Rahmat No. 3, Tompokersan, Lumajang</center></td></tr>
<tr><td colspan=8 ><center>=======================================================</center></td></tr>

<table width="100%" border="1" cellpadding="8" cellspacing="0">
<tr bgcolor='#f2a91c'> 
<th>No</th> 
<td>Nama</td>
<td>Tanggal Laporan</td>
<td>Jenis Kelamin</td>
<td>Alamat</td>
<td>Pekerjaan</td>
<td>Judul Laporan</td>
<td>Isi Laporan</td>
</tr>

<?php
include"koneksi.php";
include"tglindo.php";
$sql = mysql_query("SELECT * FROM tbl_lapor ORDER BY id_laporan");
$no=1;
while($row = mysql_fetch_array($sql)){
?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='left'> <?php echo $row['nama']; ?></td>
<td align='left'> <?php echo $row['tgl_laporan']; ?></td>
<td align='left'> <?php echo $row['jenis_kelamin']; ?> </td>
<td align='left'> <?php echo $row['alamat']; ?> </td>
<td align='left'> <?php echo $row['pekerjaan']; ?>  </td>
<td align='left'> <?php echo $row['judul_laporan']; ?>  </td>
<td align='left'> <?php echo $row['isi_laporan']; ?>  </td>
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