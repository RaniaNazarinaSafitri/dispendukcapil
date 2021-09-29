        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ANTRIAN ONLINE</h1>
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
$qry_antrian = mysql_query("SELECT * from tbl_antrian");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>Data Antrian Online</b>
</div>
<a href="?module=input_antrian" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH ANTRIAN</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=input_antrian");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;">NIK</th>
	<th style=" background: #E6E6FA;">Nama</th>
	<th style=" background: #E6E6FA;">Nomor HP</th>
	<th style=" background: #E6E6FA;">Jenis Kelamin</th>
	<th style=" background: #E6E6FA;">Loket</th>
	<th style=" background: #E6E6FA;">Tanggal</th>
	<th style=" background: #E6E6FA;"><center>aksi</center></th>
	<?php while($data = mysql_fetch_array($qry_antrian)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nik'] ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><?php echo $data['nomor_hp'] ?></td>
	 <td><?php echo $data['jenis_kelamin'] ?></td>
	 <td><?php echo $data['loket'] ?></td>
	 <td><?php echo $data['tanggal'] ?></td>
	 <td><a href="?module=edit_antrian&id=<?php echo $data['id_antrian']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>  
     <a href="?module=hapus_antrian&id=<?php echo $data['id_antrian']; ?>"><span class="glyphicon glyphicon-trash"></span></a>  
     <a href="print_antrian.php?id=<?php echo $data['id_antrian']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
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
        