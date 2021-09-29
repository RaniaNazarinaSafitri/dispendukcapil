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
	?>
		<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
	Tambah Pengajuan KTP-EL
	</div>
	<form method="post" class="form-group" action="?module=tambah_ktpel" enctype="multipart/form-data" style="margin-top:20px;">
		<input type="text" name="nama" placeholder="Nama" class="form-control"><br>
		<input type="text" name="ttl" placeholder="Tempat/Tanggal Lahir" class="form-control"><br>
		<td><select name="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control">
			<option value="pilih">--Jenis Kelamin--</option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select></td></tr><br>
		<input type="text" name="alamat" placeholder="Alamat" class="form-control"><br>
		</td><td><select name="agama"  placeholder="Agama" class="form-control">
			<option value="pilih">--Agama--</option>
			<option value="Islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha">Buddha</option>
		</select></td></tr><br>
        <td><select name="status_perkawinan" placeholder="Status Perkawinan" class="form-control">
			<option value="pilih">--Status Perkawinan--</option>
			<option value="Sudah Kawin">Sudah Kawin</option>
			<option value="Belum Kawin">Belum Kawin</option>
		</select></td></tr><br>
		<input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control"><br>
		<input type="text" name="kewarganegaraan" placeholder="Kewarganegaraan" class="form-control"><br>
		<td><select name="ket" placeholder="Keterangan" class="form-control">
			<option value="pilih">--Pilih Pengajuan--</option>
			<option value="Baru">Baru</option>
			<option value="Hilang">Hilang</option>
		</select></td></tr><br>
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