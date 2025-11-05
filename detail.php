<?php
require 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM pendaftar WHERE id = $id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Data Pendaftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f8f9fa;">

<nav class="navbar navbar-light bg-white shadow-sm px-4 mb-4">
    <span class="navbar-brand mb-0 h4">Kabar Kampus</span>
    <a href="index.php" class="btn btn-danger">Kembali</a>
</nav>

<div class="container">
    <h2 class="fw-bold mb-3">Detail Data Pendaftar</h2>
    <hr>

    <table class="table table-bordered bg-white">
        <tr><th>Nama</th><td><?= $row['nama']; ?></td></tr>
        <tr><th>Email</th><td><?= $row['email']; ?></td></tr>
        <tr><th>No HP</th><td><?= $row['no_hp']; ?></td></tr>
        <tr><th>Jurusan</th><td><?= $row['jurusan']; ?></td></tr>
        <tr><th>Minat Topik</th>
            <td>
                <?= ($row['minat_topik'] != "" && $row['minat_topik'] != "-") ? $row['minat_topik']."." : "-"; ?>
            </td>
        </tr>
        <tr><th>Gender</th><td><?= $row['gender']; ?></td></tr>
        <tr><th>Alasan</th><td><?= $row['alasan']; ?></td></tr>
    </table>
    <div class="text-center mt-4">
      <a href="index.php" class="btn btn-dark px-4">Kembali ke Dashboard</a>
    </div>
  </div>
</div>

</body>
</html>
