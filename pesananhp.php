<!DOCTYPE html>
<html>
<head>
 <title>Persewaan iPhone</title>
</head>
<body>
<h1>Pesan HP</h1>
<form method="POST" action="simpanpesan.php">
 <table>
  <tr>
   <td>Kode HP</td>
   <td>:</td>
   <td><input type="text" name="kode_hp" placeholder="ID"></td>
  </tr>
  <tr>
   <td>KTP penyewa</td>
   <td>:</td>
   <td>
    <select name="ktp_pemesan">
     <?php 
     include "koneksi.php";
   $sqli = "SELECT * from pelanggan";
   $query = mysqli_query($sql);
   while($data = mysqli_fetch_array ($query)){
      ?>
     <option value="<?php echo $data['ktp']; ?>"><?php echo $data['ktp'] ?> (<?php echo $data['nama'] ?>)
     </option>
     <?php } ?>
    </select>
   </td>
  </tr>
    <tr>
   <td>Pilih Jenis HP</td>
   <td>:</td>
   <td>
    <select name="jenis">
    <option value="belum dipilih" selected="">-Pilih HP-</option>
     <?php 
     include "koneksi.php";
   $sqli = "SELECT * from hp";
   $sql1 = "SELECT * from pesan";
   $query = mysqli_query($sql);
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
   <td>Lama pinjam</td>
   <td>:</td>
   <td><input type="text" name="hari"></td>
  </tr>
  <tr>
   <td>Tanggal</td>
   <td>:</td>
   <td><input type="date" name="tgl"></td>
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
