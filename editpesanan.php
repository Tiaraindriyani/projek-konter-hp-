<?php 
include "koneksi.php";
   $id_pesan=@$_GET['id_pesan'];
   $sql = "SELECT * from pesan where id_pesan='$id_pesan'";
   $query = mysql_query($sql);
   $x = mysql_fetch_array ($query);
 ?>
<html>
<head>
 <title>Edit Pemesanan mobil</title>
</head>
<body>
<h1>Edit Pesan mobil</h1>
<form method="GET" action="editpesananlagi.php">
 <table>
  <tr>
   <td>ID pemesanan</td>
   <td>:</td>
   <td><input type="text" name="id_pesan" value="<?php echo $x['id_pesan'] ?>"></td>
  </tr>
  <tr>
   <td>pilih KTP pelanggan</td>
   <td>:</td>
   <td>
    <select name="ktp">
     <?php 
     include "koneksi.php";
   $sql = "SELECT * from pelanggan";
   $query = mysql_query($sql);
   while($data = mysql_fetch_array ($query)){
      ?>
     <option value="<?php echo $data['ktp']; ?>"><?php echo $data['ktp'] ?> (<?php echo $data['nama'] ?>)
     </option>
     <?php } ?>
    </select>
   </td>
  </tr>
    <tr>
   <td>pilih No Mobil</td>
   <td>:</td>
   <td>
    <select name="no_mobil">
     <?php 
     include "koneksi.php";
   $sql = "SELECT * from mobil";
   $sql1 = "SELECT * from pesan";
   $query = mysql_query($sql);
   $query1 = mysql_query($sql1);
   
   while($data1 = mysql_fetch_array ($query1)){ //pesan
    while ($data = mysql_fetch_array($query)) { //mobil
     if ($data['no_mobil'] != $data1['no_mobil']){
    ?>
      <option value="<?php echo $data['no_mobil']; ?>"><?php echo $data['no_mobil'] ?> (<?php echo $data['type'] ?>)
      </option>
    <?php 

      }
     }
    }
     ?>
    </select>
   </td>
  </tr>
  <tr>
   <td>Lama meminjam</td>
   <td>:</td>
   <td><input type="text" name="hari" value="<?php echo $x['hari'] ?>"></td>
  </tr>
  <tr>
   <td>Tanggal</td>
   <td>:</td>
   <td><input type="date" name="tgl" value="<?php echo $x['tgl'] ?>"></td>
  </tr>
  <tr>
   <td></td>
   <td></td>
   <td><input type="Submit" name="save" value="SIMPAN"></td>
  </tr>
 </table>
</form>
</body>
</html>
