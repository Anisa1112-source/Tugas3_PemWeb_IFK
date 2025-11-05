<?php
require 'koneksi.php';

$nama       = $_POST['nama'];
$email      = $_POST['email'];
$no_hp      = $_POST['no_hp'];
$password   = $_POST['password'];
$jurusan    = $_POST['jurusan'];
$minat_topik = isset($_POST['minat_topik']) ? implode(", ", $_POST['minat_topik']) : "-";
$gender     = $_POST['gender'];
$alasan     = $_POST['alasan'];

$query = "INSERT INTO pendaftar (nama, email, no_hp, password, jurusan, minat_topik, gender, alasan)
          VALUES ('$nama', '$email', '$no_hp', '$password', '$jurusan', '$minat_topik', '$gender', '$alasan')";

mysqli_query($koneksi, $query);

header("Location: index.php");
exit();
?>
