<?php include "koneksi.php"; ?>
<html>
<head>
 <title>Tampil Pesanan</title>
</head>
<body>
<h1>Tampil Data Persewaan HP</h1>
<a href="pesananhp.php"><button>Tambah Data Persewaan HP</button></a>
<a href="index.php"><button>Menu</button></a>
<br/><br/>
 <table border="2">
  <tr>
   <td>ID</td>
   <td>Nama</td>
   <td>Kode HP</td>
   <td>Tanggal pinjam</td>
   <td>Hari</td>
   <td>Total biaya</td>
   <td>Option</td>
  </tr>
  <tr>

  <?php 
  $sql = "SELECT pesan.id_pesan, pelanggan.nama, iphone.kode_mobil, pesan.tgl, pesan.hari, iphone.harga from pesan, pelanggan, iphone where pelanggan.ktp=pesan.ktp and iphone.kode_hp=pesan.kode_hp";
   $query = mysqli_query($sql) or die(mysqli_error());
   while($data = mysqli_fetch_assoc ($query)){
   ?>
   <td><?php echo $data['id_pesan']; ?></td>
   <td><?php echo $data['nama']; ?></td>
   <td><?php echo $data['kode_hp']; ?></td>
   <td><?php echo $data['tgl']; ?></td>
   <td><?php echo $data['hari']; ?></td>
   <?php 
   $hari = $data['hari'];
   $harga = $data['harga'];
   $total = $hari*$harga ?>
   <td><?php echo $total; ?></td>
   <td>
   <a href="deletepesanan.php?id=<?php echo $data['id_pesan'];?>">Delete</a> | 
   <a href="editpesanan.php?id_pesan=<?php echo $data['id_pesan'];?>">Edit
   </td>
  </tr>
  <?php } ?>
 </table>
</body>
</html>

