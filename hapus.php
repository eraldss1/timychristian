<?php
if (isset($_GET['id'])) {
  include('koneksi.php');
  $id = $_GET['id'];
  $test = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$id'");
  $numrow = mysqli_num_rows($test);
  if($numrow==0){
	  echo '<script>window.history.back()</script>';
  }else{
	  $del = mysqli_query($koneksi, "DELETE FROM user WHERE username='$id'");
	  if($del){
		    echo '<h3>Data berhasil dihapus! ';
			echo '<a href="index.php">Beranda</a>';
			echo '<a href="akun.php">Akun</a>';
		} else {
			echo 'Gagal menghapus data! ';
			echo '<a href="index.php">Kembali</a>';
		}
	}
	// Tambah komen
} else {
  echo '<script>window.history.back()</script>';
}
?>