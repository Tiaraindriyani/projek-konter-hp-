<?php 
include "koneksi.php";
   $no_mobil=$_GET['id'];
   $sql = "SELECT * from mobil where no_mobil=$no_mobil";
   $query = mysql_query($sql);
   $data = mysql_fetch_array ($query);
 ?>

<html>
<head>
 <title>Pelanggan</title>
</head>
<body>
<table>
 <form action="editmobillagi.php" method="POST">
  <tr>
   <td>Nomor Mobil</td>
   <td>:</td>
   <td><input type="text" name="no_mobil" value="<?php echo $data['no_mobil'] ?>"></td>
  </tr>
  <tr>
   <td>Merk</td>
   <td>:</td>
   <td>
    <select name="type">
     <option value="Toyota">Toyota</option>
     <option value="Honda">Honda</option>
     <option value="Suzuki">Suzuki</option>
     <option value="Nissan">Nissan</option>
     <option value="Isuzu">Isuzu</option>
     <option value="Chevrolet">Chevrolet</option>
     <option value="BMW">BMW</option>
     <option value="Marcedes Bens">Marcedes Bens</option>
     <option value="KIA">KIA</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>Harga sewa</td>
   <td>:</td>
   <td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
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


editmobillagi.php
<?php 
include "koneksi.php";

$save = @$_POST['save'];
if(isset($save)){
 $no_mobil = @$_POST['no_mobil'];
 $type = @$_POST['type'];
 $harga = @$_POST['harga'];

 $sql = "UPDATE mobil set no_mobil='$no_mobil', type='$type', harga='$harga' where no_mobil=$no_mobil";
 $query = mysql_query($sql) or die (mysql_error());
 if ($query){
  echo "Berhasil di edit";
  header("Location: tampilmobil.php");
 }else{
  echo "Gagal di edit";
  header("Location: editmobil.php");
 }
}
 ?>
