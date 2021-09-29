        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LAPORAN DIRI</h1>
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
$qry_skck = mysql_query("SELECT * from tbl_lapor");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>Data Lapor</b>
</div>
<a href="?module=input_laporan_diri" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH LAPOR</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=input_laporan_diri");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;">Nama</th>
	<th style=" background: #E6E6FA;">Tanggal Laporan</th>
	<th style=" background: #E6E6FA;">Jenis Kelamin</th>
	<th style=" background: #E6E6FA;">Alamat</th>
	<th style=" background: #E6E6FA;">Pekerjaan</th>
	<th style=" background: #E6E6FA;"><center>Judul Laporan</center></th>
	<th style=" background: #E6E6FA;">Isi Laporan</th>
	<th style=" background: #E6E6FA;"><center>aksi</center></th>
	<?php while($data = mysql_fetch_array($qry_skck)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><?php echo $data['tgl_laporan'] ?></td>
	 <td><?php echo $data['jenis_kelamin'] ?></td>
	 <td><?php echo $data['alamat'] ?></td>
	 <td><?php echo $data['pekerjaan'] ?></td>
	 <td><?php echo $data['judul_laporan'] ?></td>
	 <td><?php echo $data['isi_laporan'] ?></td>
	 <td><a href="?module=edit_laporan_diri&id=<?php echo $data['id_laporan']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>   <a href="?module=hapus_laporan_diri&id=<?php echo $data['id_laporan']; ?>"><span class="glyphicon glyphicon-trash"></span></a>  <a href="print_laporan.php?id=<?php echo $data['id_laporan']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
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
            <!-- /.row -->