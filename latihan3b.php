<?php
// Variabel untuk contoh
$var1 = null;
$var2 = "";
$var3 = 0;
$var4 = "Hello, PHP!";

// Pemeriksaan dengan isset()
echo "Hasil isset():<br>";
echo "isset(\$var1): " . (isset($var1) ? 'true' : 'false') . "<br>"; // false
echo "isset(\$var2): " . (isset($var2) ? 'true' : 'false') . "<br>"; // true
echo "isset(\$var3): " . (isset($var3) ? 'true' : 'false') . "<br>"; // true
echo "isset(\$var4): " . (isset($var4) ? 'true' : 'false') . "<br>"; // true

echo "<br>";

// Pemeriksaan dengan empty()
echo "Hasil empty():<br>";
echo "empty(\$var1): " . (empty($var1) ? 'true' : 'false') . "<br>"; // true
echo "empty(\$var2): " . (empty($var2) ? 'true' : 'false') . "<br>"; // true
echo "empty(\$var3): " . (empty($var3) ? 'true' : 'false') . "<br>"; // true
echo "empty(\$var4): " . (empty($var4) ? 'true' : 'false') . "<br>"; // false
?>