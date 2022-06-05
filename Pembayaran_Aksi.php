
<?php
include("koneksi.php");?>


<?php

if(isset($_POST['pembayaransubmit'])) 
{
    $harga = 0;
    $hargakamar = 0;
    $noregis = mysqli_real_escape_string($mysqli, $_POST['noregis']);
    $namapasien = mysqli_real_escape_string($mysqli, $_POST['namapasien']);
    $sakit = mysqli_real_escape_string($mysqli, $_POST['sakit']);
    $spesialis = mysqli_real_escape_string($mysqli, $_POST['spesialis']);
    if ($spesialis == 'Kandungan') {
        $harga = 500000; 
    }
    if ($spesialis == 'THT'){
        $harga = 350000;
    }
    if ($spesialis == 'Kulit') {
        $harga = 450000;
    }
    if ($spesialis == 'Umum') {
        $harga = 150000;
    }
    $tgldaftar = mysqli_real_escape_string($mysqli, $_POST['tgldaftar']);
    $tglkeluar = mysqli_real_escape_string($mysqli, $_POST['tglkeluar']);
    $jenisrawat = mysqli_real_escape_string($mysqli, $_POST['jenisrawat']);
    $kamar = mysqli_real_escape_string($mysqli, $_POST['kamar']); 
                        
    if($kamar=='Mawar'){
        $hargakamar = 300000;

    }
    if($kamar=='Melati'){
        $hargakamar = 400000;
        
    }
    if($kamar=='Anggrek'){
        $hargakamar = 500000;
        
    }
    if($kamar=='Cendana'){
        $hargakamar = 600000;
    }

    $awal = new DateTime($tgldaftar);
    $akhir = new DateTime ($tglkeluar);
    $selisih = $akhir->diff($awal)->days+1;
    $totalbayar1 = $selisih*$hargakamar;
    $totalbayar2 = $selisih*$harga;
    $harga = $totalbayar1+$totalbayar2;
    
    $result = mysqli_query($mysqli, "INSERT INTO tabel_pembayaran (noregis, namapasien, sakit, spesialis, tgldaftar, tglkeluar, jenisrawat, kamar, harga)
    VALUES('$noregis','$namapasien','$sakit', '$spesialis', '$tgldaftar', '$tglkeluar', '$jenisrawat', '$kamar', $harga)");

    if (!$result) {
        die('SQL Error: ' . mysqli_error($mysqli));
        echo 'test';
    }
    //display success message
    echo "<script>alert('Data Pembayaran Berhasil Ditambahkan');window.location='Pembayaran.php'</script>"; 

}
 



?>

