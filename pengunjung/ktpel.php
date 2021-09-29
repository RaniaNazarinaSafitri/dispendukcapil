        <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
			<center>
			<iframe src="https://drive.google.com/file/d/1eZUDe07xwzrWmw_D05pJ_ARxtp45RCXN/preview" width="640" height="480" allow="autoplay"></iframe>
			</center>
          <div class="line">        
            <blockquote class="tr_bq">
                            
	<?php
	include"../koneksi.php";
	?>

	<div id="daftar" style=" border: 1px solid black;">
<div class="tab-content">
<p align="center">&raquo;Input Data Pengajuan KTP-EL&laquo;</p>
<p align="center">*Mohon isi sesuai KTP*</p>
<table border="0px">
			<form method="post" class="form-group" action="tambah_ktpel.php" enctype="multipart/form-data">
			<tr><td>Nama</td> <td>:</td> <td><input name="nama" size="25" class="texbox"></td></tr>
			<tr><td>Tempat/Tgl Lahir</td> <td>:</td> <td><input name="ttl" size="25" class="texbox"></td></tr>
			<tr><td>Jenis Kelamin</td><td>:</td><td><select name="jenis_kelamin" class="texbox" value="<?php $_POST['jenis_kelamin']?>">
			<option value="pilih">--Pilih--</option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
			</select></td></tr>
			<tr><td>Alamat</td> <td>:</td><td><textarea name="alamat" cols="25" rows="3" size="25" class="texarea"></textarea></td></tr>
			<tr><td>Agama</td><td>:</td><td><select name="agama"  class="texbox" value="<?php $_POST['agama']?>">
			<option value="pilih">--Pilih--</option>
			<option value="Islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha">Buddha</option>
			</select></td></tr>
			<tr><td>Status Perkawinan</td><td>:</td><td><select name="status_perkawinan" class="texbox" value="<?php $_POST['status_perkawinan']?>">
			<option value="pilih">--Pilih--</option>
			<option value="sudahkawin">Sudah Kawin</option>
			<option value="belumkawin">Belum Kawin</option>
			</select></td></tr>
			<tr><td>Pekerjaan</td> <td>:</td><td><input name="pekerjaan" size="25" class="texbox"></td></tr>
			<tr><td>Kewarganegaraan</td> <td>:</td> <td><input name="kewarganegaraan" size="25" class="texbox"></td></tr>
			<tr><td>Keterangan</td><td>:</td><td><select name="ket" class="texbox" value="<?php $_POST['keterangan']?>">
			<option value="pilih">--Pilih--</option>
			<option value="Baru">Baru</option>
			<option value="hilang">Hilang</option>
			</select></td></tr>
			<tr><td>Upload Berkas & Foto Diri</td><td>:</td><td><input type="file" name="NamaFile"></td></tr>
			<?php
			$koneksi = mysql_connect("localhost","root","","db_pelayanann");

			if(isset($_POST['proses'])){

				$direktori = "berkas/";
				$file_name=$_FILES['NamaFile']['name'];
				move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

				mysqli_query($koneksi, "insert into dokumen set file='$file_name'");

				echo "<b>File berhasil diupload";
			}
			?>
			<tr><td><input type="submit" value="Kirim" class="button">
				<input type="hidden" name="act" value="add"></td></tr>
			</table>
			</form>
</div></blockquote>
                        </div>
                </div>
              </div>
            </div>      
          </div>
        </div> 
      </article>
    </main>