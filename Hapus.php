<?php
require 'koneksi.php';
$id = intval($_GET['id'] ?? 0);

if($id > 0){
    mysqli_query($koneksi, "DELETE FROM pendaftar WHERE id = $id");
}

header("Location: index.php");
exit();
?>
