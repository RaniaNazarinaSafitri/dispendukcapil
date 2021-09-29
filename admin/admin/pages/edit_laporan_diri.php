        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DINAS KEPENDUDUKAN LUMAJANG</h1>
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
$edit=mysql_query("SELECT * FROM tbl_lapor WHERE id_laporan='$e'");
$book = mysql_fetch_array($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit Laporan Diri
</div>
<form action="?module=e_laporan_diri" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_laporan" class="form-control" value =" <?php  echo $book['id_laporan'];?>">

 		<b>Nama :</b> <input type="text" name="nama" class="form-control" value =" <?php  echo $book['nama'];?>" ><br>
		<b>Tanggal Kejadian : </b><input type="text" name="tgl_laporan" class="form-control" value =" <?php  echo $book['tgl_laporan'];?>"><br>
		<b>Jenis Kelamin : </b><td><select name="jenis_kelamin" class="form-control">
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
		<b>Pekerjaan : </b><input type="text" name="pekerjaan" class="form-control" value =" <?php  echo $book['pekerjaan'];?>" ><br>
 		<b>Judul Laporan : </b><input type="text" name="judul_laporan" class="form-control" value =" <?php  echo $book['judul_laporan'];?>" ><br>
 		<b>Isi Laporan : </b><input type="text" name="isi_laporan" class="form-control" value =" <?php  echo $book['isi_laporan'];?>" ><br>
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