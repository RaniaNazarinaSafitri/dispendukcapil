<main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
			  
            <blockquote class="tr_bq">
                            
	<?php
	include"../koneksi.php";
	?>

	<div id="daftar" style=" border: 1px solid black;">
<div class="tab-content">
<p align="center">&raquo;ANTRIAN ONLINE&laquo;</p>
<table border="0px">
	
			<form method="post" class="form-group" action="tambah_antrian.php" enctype="multipart/form-data">
			<tr><td>NIK</td> <td>:</td> <td><input name="nik" size="25" class="texbox"></td></tr>
			<tr><td>Nama Lengkap</td> <td>:</td> <td><input name="nama" size="25" class="texbox"></td></tr>
			<tr><td>Nomor HP</td> <td>:</td> <td><input name="nomor_hp" size="25" class="texbox"></td></tr>
			<tr><td>Jenis Kelamin</td><td>:</td><td><select name="jenis_kelamin" class="texbox" value="<?php $_POST['jenis_kelamin']?>">
			<option value="pilih">--Pilih--</option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
			</select></td></tr>
			<tr><td>Loket</td><td>:</td><td><select name="loket" class="texbox" value="<?php $_POST['loket']?>">
			<option value="pilih">--Pilih Loket--</option>
			<option value="A">Pelayanan Akta Kelahiran, Akta Kematian, Pindah Datang dan Dokumen Kependudukan Lainnya di Dinas</option>
			<option value="CETAK_KTPEL">Cetak KTP-el di Dinas</option>
			<option value="REKAM">Perekaman KTP-el dan Cek Biometrik (Iris) di Dinas</option>
			</select></td></tr>
			<tr><td>Hari/Tanggal</td> <td>:</td> <td><input name="tanggal" type="date" size="25" class="texbox"></td></tr>
			<!-- <tr><td>Status Perkawinan</td><td>:</td><td><select name="status_perkawinan" class="texbox" value="<?php $_POST['status_perkawinan']?>">
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
			</select></td></tr> -->
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
	