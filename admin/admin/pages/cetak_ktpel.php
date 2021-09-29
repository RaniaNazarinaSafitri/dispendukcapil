        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">

<body onload="window.print ()">



<tr><td colspan=8 color="#FFF000"><center>Dinas Kependudukan Capil Lumajang</center></td></tr>
<tr><td colspan=8 ><center>LAPORAN DATA KTP-EL DINAS KEPENDUDUKAN LUMAJANG</center></td></tr>
<tr><td colspan=8 ><center>Jln. Basuki Rahmat No. 3, Tompokersan, Lumajang</center></td></tr>
<tr><td colspan=8 ><center>=======================================================</center></td></tr>

<table width="100%" border="1" cellpadding="8" cellspacing="0">
<tr bgcolor='#f2a91c'> 
<th>No</th>
<th>Nama</th> 
<td>Tempat/Tgl Lahir</td>
<td>Jenis Kelamin</td>
<td>Alamat</td>
<td>Agama</td>
<td>Status Perkawinan</td>
<td>Pekerjaan</td>
<td>Kewarganegaraan</td>
<td>Keterangan</td>
</tr>

<?php
include"koneksi.php";
include"tglindo.php";
$sql = mysql_query("SELECT * FROM tbl_ktpel ORDER BY id_ktpel");
$no=1;
while($row = mysql_fetch_array($sql)){
?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='left'> <?php echo $row['nama']; ?></td>
<td align='left'> <?php echo $row['ttl']; ?> </td>
<td align='left'> <?php echo $row['jenis_kelamin']; ?> </td>
<td align='left'> <?php echo $row['alamat']; ?> </td>
<td align='left'> <?php echo $row['agama']; ?> </td>
<td align='left'> <?php echo $row['status_perkawinan']; ?>  </td>
<td align='left'> <?php echo $row['pekerjaan']; ?>  </td>
<td align='left'> <?php echo $row['kewarganegaraan']; ?>  </td>
<td align='left'> <?php echo $row['keterangan']; ?>  </td>
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