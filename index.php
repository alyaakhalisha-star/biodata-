<?php  

$namaLengkap = "Alyaa Khalisha Putri";
$namaPanggilan = "Alyaa";
$agama = "Islam";
$tempatLahir = "Semarang";
$tanggalLahir = 1;
$bulanLahir = 11;
$tahunLahir = 2009;
$alamat = "Jl. Murti Flamboyan I No 70";

$hobi = ["Memotret","Menyanyi","Basket"];
$skills = ["Berkomunikasi","Bersosial","Mengamati suatu hal"];
$gender = "Perempuan";
$pendidikan = "SMK";
$negara = "Indonesia";
$wa = "0812262790202";
$email = "alyaa.khalisha@gmail.com";

$makananFavorit = ["Mie","Nasi Goreng","Pasta"];
$minumanFavorit = ["Air Putih","Jus Buah Naga","Susu"];

$motto = "Beranilah Untuk Mencoba Hal Baru, Tapi Jangan Coba-Coba Makan Batu";

$tahunSekarang = date("2026");
$umur = 2026 - 2009;
$umur10 = 17 + 10;
$tahun10 = 2026 + 10;

?>

<html>
<head>
<title>Biodata</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="container">

<div class="header">
BIODATA SI GEMAS
</div>

<a href="jadwal.php" class="btn">Lihat Jadwal Pelajaran</a>

<div class="box">
<div class="foto">
<img src="foto.jpg">
</div>

<div class="data">
  <p><i class="fas fa-envelope"></i> Email : <?php echo $email; ?></p>
  <p><i class="fas fa-user"></i> Nama : <?php echo $namaLengkap; ?></p>
  <p><i class="fas fa-id-badge"></i> Panggilan : <?php echo $namaPanggilan; ?></p>
  <p><i class="fas fa-birthday-cake"></i> Umur : <?php echo $umur; ?></p>
  <p><i class="fas fa-map-marker-alt"></i> Alamat : <?php echo $alamat; ?></p>
  <p><i class="fab fa-whatsapp"></i> No WA : <?php echo $wa; ?></p>
  </div>

</div>
<div class="kotak">

<marquee class="motto">
<?php echo $motto ?>
</marquee>

<h3><i class="fas fa-star"></i> Skills</h3>
 Berkomunikasi
 <input type="range" value="80"><br>
 Bersosial
 <input type="range" value="50"><br>
 Mengamati Suatu Hal
 <input type="range" value="70"><br>

</div>
<div class="kotak">

<h3><i class="fas fa-heart"></i> Hobi</h3>
<ol>
 <?php
     foreach($hobi as $h){
     echo "<li>$h</li>";}
 ?>
</ol>

</div>
<div class="kotak">

<h3><i class="fas fa-utensils"></i> Makanan Favorit</h3>
<ul type="square">
 <?php
     foreach($makananFavorit as $m){
     echo "<li>$m</li>";}
 ?>
</ul>


<h3><i class="fas fa-wine-glass"></i> Minuman Favorit</h3>
<ol type="A">
<?php
     foreach($minumanFavorit as $m){
     echo "<li>$m</li>";}
?>
</ol>

</div>
<div class="kotak">

<h3><i class="fas fa-school"></i> Pendidikan</h3>
<table border="1">

<tr>
 <th>Tingkat</th>
 <th>Sekolah</th>
 <th>Tahun</th>
</tr>

<tr>
 <td>SD</td>
 <td>SDN Bugangan 3</td>
 <td>2016-2022</td>
</tr>

<tr>
 <td>SMP</td>
 <td>SMPN 15</td>
 <td>2022-2025</td>
</tr>

<tr>
 <td>SMK</td>
 <td>SMKN 8</td>
 <td>2025-2028</td>
</tr>
</table>

</div>
<div class="kotak">

<h3><i class="fas fa-book"></i> Cerita 10 Tahun Lagi</h3>
<p>
 Hai namaku <?php echo $namaPanggilan ?>,
 saat ini tahun <?php echo $tahunSekarang ?>,
 aku adalah Alyaa yang berumur <?php echo $umur ?> tahun,
 10 tahun lagi di tahun <?php echo $tahun10 ?>,
 di umur <?php echo $umur10 ?>,
 aku adalah pengusaha sukses dalam segala bidang terutama dibidang pakaian anak, aku ingin memperjuangkan rencana yang akan aku tempuh di kehidupanku untuk meneruskan usaha orang tua saya.
</p>

</div>

</div>

</body>

</html>
