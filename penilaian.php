<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil penilaian</title>
</head>
<body>
    <h2>Hasil penilaian siswa</h2>

    <?php
    // data siswa
    $nama = "furry";
    $kelas = "XIIPPLG3";
    $nilaitugas = 85;
    $nilaiUTS = 80;
    $nilaiUAS = 90;

    //hitung nilai akhir
    $nilaiakhir = ($nilaitugas * 30 / 100) + ($nilaiUTS * 30 / 100) + ($nilaiUAS * 40 / 100);

    //predikat
    if ($nilaiakhir >= 90) {
        $predikat = "A";
    } elseif ($nilaiakhir >= 80) {
        $predikat = "B";
    } elseif ($nilaiakhir >= 75) {
        $predikat = "C";
    } elseif ($nilaiakhir >= 60) {
        $predikat = "D";
    } else {
        $predikat = "E";
    }

    //status
    if ($nilaiakhir >=75) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    //tampilan hasil
    echo "Nama: $nama <br>";
    echo "Kelas: $kelas <br>";

    echo "<br>";

    echo "Nilai tugas: $nilaitugas <br>";
    echo "Nilai UTS: $nilaiUTS <br>";
    echo "Nilai UAS: $nilaiUAS <br>";

    echo "<br>";

    echo "Nilai akhir $nilaiakhir <br>";
    echo "Predikat $predikat <br>";
    echo "Status $status <br>";
    ?>
    
</body>
</html>