<?php include "koneksi.php"; ?>
<html>
<head>
 <title>Tampil HP</title>
</head>
<body>
<h1>Tampil Data HP</h1>
<a href="iphone.php"><button>Tambah Data HP</button></a>
<a href="index.php"><button>Menu</button></a>
<br/><br/>
 <table border="1">
  <tr>
   <td>Kode Hp</td>
   <td>Jenis</td>
   <td>Harga</td>
   <td>Option</td>
  </tr>
  <tr>
  
  <?php 
  include ("koneksi.php")
   $query = "SELECT * from hp ORDER BY id_pesan";
   $sql   = mysqli_query($link,$query);
   if (!$sql) {
    die ("Query Error :".mysqli_errno($link)."-".mysqli_error($link));
}
   while($data=mysqli_fetch_assoc ($sql)){
   ?>
   <tr class="odd gradeX">
   <td><?php echo $data['kode_hp'];?></td>
   <td><?php echo $data['jenis'];?></td>
   <td><?php echo $data['harga'];?></td>
     <td class="center"><?php echo $data['status_anggota'];?></td>
    <td class="center"><a href="edit_anggota.php?id=<?php echo $data['id_anggota']; ?>" > Edit </a>|<a href="hapus_anggota.php?id=<?php echo $data['id_anggota']; ?>"
    onClick = "return confirm('Apakah Anda ingin menghapus  <?php echo $data['nm_anggota']; ?>?')"> hapus</a></td>
    </tr>
   </td>
  </tr>
  <?php } ?>
 </table>
</body>
</html>
