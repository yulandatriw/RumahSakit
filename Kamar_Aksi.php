<?php
include("koneksi.php");?>

<?php
if(isset($_POST['submit'])) {
 $kodekamar = mysqli_real_escape_string($mysqli, $_POST['kodekamar']);
 $namakamar = mysqli_real_escape_string($mysqli, $_POST['namakamar']);
 $namagedung = mysqli_real_escape_string($mysqli, $_POST['namagedung']);
 $status = mysqli_real_escape_string($mysqli, $_POST['status']);

 

 //insert data to database
 $result = mysqli_query($mysqli, "INSERT INTO
tabel_kamar(kodekamar, namakamar, namagedung, status)
VALUES('$kodekamar','$namakamar','$namagedung', '$status')");

 ///display success message
 echo "<script>alert('Data Kamar Berhasil Ditambahkan');window.location='Kamar.php'</script>"; 

}
 
?>