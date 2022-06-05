<?php
include("koneksi.php");
$noregis = $_GET['noregis'];
$result = mysqli_query($mysqli, "DELETE FROM tabel_pembayaran WHERE
noregis = $noregis");
header("Location:Pembayaran.php");
?>
