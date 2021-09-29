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
$e=$_GET['id'];
$edit=mysql_query("SELECT * FROM tbl_antrian WHERE id_antrian='$e'");
$book = mysql_fetch_array($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit Antrian
</div>
<form action="?module=e_antrian" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_antrian" class="form-control" value =" <?php  echo $book['id_antrian'];?>">


		<b>NIK :</b> <input type="text" name="nik" class="form-control" value =" <?php  echo $book['nik'];?>" ><br>
 		<b>Nama :</b> <input type="text" name="nama" class="form-control" value =" <?php  echo $book['nama'];?>" ><br>
		<b>Nomor HP : </b><input type="text" name="nomor_hp" class="form-control" value =" <?php  echo $book['nomor_hp'];?>"><br>
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
		<b>Loket :</b> <td><select name="loket" class="form-control">
			<?php
				if($book['loket']=='A'){
			?>
			<option value="A" selected>Pelayanan Akta Kelahiran, Akta Kematian, Pindah Datang dan Dokumen Kependudukan Lainnya di Dinas</option>
			<option value="CETAK_KTPEL">Cetak KTP-el di Dinas</option>
			<option value="REKAM">Perekaman KTP-el dan Cek Biometrik (Iris) di Dinas</option>
			<?php 
				}elseif ($book['loket']=='CETAK_KTPEL'){
			?>
			<option value="A">Pelayanan Akta Kelahiran, Akta Kematian, Pindah Datang dan Dokumen Kependudukan Lainnya di Dinas</option>
			<option value="CETAK_KTPEL" selected>Cetak KTP-el di Dinas</option>
			<option value="REKAM">Perekaman KTP-el dan Cek Biometrik (Iris) di Dinas</option>
			<?php 
				}else { ?>
			<option value="A">Pelayanan Akta Kelahiran, Akta Kematian, Pindah Datang dan Dokumen Kependudukan Lainnya di Dinas</option>
			<option value="CETAK_KTPEL">Cetak KTP-el di Dinas</option>
			<option value="REKAM" selected>Perekaman KTP-el dan Cek Biometrik (Iris) di Dinas</option>
			<?php } ?>
		</select></td></tr><br>
		<b>Tanggal :</b> <input type="text" name="tanggal" class="form-control" value =" <?php  echo $book['tanggal'];?>" ><br>
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