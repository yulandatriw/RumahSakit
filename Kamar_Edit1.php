<?php
include("koneksi.php");?>

<?php
if (isset($_POST['submitkamar1'])) {
 $kodekamar = mysqli_real_escape_string($mysqli, $_POST['kodekamar']);
 $namakamar = mysqli_real_escape_string($mysqli, $_POST['namakamar']);
 $namagedung = mysqli_real_escape_string($mysqli, $_POST['namagedung']);
 $status = mysqli_real_escape_string($mysqli, $_POST['status']);

//updating the table
 $result = mysqli_query(
 $mysqli,
 "UPDATE tabel_kamar SET namakamar='$namakamar', namagedung='$namagedung', status='$status' WHERE kodekamar='$kodekamar'");

 //redirectig to the display page. In our case, it is index.php
 header("Location: Kamar.php");
 }

?>
