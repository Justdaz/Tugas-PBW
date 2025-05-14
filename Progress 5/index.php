<?php
$nama = "Helix ID";
$umur = 20;
echo "Nama saya adalah $nama" . "<br>";
echo "Umur saya adalah $umur" . "<br>";
?>

<?php 
$berat = 43.5;
echo "Berat saya $berat" . "<br>";

$isLogin = true;
?>

<?php 
$buah = ["apel", "jeruk", "mangga"];
echo $buah[2] ."<br>";

?>

<?php
   class Mahasiswa {
       public $nama;
       public function sapa() {
           return "Halo, saya $this->nama";
       }
   }
   $mhs = new Mahasiswa();
   $mhs->nama = "SUGENG";
   echo $mhs->sapa();
?>

<?php
   $data = null;
   var_dump($data);
?>

<br>
<a href="../Tugas6/Praktikum1/latihan_nilai.php">Nilai Mahasiswa</a>
<br>
<a href="../Tugas6/Praktikum2/index.php">UKT Mahasiswa</a>

