<?php
if (isset($_POST['tambah'])) {
  include('koneksi.php');

  $user = $_POST['user'];
  $nama = $_POST['nama'];
  $pass = $_POST['pass'];
	$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user'");
	$cek = mysqli_num_rows($login);
	$data = mysqli_fetch_assoc($login);
    if($cek > 0){
		echo '<p> User sudah ada</p>';
		echo '<a href="tambah.php">Kembali</a>';
	}else{
	$input = mysqli_query($koneksi, "INSERT INTO user VALUES ('$user', '$nama', '$pass', 'user')") or die(mysqli_error($koneksi));
		if ($input) {
			echo 'Berhasil Daftar! ';
			echo '<a href="index.php">Kembali</a>';
		} else {
			echo 'Gagal Daftar! ';
			echo '<a href="tambah.php">Kembali</a>';
		}
	}
} else {
  echo '<script>window.history.back()</script>';
}
?>