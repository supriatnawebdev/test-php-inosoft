<?php
// Fungsi untuk menghitung luas lingkaran
function luas_lingkaran($jari_jari) {
    $luas = pi() * $jari_jari * $jari_jari;
    return $luas;
}

// Perulangan dari 1 hingga 100
for ($i = 1; $i <= 100; $i++) {
    // Cek apakah $i adalah kelipatan 3
    if ($i % 3 == 0) {
        // Hitung jari-jari lingkaran dengan membagi $i dengan 3
        $jari_jari = $i / 3;
        // Hitung luas lingkaran dan cetak hasilnya
        $luas = luas_lingkaran($jari_jari);
        echo "Luas lingkaran dengan jari-jari $jari_jari adalah: $luas<br>";
    }
}
?>
