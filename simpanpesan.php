<?php 
include "koneksi.php";

if(isset($_POST['save'])){
 $id_pesan = $_POST['id_pesan'];
 $ktp      = $_POST['ktp'];
 $no_mobil = $_POST['no_mobil'];
 $hari     = $_POST['hari'];
 $tgl      = $_POST['tgl'];

 $query = mysqli_query("INSERT into pesan values ('$id_pesan','$ktp','$no_mobil','$hari','$tgl')");
 if ($query){
  header("Location: tampilpesanan.php");
 }else{
  header("Location: pesanhp.php");
 }
}

 ?>