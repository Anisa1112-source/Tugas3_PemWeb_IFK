<?php
require 'koneksi.php';
$data = mysqli_query($koneksi, "select id, nama, email, gender FROM pendaftar ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Dashboard Pendaftaran</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body style="background:#f7f7f7;">
<nav class="navbar navbar-light bg-white shadow-sm px-4">
    <span class="navbar-brand mb-0 h4">Kabar Kampus</span>
    <a href="form.php" class="btn btn-success">Form Registrasi</a>
</nav>

<div class="container mt-4">
    <h2 class="fw-bold">Dashboard Pendaftaran</h2>
    <hr>

    <table class="table table-bordered align-middle mt-3">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php if(mysqli_num_rows($data) > 0){ ?>
            <?php while($row = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['gender']) ?></td>
                    <td>
                        <a href="detail.php?id=<?= intval($row['id']) ?>" class="btn btn-sm btn-primary">Detail</a>
                        <a href="edit.php?id=<?= intval($row['id']) ?>" class="btn btn-sm btn-warning">Update</a>
                        <a href="hapus.php?id=<?= intval($row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="5" class="text-center">Tidak ada data</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
