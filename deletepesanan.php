<?php 
include ("koneksi.php");
$id_pesan = $_GET['id'];
$sql      ="DELETE from pesan where id_pesan=$id_pesan";
mysql_query($sql);
if($sql){
 ?>
 <script type="text/javascript">
  alert("Terhapus");
  
 </script>
 <?php
 header("Location: tampilpesanan.php");
 }

?> 