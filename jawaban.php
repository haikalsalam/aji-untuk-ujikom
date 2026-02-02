<?php

// jawaban soal level 1

$nilai_akademik = 80;
$nilai_wawancara = 75;
$nilai_prestasi = 90;

$skor_akhir = ($nilai_akademik * 0.5) + ($nilai_wawancara * 0.3) + ($nilai_prestasi * 0.2);

echo "Skor Akhir: " . $skor_akhir;


// jawaban soal level 2

if ($skor_akhir >= 85) {
    echo "<br>Direkomendasikan ke Jurusan RPL";
} elseif ($skor_akhir >= 70 && $skor_akhir <= 84) {
    echo "<br>Direkomendasikan ke Jurusan TKJ";
} else {
    echo "<br>Direkomendasikan ke Jurusan Multimedia";
}



// jawaban soal level 3

$pendaftar = [
    ["nama" => "Adi", "status" => "Lunas"],
    ["nama" => "Beni", "status" => "Belum Bayar"],
    ["nama" => "Cici", "status" => "Lunas"],
    ["nama" => "Dedi", "status" => "Belum Bayar"],
];

$total_lunas = 0;

foreach ($pendaftar as $p) {

    if ($p["status"] == "Lunas") {
        echo "<p style='color: green'>" . $p["nama"] . "</p>";
        $total_lunas++;
    } else {
        echo "<p style='color: red'>" . $p["nama"] . "</p>";
    }
}

echo "Total siswa yang sudah Lunas: " . $total_lunas;

?>
