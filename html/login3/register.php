<?php
include "koneksi.php";
?>

    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <blockquote class="tr_bq">
<?php

if (@$_POST['act']=="add"){
    $sql_add=mysql_query("INSERT INTO tbl_pengunjung (username,password,nama_lengkap,tgl_lahir,jenis_kelamin,alamat,agama,no_telpon) VALUES ("
    ."'".$_POST['username']."',
    '".$_POST['password']."',
    '".$_POST['nama_lengkap']."',
    '".$_POST['tgl_lahir']."',
    '".$_POST['jenis_kelamin']."',
    '".$_POST['alamat']."',
    '".$_POST['agama']."',
    '".$_POST['no_telpon']."') ");
    echo'<script>alert("Data Berhasil Disimpan");window.location ="./";</script>';
}
?>
<div id="daftar" style=" border: 1px solid black;">
<div class="tab-content">
<p align="center">&raquo;FORM PENDAFTARAN&laquo;</p>
<table border="0px">
<form method="post" enctype="multipart/form-data">
<tr><td>Username</td> <td>:</td> <td><input name="username" size="25" class="texbox"></td></tr>
<tr><td>Password</td> <td>:</td> <td><input name="password" size="25" class="texbox" type="password"></td></tr>
<tr><td>Nama Lengkap</td> <td>:</td> <td><input name="nama_lengkap" size="25" class="texbox"></td></tr>
<tr><td>Tanggal Lahir</td> <td>:</td><td><input name="tgl_lahir" size="25" class="texbox" type="date"></td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><select name="jenis_kelamin" class="texbox" value="<?php $_POST['jenis_kelamin']?>">
<option value="pilih">--Pilih--</option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select></td></tr>
<tr><td>Alamat</td> <td>:</td><td><textarea name="alamat"  cols="25" rows="3" class="texarea"></textarea></td></tr>
<tr><td>Agama</td><td>:</td><td><select name="agama"  class="texbox" value="<?php $_POST['agama']?>>
<option value="pilih">--Pilih--</option>
<option value="pilih">--Pilih--</option>
<option value="Islam">Islam</option>
<option value="kristen">Kristen</option>
<option value="Hindu">Hindu</option>
<option value="buddha">Buddha</option>
</select></td></tr>
<tr><td>No Telepon</td> <td>:</td><td><input name="no_telpon"  size="25" class="texbox"></td></tr>


<tr><td><input type="submit" value="Simpan" class="button">
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
    
    <!-- FOOTER -->
    