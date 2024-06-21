<?php 
include "koneksi.php";
 ?>

<html>
<head>
 <title>Pelanggan</title>
</head>
<body>
<table>
 <form action="simpanmobil.php" method="POST">
  <tr>
   <td>Kode HP</td>
   <td>:</td>
   <td><input type="text" name="kode_hp" ></td>
  </tr>
  <tr>
   <td>Jenis</td>
   <td>:</td>
   <td>
    <select name="type">
     <option value="iPhone 13 Pro Max">iPhone 13 Pro Max</option>
     <option value="iPhone 13 Pro">iPhone 13 Pro</option>
     <option value="iPhone 13">iPhone 13</option>
     <option value="iPhone 13 mini">iPhone 13 mini</option>
     <option value="iPhone 12 Pro Max">iPhone 12 Pro Max</option>
     <option value="iPhone 12 Pro">iPhone 12 Pro</option>
     <option value="iPhone 12">iPhone 12</option>
     <option value="iPhone 12 mini">iPhone 12 mini</option>
     <option value="iPhone X">iPhone X</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>Harga Sewa</td>
   <td>:</td>
   <td><input type="text" name="harga" ></td>
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