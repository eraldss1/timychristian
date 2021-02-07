<!DOCTYPE html>
<html>

<head>
  <title>Taman Teman</title>
</head>

<body>
  <h3>
    <p><a href="index.php">Beranda</a>
    </p>
    <table cellpadding="5" cellspacing="0" border="1">
      <tr bgcolor="#CCCCCC">
        <th>No.</th>
        <th>Username</th>
        <th>Nama</th>
        <th>Status</th>
		<th>Aksi</th>
      </tr>

      <?php
      include('koneksi.php');
      $query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY username DESC") or die(mysqli_error($koneksi));

      if (mysqli_num_rows($query) == 0) {
        echo '<tr align="center"><td colspan="5">Tidak ada data!</td></tr>';
      } else {
        $no = 1;
        while ($data = mysqli_fetch_assoc($query)) {
          echo '<tr>';
          echo '<td>' . $no . '</td>';
          echo '<td>' . $data['username'] . '</td>';
          echo '<td>' . $data['nama'] . '</td>';
          echo '<td>' . $data['status'] . '</td>';
		  echo '<td>';
          if($data['status']=='user')echo '<a href="admin.php?id=' . $data['username'] . '"> Jadikan Admin </a>';
		  else echo '<a href="unadmin.php?id=' . $data['username'] . '"> Jadikan User </a>';
		  echo '<a href="hapus.php?id=' . $data['username'] . '"> Hapus </a>';
		  echo '</td>';
          echo '</tr>';
          $no++;
        }
      }
      ?>
    </table>
  </h3>
</body>

</html>