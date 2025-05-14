<?php 
$nama = $_POST['nama'];

echo "Halo, $nama";

$var_umur = $_POST['umur'];

if ($var_umur < 18) {
       echo "<h1>Anda Masih Muda!</h1>";
   }elseif ($var_umur >= 18 && $var_umur <= 30) {
       echo "<h1>Anda Remaja!</h1>";
   } elseif ($var_umur > 30 && $var_umur <= 50) {
       echo "<h1>Anda Dewasa!</h1>";
   } elseif ($var_umur > 50 && $var_umur <= 65) {
       echo "<h1>Anda Lansia!</h1>";
   } elseif ($var_umur > 65) {
       echo "<h1>Anda Fosil</h1>";
   }  elseif ($var_umur <= 0) {
       echo "<h1>Anda masih di surga</h1>";
   } else {
       echo "<h1>Umur Tidak Diketahui</h1>";
   }

?>