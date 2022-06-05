<?php
include("koneksi.php");?>

<?php
if(isset($_POST['yaallah'])) {
 $id = mysqli_real_escape_string($mysqli, $_POST['id']);
 $namadokter = mysqli_real_escape_string($mysqli, $_POST['namadokter']);
 $nohp = mysqli_real_escape_string($mysqli, $_POST['nohp']);
 $spesialis = mysqli_real_escape_string($mysqli, $_POST['spesialis']);
 $jadwal = mysqli_real_escape_string($mysqli, $_POST['jadwal']); 


 //insert data to database
 $result = mysqli_query($mysqli, "INSERT INTO
tabel_dokter (id, namadokter, nohp, spesialis, jadwal)
VALUES('$id','$namadokter','$nohp','$spesialis', '$jadwal')"); 


 //display success message
 echo "<script>alert('Data Dokter Berhasil Ditambahkan');window.location='Dokter.php'</script>"; 
}
 

?>