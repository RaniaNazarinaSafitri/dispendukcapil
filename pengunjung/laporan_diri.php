     <!-- MAIN -->
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
<p align="center">&raquo;Input Data Laporan Diri&laquo;</p>
<table border="0px">
			<form method="post" class="form-group" action="tambah_laporan_diri.php" enctype="multipart/form-data">
			<tr><td>Nama</td> <td>:</td> <td><input name="nama" size="25" class="texbox"></td></tr>
			<tr><td>Tanggal Kejadian</td> <td>:</td> <td><input name="tgl_laporan" type="date" size="25" class="texbox"></td></tr>
			<tr><td>Jenis Kelamin</td><td>:</td><td><select name="jenis_kelamin" class="texbox" value="<?php $_POST['jenis_kelamin']?>">
			<option value="pilih">--Pilih--</option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
			<tr><td>Alamat</td> <td>:</td><td><textarea name="alamat" cols="25" rows="3" size="25" class="texarea"></textarea></td></tr>
			<tr><td>Pekerjaan</td> <td>:</td> <td><input name="pekerjaan" size="25" class="texbox"></td></tr>
			<tr><td>Judul Laporan</td> <td>:</td><td><input name="judul_laporan" size="25" class="texbox"></td></tr>
			<tr><td>Isi Laporan</td> <td>:</td><td><textarea name="isi_laporan"  cols="25" rows="3" size="25" class="texarea"></textarea></td></tr>
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