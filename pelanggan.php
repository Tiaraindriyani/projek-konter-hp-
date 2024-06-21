<?php 
include "koneksi.php";
 ?>

<html>
<head>
 <title>Pelanggan</title>
</head>
<body>
<table>
 <form action="simpanpelanggan.php" method="POST">
  
  <tr>
   <td>Nama</td>
   <td>:</td>
   <td><input type="text" name="nama" ></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td>:</td>
   <td><input type="text" name="alamat" ></u></td>
  </tr>
  <tr>
   <td>Nomor HP</td>
   <td>:</td>
   <td><input type="text" name="no_hp" ></td>
  </tr>
  <tr>
   <td>No KTP</td>
   <td>:</td>
   <td><input type="text" name="ktp" ></td>
  </tr>
  <tr>
   <td></td>
   <td></td>
   <td><input type="submit" name="save" value="Save"></td>
  </tr>
 </form>
</table>
</body>
</html>