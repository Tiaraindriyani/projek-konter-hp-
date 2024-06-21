<?php 
include "koneksi.php";

if(isset($_POST['save'])){
 $no    = $_POST['kode_hp'];
 $type  = $_POST['type'];
 $harga = $_POST['harga'];

 $query = mysqli_query("INSERT into hp values ('$no','$harga','$type')") or die (mysqli_error());
 if ($query){
  header("Location: tampilhp.php");
 }else{
  header("Location: iPhone.php");
 }
}

 ?>