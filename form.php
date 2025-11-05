
<?php 
require "koneksi.php"


?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran - Kabar Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e8e8e8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: #f0f0f0;
            border-bottom: 3px solid #999;
            padding: 1.2rem 0;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.3rem;
            color: #000;
        }
        .btn-back {
            background-color: #dc3545;
            color: white;
            padding: 0.5rem 1.2rem;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.95rem;
            border: none;
        }
        .btn-back:hover {
            background-color: #c82333;
            color: white;
        }
        .form-container {
            background: white;
            margin: 2rem auto;
            padding: 3rem 4rem;
            max-width: 650px;
            border: 3px solid #999;
        }
        .form-title {
            text-align: center;
            font-size: 1.8rem;
            font-weight: normal;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #ddd;
            color: #000;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-label {
            display: block;
            font-weight: normal;
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }
        .form-control, .form-select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 0.9rem;
        }
        .form-control:focus, .form-select:focus {
            outline: none;
            border-color: #007bff;
        }
        .checkbox-label {
            display: block;
            font-weight: normal;
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }
        .checkbox-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.5rem;
        }
        .checkbox-item {
            display: flex;
            align-items: center;
        }
        .checkbox-item input[type="checkbox"] {
            margin-right: 0.5rem;
        }
        .checkbox-item label {
            font-weight: normal;
            margin: 0;
            font-size: 0.9rem;
        }
        .radio-group {
            display: flex;
            gap: 2rem;
        }
        .radio-item {
            display: flex;
            align-items: center;
        }
        .radio-item input[type="radio"] {
            margin-right: 0.5rem;
        }
        .radio-item label {
            font-weight: normal;
            margin: 0;
            font-size: 0.9rem;
        }
        textarea.form-control {
            resize: vertical;
            min-height: 80px;
        }
        .form-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
            padding: 0.6rem 2rem;
            border: none;
            border-radius: 4px;
            font-size: 0.95rem;
            cursor: pointer;
            flex: 1;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .btn-reset {
            background-color: #dc3545;
            color: white;
            padding: 0.6rem 2rem;
            border: none;
            border-radius: 4px;
            font-size: 0.95rem;
            cursor: pointer;
        }
        .btn-reset:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Kabar Kampus</a>
            <a href="index.php" class="btn-back">Kembali</a>
        </div>
    </nav>

    <!-- Form Container -->
    <div class="form-container">
        <h2 class="form-title">Formulir Pendaftaran Akun</h2>
        
        <form action="Tambah.php" method="POST">
            

            <!-- Row 1: Nama Lengkap dan Alamat Email -->
            <div class="form-row">
                <div class="form-group">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama Anda">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="contoh@email.com">
                </div>
            </div>

            <!-- Row 2: Nomor Telepon dan Password -->
            <div class="form-row">
                <div class="form-group">
                    <label for="telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="08xxxxxxxxxx">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password Akun</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>

            <!-- Jurusan -->
            <div class="form-group">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" id="jurusan" name="jurusan">
                    <option value="">Pilih Jurusan ...</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                </select>
            </div>

            <!-- Minat Topik -->
            <div class="form-group">
                <label class="checkbox-label">Minat Topik (Bisa pilih lebih dari satu)</label>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="checkbox" id="event" name="minat" value="Event Kampus">
                        <label for="event">Event Kampus</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="teknologi" name="minat" value="Teknologi">
                        <label for="teknologi">Teknologi</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="politik" name="minat" value="Politik">
                        <label for="politik">Politik</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="musik" name="minat" value="Musik">
                        <label for="musik">Musik</label>
                    </div>
                </div>
            </div>

            <!-- Gender -->
            <div class="form-group">
                <label class="form-label">Gender</label>
                <div class="radio-group">
                    <div class="radio-item">
                        <input type="radio" id="lakiLaki" name="gender" value="Laki-laki">
                        <label for="lakiLaki">Laki-laki</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" id="perempuan" name="gender" value="Perempuan">
                        <label for="perempuan">Perempuan</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" id="lainnya" name="gender" value="Lainnya">
                        <label for="lainnya">Lainnya</label>
                    </div>
                </div>
            </div>

            <!-- Alasan -->
            <div class="form-group">
                <label for="alasan" class="form-label">Alasan Bergabung</label>
                <textarea class="form-control" id="alasan" name="alasan" rows="4"></textarea>
            </div>

            <!-- Buttons -->
            <div class="form-buttons">
                <button type="submit" class="btn-submit">Daftar Sekarang</button>
                <button type="reset" class="btn-reset">Reset</button>
            </div>
        </form>
    </div>

    <!-- Javascript Validasi -->
    <script>
        function validateForm(event) {
            event.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (email.trim() === '') {
                alert('Alamat Email tidak boleh kosong!');
                return false;
            }
            
            if (password.length < 8) {
                alert('Password harus terdiri dari minimal 8 karakter.');
                return false;
            }
            
            alert('Pendaftaran berhasil! Terima kasih.');
            document.getElementById('registrationForm').reset();
            return false;
        }
    </script>
</body>
</html>
