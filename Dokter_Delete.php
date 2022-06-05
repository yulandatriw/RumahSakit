<?php
include("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM tabel_dokter WHERE
id = $id");
header("Location:Dokter.php");
?>
