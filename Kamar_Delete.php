<?php
include("koneksi.php");
$kodekamar = $_GET['kodekamar'];
$result = mysqli_query($mysqli, "DELETE FROM tabel_kamar WHERE
kodekamar = $kodekamar");
header("Location:Kamar.php");
?>
