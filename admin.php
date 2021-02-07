<?php
if (isset($_GET['id'])) {
  include('koneksi.php');
  $id = $_GET['id'];
  $test = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$id'");
  $numrow = mysqli_num_rows($test);
  if($numrow==0){
	  echo '<script>window.history.back()</script>';
  }else{
	  $del = mysqli_query($koneksi, "UPDATE user SET status='admin' WHERE username='$id'");
	  if($del){
		  $_SESSION['status'] = 'akun';
			header("Location: akun.php");
		} else {
			echo 'Gagal menghapus data! ';
			echo '<a href="akun.php">Kembali</a>';
		}
  }
} else {
  echo '<script>window.history.back()</script>';
}
?>