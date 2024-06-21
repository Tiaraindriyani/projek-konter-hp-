<?php include "koneksi.php"; ?>
<html>
<head>
 <title>Tampil Pelanggan</title>
</head>
<body>
<h1>Tampil Data Pelanggan</h1>
<a href="pelanggan.php"><button>Tambah Data Pelanggan</button></a>
<a href="index.php"><button>Menu</button></a>
<br/><br/>
 <table border="1">
  <tr>
   <td>Nama</td>
   <td>Alamat</td>
   <td>No HP</td>
   <td>KTP</td>
   <td>Option</td>
  </tr>
  <tr>
  <?php 
   $sql = "SELECT * from pelanggan";
   $query = mysql_query($sql);
   while($data = mysql_fetch_array ($query)){
   ?>
   <td><?php echo $data['nama']; ?></td>
   <td><?php echo $data['alamat']; ?></td>
   <td><?php echo $data['no_hp']; ?></td>
   <td><?php echo $data['ktp']; ?></td>
   <td>
   <a href="deletepelanggan.php?id=<?php echo $data['ktp'];?>">Delete</a> | 
   <a href="editpelanggan.php?id=<?php echo $data['ktp'];?>">Edit
   </td>
  </tr>
  <?php } ?>
 </table>
</body>
</html>
