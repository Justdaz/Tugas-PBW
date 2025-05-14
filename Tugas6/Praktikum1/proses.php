<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
    <Style>
        .kotak{
            border: 1px solid black;
            padding: 20px;
            display: inline-block;
        }
    </Style>
</head>
<body class="kotak">
<?php 
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];
$predikat = "";

if ($nilai >= 85 && $nilai <= 100) {
    $predikat = "A";
} elseif ($nilai >= 75 && $nilai < 85) {
    $predikat = "B";
} elseif ($nilai >= 65 && $nilai < 75) {
    $predikat = "C";
} elseif ($nilai >= 50 && $nilai < 65) {
    $predikat = "D";
} elseif ($nilai >= 0 && $nilai < 50) {
    $predikat = "E";
} else {
    $predikat = "Nilai tidak valid";
}

if ($nilai >= 75) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

echo "<p>Nama: $nama</p>";
echo "<p>Nilai: $nilai</p>";
echo "<p>Predikat: $predikat</p>";
echo "<p>Status: $status</p>";
?>
</body>
</html>