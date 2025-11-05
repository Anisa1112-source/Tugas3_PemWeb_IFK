<?php
require 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM pendaftar WHERE id = $id");
$row = mysqli_fetch_assoc($data);

$minat_selected = explode(", ", $row['minat_topik']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Update Data Pendaftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f7f7f7;">

<!-- NAVBAR -->
<nav class="navbar navbar-light bg-white shadow-sm px-4 mb-4">
    <span class="navbar-brand mb-0 h4">Kabar Kampus</span>
    <a href="index.php" class="btn btn-danger">Kembali</a>
</nav>

<div class="container mt-3">
    <h2 class="fw-bold">Update Data</h2>
    <hr>

    <form action="dit_proses.php" method="POST" class="bg-white p-4 border rounded">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="nama" class="form-control mb-3" value="<?= $row['nama']; ?>" required>

        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control mb-3" value="<?= $row['email']; ?>" required>

        <label class="form-label">Nomor HP</label>
        <input type="text" name="no_hp" class="form-control mb-3" value="<?= $row['no_hp']; ?>" required>

        <label class="form-label">Jurusan</label>
        <select name="jurusan" class="form-select mb-3">
            <option <?= ($row['jurusan']=="Teknik Informatika")?"selected":"" ?>>Teknik Informatika</option>
            <option <?= ($row['jurusan']=="Sistem Informasi")?"selected":"" ?>>Sistem Informasi</option>
            <option <?= ($row['jurusan']=="Teknik Elektro")?"selected":"" ?>>Teknik Elektro</option>
            <option <?= ($row['jurusan']=="Manajemen")?"selected":"" ?>>Manajemen</option>
            <option <?= ($row['jurusan']=="Akuntansi")?"selected":"" ?>>Akuntansi</option>
            <option <?= ($row['jurusan']=="Ilmu Komunikasi")?"selected":"" ?>>Ilmu Komunikasi</option>
        </select>

        <label class="form-label">Minat Topik</label><br>
        <div class="mb-3">
            <?php
            $opsi = ["Event Kampus","Teknologi","Politik","Musik"];
            foreach($opsi as $item){
                $checked = in_array($item, $minat_selected) ? "checked" : "";
                echo "<label class='me-3'><input type='checkbox' name='minat_topik[]' value='$item' $checked> $item</label>";
            }
            ?>
        </div>

        <label class="form-label">Gender</label><br>
        <div class="mb-3">
            <label class="me-3"><input type="radio" name="gender" value="Laki-laki" <?= ($row['gender']=="Laki-laki")?"checked":"" ?>> Laki-laki</label>
            <label><input type="radio" name="gender" value="Perempuan" <?= ($row['gender']=="Perempuan")?"checked":"" ?>> Perempuan</label>
        </div>

        <label class="form-label">Alasan</label>
        <textarea name="alasan" class="form-control mb-3" required><?= $row['alasan']; ?></textarea>

        <button class="btn btn-primary">Update Data</button>
    </form>

</div>

</body>
</html>
