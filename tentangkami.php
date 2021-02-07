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
		<li><a  href="index.php">Beranda</a></li>
		<li><a>Tanaman</a></li>
		<li><a>Perlengkapan</a></li>
		<li><a>Artikel</a></li>
		<li><a class="active">Tentang Kami</a></li>
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
	
	
	<div class="pageblock">Tentang Kami</div>
	<div class="case">
		<img src="Pic/pembuat.png" style="margin:auto;width:50%;display:block">
		<p style="font-size:20px">
		Kami adalah Taman Teman, toko yang mengutamakan pembeli kami. Dengan harga yang lebih murah dibanding dengan pesaing, 
			pembelian yang sangat mudah dilakukan, bahan dan peralatan berkebun yang berkualitas tinggi, dan artikel-artikel 
			berkebun yang bermanfaat bagi berbagai tingkat kemampuan berkebun pembeli mulai dari pemula hingga yang mahir.
		</p>
	</div>
	
	<div class="pageblock">Admin</div>
	<div class="case">
		<?php
		$query = mysqli_query($koneksi, "SELECT * FROM user WHERE status='admin'") or die(mysqli_error($koneksi));
		while ($data = mysqli_fetch_assoc($query)) {
			echo '<div class="products">';
			echo '<img src="ProfilePic/'.$data["username"].'.jpg" onerror=this.src="ProfilePic/unknown.jpg">';
			echo '<b>'.$data["nama"].'</b>';
			echo '</div>';
		}
		?>
	</div>
	<footer>
		Copyright 2020 © Taman Teman
	</footer>
</body>

</html>