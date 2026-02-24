<html>
<head>
<title>Jadwal</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
     <h1>Jadwal Pelajaran</h1>
     <a href="index.php" class="btn">Kembali</a>
<div class="kotak">
<table border="1">

<tr>
 <th>Jam</th>
 <th>Senin</th>
 <th>Selasa</th>
 <th>Rabu</th>
 <th>Kamis</th>
 <th>Jumat</th>
</tr>

<?php

$senin = ["MTK","MTK","SJR","PABP","PABP","PABP","BNG","BNG","BIN","BIN"];
$selasa = ["IPAS","IPAS","IPAS","IPAS","PPS","PPS","BJW","BJW","SNM","SNM"];
$rabu = ["PGD","PGD","PGD","PGD","PGD","PGD","GIM","GIM","GIM","GIM"];
$kamis = ["POR","POR","POR","SJR","BNG","BNG","MTK","MTK","BIN","BIN"];
$jumat = ["INF","INF","KKA","KKA","IPAS","IPAS","PGD","PGD","-","-"];

for($i=0;$i<10;$i++){

echo "<tr>";
echo "<td>".($i+1)."</td>";
echo "<td>$senin[$i]</td>";
echo "<td>$selasa[$i]</td>";
echo "<td>$rabu[$i]</td>";
echo "<td>$kamis[$i]</td>";
echo "<td>$jumat[$i]</td>";
echo "</tr>";}

?>
</table>
</div>
<br>

<a href="piket.php" class="btn">Ke Piket</a>

</div>
</body>

</html>
