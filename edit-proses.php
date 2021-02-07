<?php
if (isset($_POST['edit'])) {
  include('koneksi.php');
  session_start();
  $user = $_SESSION['user'];
  $nama = $_POST['nama'];
  $pass = $_POST['pass'];
  $update = mysqli_query($koneksi, "UPDATE user SET nama='$nama', password='$pass' WHERE username='$user'") or die(mysqli_error($koneksi));

  if ($update) {
    echo '<h3>Data berhasil di update! ';
	$_SESSION['nama'] = $nama;
    echo '<a href="index.php">Kembali</a>';
  } else {
    echo 'Gagal menyimpan data! ';
    echo '<a href="edit.php">Kembali</a>';
  }
}else{
	echo '<script>window.history.back()</script>';
}
?>