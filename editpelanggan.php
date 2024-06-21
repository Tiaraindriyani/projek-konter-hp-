<?php
 include "koneksi.php";
 $ktp = @$_GET['id'];

 $sql = "SELECT * from pelanggan where ktp='$ktp'";
 $query = mysql_query($sql) or die (mysql_error());
 $data = mysql_fetch_array ($query) or die (mysql_error());
   ?>
<html>
<head>
 <title>Pelanggan</title>
</head>
<body>
<h1>Edit Data Pelangan</h1>
<table>
 <form action="editpelangganlagi.php" method="POST">
  <tr>
   <td>No KTP</td>
   <td>:</td>
   <td><input type="text" name="ktp" value="<?php echo $data['ktp'] ?>"></td>
  </tr>
  <tr>
   <td>Nama</td>
   <td>:</td>
   <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td>:</td>
   <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></u></td>
  </tr>
  <tr>
   <td>No HP</td>
   <td>:</td>
   <td><input type="text" name="no_hp" value="<?php echo $data['no_hp'] ?>"></td>
  </tr>
  <?php  ?>
  <tr>
   <td></td>
   <td></td>
   <td><input type="submit" name="save" value="Save"></td>
  </tr>
 </form>
</table>
</body>
</html>