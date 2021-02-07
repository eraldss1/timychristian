<?php
if (isset($_POST['masuk'])) {
  include('koneksi.php');

  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user'");
  $cek = mysqli_num_rows($login);
	$data = mysqli_fetch_assoc($login);
    if($cek > 0){
		if($data["password"]==$pass){
            session_start();
            $_SESSION['user'] = $data["username"];
			$_SESSION['nama'] = $data["nama"];
			$_SESSION['status'] = $data["status"];
            header("Location: index.php");
        }else{
			session_start();
			$_SESSION["error"] = "error";
            header("Location: masuk.php");
		}
	}else{
		session_start();
			$_SESSION["status"] = "notfound";
			$_SESSION["error"] = "";
            header("Location: masuk.php");
	}
  echo '<script>window.history.back()</script>';
}
?>