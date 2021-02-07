<!DOCTYPE html>
<html>
<?php
include 'koneksi.php';
session_start();
?>
<head>
  <title>Taman Teman</title>
</head>

<body>
  <h3>
    <p><a href="index.php">Beranda</a>
    </p>
    <p><a href="tambah.php">Daftar</a></p>
  </h3>
  <form action="masuk-proses.php" method="post">
    <table cellpadding="3" cellspacing="0">
      <tr>
        <td>UserName</td>
        <td>:</td>
        <td><input type="text" name="user" size="20" required></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="pass" size="20" required></td>
      </tr>
	  <?php
							if(isset($_SESSION["error"])){
								echo "<tr><td><label style='color:red;'>Username atau password anda salah!</label></td></tr>";
							}else if(isset($_SESSION["status"])){
								echo "<tr><td><label style='color:red;'>Username atau password anda salah!</label></td></tr>";
							}
						?>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td><input type="submit" name="masuk" value="Masuk"></td>
      </tr>
    </table>
  </form>
</body>

</html>