<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $hari = "Selasa";


        switch ($hari) {
        case "Senin":
            echo "Hari pertama kerja!";
            break;
        case "jum'at":
            echo "Solat jumat!";
            break;
        case "Minggu":
            echo "Libur akhir pekan!";
            break;
        default:
            echo "Hari biasa.";
        }

        for ($i = 1; $i <= 10; $i++) {
        echo "<br>Angka ke-$i";
        }

        $buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];

        for ($i = 0; $i < count($buah); $i++) {
        echo "<br>" . $buah[$i] ;
        }

        $nilai = 6;

        while ($nilai <= 15) {
        echo "<br>Nilai: ". $nilai;
        $nilai++;
        }

        $mahasiswa = [
        "10001" => "Andi",
        "10002" => "Budi",
        "10003" => "Citra",
        "10004" => "Dewi",
        ];
        echo "<br>";

        foreach ($mahasiswa as $nim => $nama) {
        echo "NIM: ". $nim .", Nama:". $nama."<br>";
        }

        $umur = 15;
        $status = ($umur >= 17) ? "Dewasa" : "Anak-anak";


        echo $status;
        
        echo "<br>";
        include 'menu.php';
    ?>
</body>
</html>
