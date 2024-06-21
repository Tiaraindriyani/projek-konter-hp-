<?php 
include "koneksi.php";

if(isset($_POST['save'])){
 $nama   = $_POST['nama'];
 $ktp    = $_POST['ktp'];
 $alamat = $_POST['alamat'];
 $no_hp  = $_POST['no_hp'];

 $query = mysqli_query("INSERT into pelanggan values ('$ktp','$nama','$alamat','$no_hp')") or die (mysqli_error());
 if ($query){
  ?>
  <script type="text/javascript">
   alert ("Success");
  </script>
  <?php
  header("Location: tampilpelanggan.php");
 }else{
  ?>
  <script type="text/javascript">
   alert ("Failed");
  </script>
  <?php
  header("Location: pelanggan.php");
 }
}
 ?>
