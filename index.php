<!DOCTYPE html>
<html>

<head>
	<title>Taman Teman</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="script1.js"></script>
</head>

<body>
	<header> 
		<h1>Taman Teman</h1>
		<p> Tanam nyaman, Harga? Amaaaaan!</p>
	</header>
	<ul>
		<li><a class="active">Beranda</a></li>
		<li><a>Tanaman</a></li>
		<li><a>Perlengkapan</a></li>
		<li ><a>Artikel</a></li>
		<li><a href="tentangkami.php">Tentang Kami</a></li>
		<?php 
						include 'koneksi.php';
						session_start();
						if(!isset($_SESSION['status'])){
							echo "<li style='float:right'><a href='tambah.php'>Daftar</a></li>";
							echo "<li style='float:right'><a href='masuk.php'>Masuk</a></li>";
						}else{
							echo "<li style='float:right'><a href='keluar.php'>Logout</a></li>";
							echo "<li style='float:right'><a href='edit.php'>".$_SESSION['nama']."</a></li>";
							if($_SESSION['status']=='admin') echo "<li style='float:right'><a href='akun.php'>Akun</a></li>";
						}
		?>
		
		
		<div class="searcher">
			<button>Cari</button>
			<input type="text" placeholder="Cari di sini...">
		</div>
	</ul>
	<div class="pageblock"><b>Tanaman</b></div>
	<div class="case">
		<div class="products">
		<img src="Pic/benih.jpg">
		<b>Benih</b>
		</div>
		<div class="products">
		<img src="Pic/tanamanhias.jpg">
		<b>Tanaman Hias</b>
		</div>
		<div class="products">
		<img src="Pic/tanamanbuah.png">
		<b>Tanaman Buah</b>
		</div>
		<div class="products">
		<img src="Pic/tanamanlain.jpg">
		<b>Tanaman Lainnya</b>
		</div>
		<button>Lihat Selengkapnya</button>
	</div>
	<div class="pageblock"><b>Perlengkapan</b></div>
	<div class="case">
		<div class="products">
		<img src="Pic/mediatanam.jpg">
		<b>Media Tanam</b>
		</div>
		<div class="products">
		<img src="Pic/peralatanberkebun.jpg">
		<b>Peralatan Berkebun</b>
		</div>
		<div class="products">
		<img src="Pic/pupuk.jpg">
		<b>Pupuk</b>
		</div>
		<div class="products">
		<img src="Pic/peralatanlain.jpg">
		<b>Peralatan Lainnya</b>
		</div>
		<button>Lihat Selengkapnya</button>
	</div>
	<div class="pageblock"><b>Tentang Kami</b></div>
	<div class="case">
		<p>Kami adalah toko yang mengutamakan pembeli kami, dengan harga yang lebih murah dibanding dengan pesaing, 
			pembelian yang sangat mudah dilakukan, dan artikel-artikel berkebun yang bermanfaat bagi berbagai tingkat
			kemampuan berkebun pembeli mulai dari pemula hingga yang mahir.</p>
		<button onclick="location.href='tentangkami.php'">Lihat Selengkapnya</button>
	</div>
	<footer>
		Copyright 2020 © Taman Teman
	</footer>
</body>

</html>