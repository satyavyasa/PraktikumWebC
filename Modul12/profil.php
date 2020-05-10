<?php 
require 'koneksi.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$nama = $_SESSION["username"];
$type = $_SESSION["role"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil | Universitas Udayana</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#add8e6" <?= ($type == 'admin') ? "style='background-color: #f4a460'" : "style='background-color: #00ffff'"; ?>>
	<div class="tubuh">
		<div class="kepala">
			<div class="logo"><img src="logo.png" width="100%" height="100%"></div>
			<div class="judul">
				<font style="font-size: 28px; font-weight: bold;">Universitas Udayana</font><br>
				<font style="font-size: 16px; font-weight: bold;">Jalan Raya Kampus Unud, Jimbaran, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></font><br>
				<font style="font-size: 16px; font-weight: bold;">Badung, Bali | (0361) 701954</font>
			</div>
		</div>
		<div id="navbar">
			<nav>
				<ul>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="tentang.php">Tentang</a></li>
					<li><a href="profil.php">Profil</a></li>
					<li><a href="kontak.php">Kontak</a></li>
				</ul>
			</nav>
		</div>
		<img src="kampus.png" class="gambar_kampus">

		<div class="profil">
			<div class="foto">
				<img src="rektor.png" width="60%" class="img">
				<div class="nama">Prof. Dr. dr. A.A. Raka Sudewi, Sp.S (K)</div>
				<div class="nama">Rektor Universitas Udayana</div>
			</div>
		</div>
		<div class="profil">
			<div class="foto">
				<img src="biro_umum.jpg" width="60%" class="img">
				<div class="nama">Drs. Ketut Amoga Sidi</div><br>
				<div class="nama">Kepala Biro Umum</div>
			</div>
		</div>
		<div class="profil">
			<div class="foto">
				<img src="biro_akademik.jpg" width="60%" class="img">
				<div class="nama">Drs I Gusti Ngurah Indra Kecapa, M.Ed</div><br>
				<div class="nama">Kepala Biro Akademik</div>
			</div>
		</div>
		<div class="profil">
			<div class="foto">
				<img src="biro_keuangan.jpg" width="60%" class="img">
				<div class="nama">I Wayan Antara, SE., MM</div><br>
				<div class="nama">Kepala Biro Keuangan</div>
			</div>
		</div>
	</div>

</body>
</html>