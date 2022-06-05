<?php
include("koneksi.php");?>

<?php
if(isset($_POST['submitpasien'])) {
 $noregistrasi = mysqli_real_escape_string($mysqli, $_POST['noregistrasi']);
 $namapasien = mysqli_real_escape_string($mysqli, $_POST['namapasien']);
 $sakit = mysqli_real_escape_string($mysqli, $_POST['sakit']);
 $tgldaftar = mysqli_real_escape_string($mysqli, $_POST['tgldaftar']);
 $jenisrawat = mysqli_real_escape_string($mysqli, $_POST['jenisrawat']);
 $kamar = mysqli_real_escape_string($mysqli, $_POST['kamar']); 


 //insert data to database
 $result = mysqli_query($mysqli, "INSERT INTO
tabel_pasien (noregistrasi, namapasien, sakit, tgldaftar, jenisrawat, kamar)
VALUES('$noregistrasi','$namapasien','$sakit','$tgldaftar', '$jenisrawat', '$kamar')"); 


 //display success message
 echo "<script>alert('Data Pasien Berhasil Ditambahkan');window.location='Pasien.php'</script>"; 
}
 

?>