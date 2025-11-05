<?php
include "koneksi.php";

// ambil id dari URL
$id = $_GET['id'];

// ambil data berdasarkan id
$query = mysqli_query($koneksi, "SELECT * FROM pendaftar WHERE id='$id'");
$data = mysqli_fetch_array($query);

// pisahkan minat topik ke array
$minat = explode(", ", $data['minat_topik']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kabar Kampus | Update Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .form-label {
      font-weight: 500;
    }
    h2 {
      font-weight: 600;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light shadow-sm px-4">
    <span class="navbar-brand mb-0 h1">Kabar Kampus</span>
    <a href="index.php" class="btn btn-danger">Kembali</a>
  </nav>

  <!-- Container -->
  <div class="container mt-5">
    <div class="card mx-auto p-4" style="max-width: 900px;">
      <h2 class="text-center mb-4">Update Data</h2>
      <hr>

      <form action="proses_update.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <div class="row g-4">
          <!-- Nama Lengkap -->
          <div class="col-md-6">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
          </div>

          <!-- Email -->
          <div class="col-md-6">
            <label class="form-label">Alamat Email</label>
            <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>" required>
          </div>

          <!-- Nomor Telepon -->
          <div class="col-md-6">
            <label class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="telepon" value="<?= $data['telepon'] ?>" required>
          </div>

          <!-- Password -->
          <div class="col-md-6">
            <label class="form-label">Password Akun</label>
            <input type="password" class="form-control" name="password" value="<?= $data['password'] ?>" required>
          </div>

          <!-- Jurusan -->
          <div class="col-md-6">
            <label class="form-label">Jurusan</label>
            <select name="jurusan" class="form-select">
              <option value="Informatika" <?= ($data['jurusan'] == 'Informatika') ? 'selected' : '' ?>>Informatika</option>
              <option value="Sistem Informasi" <?= ($data['jurusan'] == 'Sistem Informasi') ? 'selected' : '' ?>>Sistem Informasi</option>
            </select>
          </div>

          <!-- Minat Topik -->
          <div class="col-md-6">
            <label class="form-label">Minat Topik (Bisa pilih lebih dari satu)</label><br>
            <?php
              $topik = ['Event Kampus', 'Teknologi', 'Politik', 'Musik'];
              foreach ($topik as $t) {
                $checked = in_array($t, $minat) ? 'checked' : '';
                echo "<div class='form-check form-check-inline'>
                        <input class='form-check-input' type='checkbox' name='minat[]' value='$t' $checked>
                        <label class='form-check-label'>$t</label>
                      </div>";
              }
            ?>
          </div>

          <!-- Gender -->
          <div class="col-md-6">
            <label class="form-label">Gender</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="Laki-laki" <?= ($data['gender'] == 'Laki-laki') ? 'checked' : '' ?>>
              <label class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="Perempuan" <?= ($data['gender'] == 'Perempuan') ? 'checked' : '' ?>>
              <label class="form-check-label">Perempuan</label>
            </div>
          </div>

          <!-- Alasan Bergabung -->
          <div class="col-md-12">
            <label class="form-label">Alasan Bergabung</label>
            <textarea name="alasan" class="form-control" rows="3"><?= $data['alasan'] ?></textarea>
          </div>
        </div>

        <!-- Tombol -->
        <div class="text-center mt-4">
          <button type="submit" class="btn btn-primary px-5">Update Data</button>
          <button type="reset" class="btn btn-danger px-5">Reset</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
