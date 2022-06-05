<?php
include("koneksi.php");?>

<?php
if (isset($_POST['submitpembayaran'])) {
    $noregis = mysqli_real_escape_string($mysqli, $_POST['noregis']);
    $namapasien = mysqli_real_escape_string($mysqli, $_POST['namapasien']);
    $sakit = mysqli_real_escape_string($mysqli, $_POST['sakit']);
    $spesialis = mysqli_real_escape_string($mysqli, $_POST['spesialis']);
    $tgldaftar = mysqli_real_escape_string($mysqli, $_POST['tgldaftar']);
    $tglkeluar = mysqli_real_escape_string($mysqli, $_POST['tglkeluar']);
    $jenisrawat = mysqli_real_escape_string($mysqli, $_POST['jenisrawat']);
    $kamar = mysqli_real_escape_string($mysqli, $_POST['kamar']); 

//updating the table
 $result = mysqli_query(
 $mysqli,
 "UPDATE tabel_pembayaran SET namapasien='$namapasien', sakit='$sakit', spesialis='$spesialis', tgldaftar='$tgldaftar', tglkeluar='$tglkeluar', jenisrawat='$jenisrawat', kamar='$kamar' WHERE noregis='$noregis'");

 //redirectig to the display page. In our case, it is index.php
 header("Location: Pembayaran.php");
 }

?>
