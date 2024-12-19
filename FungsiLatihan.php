<?php
// Membuat funsi
Function perkalian($a, $b)
{
    $hasil = $a * $b;
    return $hasil;
}

// Memanggil Fungsi
$hasil = perkalian(3, 4);
echo $hasil; // hasil 9
echo "<br>";
// Memanggil Fungsi
$a = 4;
$b = 5;
echo 'Hasil Perkalian ' . $a . ' x ' . $b . ' adalah: ' . perkalian($a, $b);
