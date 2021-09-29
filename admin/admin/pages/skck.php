
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SKCK</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
<?php
include"koneksi.php";
$no = 1;
$qry_skck = mysql_query("SELECT * from tbl_skck");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>Data SKCK</b>
</div>
<a href="?module=input_skck" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH SKCK</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=input_skck");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;">Nama</th>
	<th style=" background: #E6E6FA;">Jenis Kelamin</th>
	<th style=" background: #E6E6FA;">Kebangsaan</th>
	<th style=" background: #E6E6FA;">Agama</th>
	<th style=" background: #E6E6FA;"><center>Tanggal Lahir</center></th>
	<th style=" background: #E6E6FA;">Alamat</th>
	<th style=" background: #E6E6FA;">Pekerjaan</th>
	<th style=" background: #E6E6FA;"><center>No KTP</center></th>
	<th style=" background: #E6E6FA;">Keperluan</th>
	<th style=" background: #E6E6FA;">Riwayat Sekolah</th>
	<th style=" background: #E6E6FA;"><center>aksi</center></th>
	<?php while($data = mysql_fetch_array($qry_skck)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><?php echo $data['jenis_kelamin'] ?></td>
	 <td><?php echo $data['kebangsaan'] ?></td>
	 <td><?php echo $data['agama'] ?></td>
	 <td><?php echo $data['tgl_lahir'] ?></td>
	 <td><?php echo $data['alamat'] ?></td>
	 <td><?php echo $data['pekerjaan'] ?></td>
	 <td><?php echo $data['no_ktp'] ?></td>
	 <td><?php echo $data['keperluan'] ?></td>
	 <td><?php echo $data['riwayat_sekolah'] ?></td>
	 <td><a href="?module=edit_skck&id=<?php echo $data['id_skck']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>  <a href="hapus_skck.php?id=<?php echo $data['id_skck']; ?>"><span class="glyphicon glyphicon-trash"></span></a>  <a href="print_skck.php?id=<?php echo $data['id_skck']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
	</tr>
	<?php } ?>
</table>
</div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
               
                <!-- /.col-lg-6 -->
            
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>
          