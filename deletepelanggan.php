<?php 
include ("koneksi.php");
$ktp =$_GET['id'];
$sql ="DELETE from pelanggan where ktp=$ktp";
mysqli_query($sql);
if($sql){
 ?>
 <script type="text/javascript">
  alert("Terhapus");
  
 </script>
 <?php
 header("Location: tampilpelanggan.php");
 }

?>