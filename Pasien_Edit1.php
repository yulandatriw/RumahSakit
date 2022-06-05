<?php
include("koneksi.php");?>

<?php
if (isset($_POST['submitpasien1'])) {
 $noregistrasi = mysqli_real_escape_string($mysqli, $_POST['noregistrasi']);
 $namapasien = mysqli_real_escape_string($mysqli, $_POST['namapasien']);
 $sakit = mysqli_real_escape_string($mysqli, $_POST['sakit']);
 $tgldaftar = mysqli_real_escape_string($mysqli, $_POST['tgldaftar']);
 /*$tglkeluar = mysqli_real_escape_string($mysqli, $_POST['tglkeluar']);*/
 $jenisrawat = mysqli_real_escape_string($mysqli, $_POST['jenisrawat']);
 $kamar = mysqli_real_escape_string($mysqli, $_POST['kamar']);

//updating the table
 $result = mysqli_query(
 $mysqli,
 "UPDATE tabel_pasien SET namapasien='$namapasien', sakit='$sakit', tgldaftar='$tgldaftar', /*tglkeluar='$tglkeluar' ,*/ jenisrawat='$jenisrawat', kamar='$kamar' WHERE noregistrasi='$noregistrasi'");

 //redirectig to the display page. In our case, it is index.php
 header("Location: Pasien.php");
 }

?>
