		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">KTP-EL</h1>
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
$qry_ktpel = mysql_query("SELECT * from tbl_ktpel");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>Data KTP-EL</b>
</div>
<a href="?module=input_ktpel" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH Pengajuan KTP-EL</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=input_ktpel");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Nama</center></th>
	<th style=" background: #E6E6FA;">Tempat/Tanggal Lahir</th>
	<th style=" background: #E6E6FA;">Jenis Kelamin</th>
	<th style=" background: #E6E6FA;">Alamat</th>	
	<th style=" background: #E6E6FA;">Agama</th>
	<th style=" background: #E6E6FA;"><center>Status Perkawinan</center></th>
	<th style=" background: #E6E6FA;"><center>Pekerjaan</center></th>
	<th style=" background: #E6E6FA;"><center>Kewarganegaraan</center></th>
	<th style=" background: #E6E6FA;"><center>Keterangan</center></th>
	<th style=" background: #E6E6FA;"><center>file</center></th>
	<th style=" background: #E6E6FA;"><center>Aksi</center></th>
	<?php while($data = mysql_fetch_array($qry_ktpel)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><?php echo $data['ttl'] ?></td>
	 <td><?php echo $data['jenis_kelamin'] ?></td>
	 <td><?php echo $data['alamat'] ?></td>	 
	 <td><?php echo $data['agama'] ?></td>
	 <td><?php echo $data['status_perkawinan'] ?></td>
	 <td><?php echo $data['pekerjaan'] ?></td>
	 <td><?php echo $data['kewarganegaraan'] ?></td>
	 <td><?php echo $data['keterangan'] ?></td>
	 <td><?php echo $data['file'] ?></td>

	 <td><a href="?module=edit_ktpel&id=<?php echo $data['id_ktpel']; ?>"><span class="glyphicon glyphicon-pencil"></span></a> <a href="?module=hapus_ktpel&id=<?php echo $data['id_ktpel']; ?>"><span class="glyphicon glyphicon-trash"></span></a>   <a href="print_ktpel.php?id=<?php echo $data['id_ktpel']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a></td>
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
