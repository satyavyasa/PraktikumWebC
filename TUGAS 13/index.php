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
	<title>Home | Universitas Udayana</title>
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
		<div class="pembukaan">
			<font style="font-size: 22px; font-weight: bold;">Selamat Datang</font><br>
			<p>Selamat datang <?= $nama; ?> di website Universitas Udayana. Website ini mengandung informasi tentang Universitas Udayana</p>
			<p>(Anda Login Sebagai : <?= $type; ?>)</p>
		</div><br><br>

		<div class="pembukaan">
			<font style="font-size: 22px; font-weight: bold;">Visi</font><br>
			<p>Terwujudnya perguruan tinggi yang unggul, mandiri, dan berbudaya</p>
		</div><br><br>

		<div class="misi">
			<font style="font-size: 22px; font-weight: bold;">Misi</font>
			<ul>
				<li>Menyelenggarakan pendidikan tinggi yang bermutu dan menghasilkan lulusan yang memiliki moral/etika/akhlak dan integritas yang tinggi sesuai dengan tuntutan masyarakat lokal, nasional, dan internasional</li>
				<li>Mengembangkan penelitian dan pengabdian kepada masyarakat sesuai dengan kepentingan masyarakat dan bangsa</li>
				<li>Memberdayakan Unud sebagai lembaga yang menghasilkan dan mengembangkan pengetahuan, teknologi, dan budaya yang dapat dimanfaatkan untuk kesejahteraan masyarakat</li>
				<li>Menghasilkan karya inovatif dan prospektif bagi kemajuan Unud serta perekonomian nasional</li>
			</ul><br><br>

			<div class="misi">
			<font style="font-size: 22px; font-weight: bold;">Tujuan</font>
			<ul>
				<li>Menghasilkan lulusan bermutu yang memiliki kompetensi tinggi dalam penguasaan ilmu pengetahuan, teknologi, dan seni</li>
				<li>Meningkatkan kapasitas Unud dalam memberikan akses pelayanan pendidikan kepada masyarakat</li>
				<li>Mengembangkan tata kelola Unud yang sehat melalui optimalisasi peran organ organisasi sesuai dengan prinsip badan layanan umum</li>
				<li>Menjalin kerja sama di berbagai bidang untuk meningkatkan mutu tridharma perguruan tinggi</li>
				<li>Menghasilkan penelitian yang bermutu, relevan, dan berdaya saing sesuai dengan perkembangan ilmu pengetahuan, teknologi, dan seni</li>
				<li>Menghasilkan publikasi ilmiah nasional, internasional, dan kekayaan intelektual untuk kepentingan masyarakat</li>
			</ul>
		</div>
	</div>	

</body>
</html>