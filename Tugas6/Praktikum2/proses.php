<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAGIHAN</title>
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
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];
    $diskon = 0;

    if ($ukt >= 5000000 && $semester > 8) {
        $diskon = 15;
    } elseif ($ukt >= 5000000)  {
        $diskon = 10;
    } else {
        $diskon = 0;
    }
    


    echo "<p>NPM: $npm</p>";
    echo "<p>NAMA: $nama</p>";
    echo "<p>PRODI: $prodi</p>";
    echo "<p>SEMESTER: $semester</p>";
    echo "<p>BIAYA UKT: Rp.$ukt</p>";
    echo "<p>DISKON: $diskon%</p>";
    echo "Yang harus dibayar: Rp." . ($ukt - ($ukt * $diskon / 100));
    ?>
</body>
</html>
