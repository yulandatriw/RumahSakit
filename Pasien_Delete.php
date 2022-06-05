<?php
include("koneksi.php");
$noregistrasi = $_GET['noregistrasi'];
$result = mysqli_query($mysqli, "DELETE FROM tabel_pasien WHERE
noregistrasi = $noregistrasi");
header("Location:Pasien.php");
?>
