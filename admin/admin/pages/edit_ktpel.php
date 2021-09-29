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
$e=$_GET['id'];
$edit=mysql_query("SELECT * FROM tbl_ktpel WHERE id_ktpel='$e'");
$book = mysql_fetch_array($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit Pengajuan KTP-EL
</div>
<form action="?module=e_ktpel" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_ktpel" class="form-control" value =" <?php  echo $book['id_ktpel'];?>">


 		<b>Nama :</b> <input type="text" name="nama" class="form-control" value =" <?php  echo $book['nama'];?>" ><br>
		<b>Tempat/Tanggal Lahir : </b> <input type="text" name="ttl" class="form-control" value =" <?php  echo $book['ttl'];?>"><br>
		<b>Jenis Kelamin :</b> <td><select name="jenis_kelamin" class="form-control">
			<?php
				if($book['jenis_kelamin']=='Laki-laki'){
			?>
			<option value="Laki-laki" selected>Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
			<?php }else{ ?>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan" selected>Perempuan</option>
			<?php } ?>
		</select></td></tr><br>
		<b>Alamat : </b><input type="text" name="alamat" class="form-control" value =" <?php  echo $book['alamat'];?>" ><br>
        <b>Agama :</b> <td><select name="agama" class="form-control">
			<?php
				if($book['agama']=='Islam'){
			?>
			<option value="Islam" selected>Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha">Buddha</option>
			<?php 
				}elseif ($book['agama']=='Kristen'){
			?>
			<option value="Islam">Islam</option>
			<option value="kristen" selected>Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha">Buddha</option>
			<?php 
				}elseif ($book['agama']=='Hindu'){
			?>
			<option value="Islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu"  selected>Hindu</option>
			<option value="buddha">Buddha</option>
			<?php 
				}else { ?>
			<option value="Islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha"  selected>Buddha</option>
			<?php } ?>
		</select></td></tr><br>
        <b>Status Perkawinan :</b> <td><select name="status_perkawinan" class="form-control">
			<?php
				if($book['status_perkawinan']=='Sudah Kawin'){
			?>
			<option value="Sudah Kawin" selected>Sudah Kawin</option>
			<option value="Belum Kawin">Belum Kawin</option>
			<?php }else{ ?>
			<option value="Sudah Kawin">Sudah Kawin</option>
			<option value="Belum Kawin" selected>Belum Kawin</option>
			<?php } ?>
		</select></td></tr><br>
 		<b>Pekerjaan : </b><input type="text" name="pekerjaan" class="form-control" value =" <?php  echo $book['pekerjaan'];?>" ><br>
 		<b>Kewarganegaraan : </b><input type="text" name="kewarganegaraan" class="form-control" value =" <?php  echo $book['kewarganegaraan'];?>" ><br>
        <b>Keterangan :</b> <td><select name="keterangan" class="form-control">
			<?php
				if($book['keterangan']=='Baru'){
			?>
			<option value="Baru" selected>Baru</option>
			<option value="Hilang">Hilang</option>
			<?php }else{ ?>
			<option value="Baru">Baru</option>
			<option value="Hilang" selected>Hilang</option>
			<?php } ?>
		</select></td></tr><br>
 		<td><input type="submit" class="btn btn-success" value="simpan">
</form>

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