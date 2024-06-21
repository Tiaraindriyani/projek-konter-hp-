<?php 
include "koneksi.php";

$save = @$_GET['save'];

if(isset($save)){
 $id_pesan = @$_GET['id_pesan'];
 $ktp = @$_GET['ktp'];
 $no_mobil = @$_GET['no_mobil'];
 $hari = @$_GET['hari'];
 $tgl = @$_GET['tgl'];
 $sql = "UPDATE pesan set id_pesan='$id_pesan', ktp='$ktp', no_mobil='$no_mobil', hari='$hari', tgl='$tgl' where id_pesan='$id_pesan'";
 $query = mysql_query($sql);
 if ($query){
  echo "Berhasil di edit";
  header("Location: tampilpesanan.php");
 }else{
  echo "Gagal di edit";
  header("Location: editpesanan.php");
 }
}

 ?>
