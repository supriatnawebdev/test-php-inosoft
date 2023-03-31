<?php
function luas_lingkaran($jari_jari) {
  $luas = 3.14 * pow($jari_jari, 2);
  return number_format((float)$luas, 2, '.', '');
}

function keliling_lingkaran($jari_jari) {
  $keliling = 2 * 3.14 * $jari_jari;
  return number_format((float)$keliling, 2, '.', '');
}

function luas_persegi($panjang, $lebar) {
  $luas = $panjang * $lebar;
  return number_format((float)$luas, 2, '.', '');
}

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    $luas_persegi = luas_persegi($i/3, $i/5);
    echo "Angka $i adalah kelipatan 3 dan 5, luas persegi dengan panjang $i/3 dan lebar $i/5 adalah: $luas_persegi <br>";
  } elseif ($i % 3 == 0) {
    $jari_jari = $i/3;
    $luas_lingkaran = luas_lingkaran($jari_jari);
    echo "Angka $i adalah kelipatan 3, luas lingkaran dengan jari-jari $jari_jari adalah: $luas_lingkaran <br>";
  } elseif ($i % 5 == 0) {
    $jari_jari = $i/5;
    $keliling_lingkaran = keliling_lingkaran($jari_jari);
    echo "Angka $i adalah kelipatan 5, keliling lingkaran dengan jari-jari $jari_jari adalah: $keliling_lingkaran <br>";
  } else {
    echo "Angka $i <br>";
  }
}
?>
