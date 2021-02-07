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
    <p><a href="index.php">Beranda</a></p>
  </h3>
  <form action="edit-proses.php" method="post">
    <table cellpadding="3" cellspacing="0">
      <tr>
        <td>Username</td>
        <td>:</td>
        <?php echo"<td>".$_SESSION['user']."</td>";?>
      </tr>
	  <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" size="30" required></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="pass" size="20" required></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td><input type="submit" name="edit" value="edit"></td>
      </tr>
    </table>
  </form>
</body>

</html>