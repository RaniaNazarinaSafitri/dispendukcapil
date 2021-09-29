        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">POLANTAS</h1>
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
	?>
		<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
	Tambah Laporan
	</div>
	<form method="post" class="form-group" action="?module=tambah_laporan_diri" enctype="multipart/form-data" style="margin-top:20px;">
		<input type="text" name="nama" placeholder="Nama" class="form-control"><br>
		<input type="date" name="tgl_laporan" placeholder="Tanggal Laporan" class="form-control"><br>
		<td><select name="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control">
			<option value="pilih">--Jenis Kelamin--</option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select></td></tr><br>
		<input type="text" name="alamat" placeholder="Alamat" class="form-control"><br>
		<input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control"><br>
		<input type="text" name="judul_laporan" placeholder="Judul Laporan" class="form-control"><br>
		<input type="text" name="isi_laporan" placeholder="Isi Laporan" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn btn-success"><br>

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
