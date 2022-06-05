<?php
include("koneksi.php");?>

<?php
if (isset($_POST['update1'])) {
 $id = mysqli_real_escape_string($mysqli, $_POST['id']);
 $namadokter = mysqli_real_escape_string($mysqli, $_POST['namadokter']);
 $nohp = mysqli_real_escape_string($mysqli, $_POST['nohp']);
 $spesialis = mysqli_real_escape_string($mysqli, $_POST['spesialis']);
 $jadwal = mysqli_real_escape_string($mysqli, $_POST['jadwal']);

//updating the table
 $result = mysqli_query(
 $mysqli,
 "UPDATE tabel_dokter SET namadokter='$namadokter',
nohp='$nohp', spesialis='$spesialis', jadwal='$jadwal' WHERE id='$id'");

 //redirectig to the display page. In our case, it is index.php
 header("Location: Dokter.php");
 }

?>
