<html>
<head>
<title>Tabel Perkalian</title>
</head>
<body>
Tabel Perkalian<br>
=================<br><br>

<?php
$bil = 12;
$opr = "*";
$tanda = "=";
for ($i = 15; $i <= 45; $i++) {
$jml = $bil * $i;
if ($i%2 == 0) continue;
else echo $bil ." " . $opr ." " . $i . " " . $tanda . " " . $jml . "<br>";
}
?>
</body>
</html>