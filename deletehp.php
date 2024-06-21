<?php
include ("koneksi.php");

$no_mobil =$_GET['id'];
$sql      ="DELETE from mobil where no_mobil=$no_mobil";
mysqli_query($sql);
if($sql){
 ?>
 <script type="text/javascript">
  alert("Terhapus");
  
 </script>
 <?php
 header("Location: tampilmobil.php");
 }


?>