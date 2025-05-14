<?php 

define("pajak",0.1);

$Array = array(
    
    "Keyboard" => 150000,
    "Microphone"=> 80000,
    "Mouse"=> 65000,
    "Monitor"=> 50000

);

$jumlah = 2;
$namaBarang = "Keyboard";
$hargaBarang = $Array['Keyboard'];
$hargaNonPajak = $hargaBarang * $jumlah;
$pajakTotal = $hargaBarang * $jumlah * pajak;
$hargaTotal = $hargaNonPajak + $pajakTotal;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga</title>
    <Style>
        .kotak{
            border: 1px solid black;
            padding: 20px;
            display: inline-block;
        }
    </Style>
</head>
<body class="kotak">
    <h1>Perhitungan Total Pembelian (Dengan Array)</h1>
    <hr>
    <p>Nama Barang: <?php echo  $namaBarang ?> </p>
    <p>Harga Satuan: <?php echo "Rp $hargaBarang" ?> </p>
    <p>Jumlah Beli: <?php echo $jumlah ?> </p>
    <p>Total Harga (Sebelum Pajak): <?php echo "Rp $hargaNonPajak" ?> </p>
    <p>Pajak (10%): <?php echo "Rp $pajakTotal" ?> </p>
    <p><b>Total Bayar: <?php echo "Rp $hargaTotal" ?> </b></p>
</body>
</html>