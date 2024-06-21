<?php 
include "koneksi.php";

$save = @$_POST['save'];
if(isset($save)){
 $nama = @$_POST['nama'];
 $ktp = @$_POST['ktp'];
 $alamat = @$_POST['alamat'];
 $no_hp = @$_POST['no_hp'];

 $sql = "UPDATE pelanggan set ktp='$ktp', nama='$nama', alamat='$alamat', no_hp='$no_hp'  where ktp='$ktp'";
 $query = mysql_query($sql) or die (mysql_error());
 if ($query){
  echo "Berhasil di edit";
  header("Location: tampilpelanggan.php");
 }else{
  echo "Gagal di edit";
  header("Location: editpelanggan.php");
 }
}
 ?>