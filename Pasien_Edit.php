<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM tabel_pasien ORDER BY
noregistrasi ASC"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pasien Edit - UAS </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<style>
    * {
        margin: 0px;
    }

    .table1 {
        font-family: Arial;
        color: rgb(0, 0, 0);
        border-collapse: collapse;
        border: 3px solid#394939
    }

    .table1 tr th {
        background: #394939;
        color: #fff;
        font-weight: normal;
        text-align: left;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bold;
    }

    .table1,
    th,
    td {
        padding: 8px 20px;
    }

    .table1 tr {
        background-color: #fbfbfb;
        height: 40px;
    }

    section {
        display: flex;
        justify-content: center;
    }

    #dokter>.table1 {
        width: 500px;
        height:80px;
        margin-top: 10px;
        margin-left: 420px;
    }

    header {
        width: 100%;
        height: 60px;
        background-color: #4caf50;
        color: white;
        font-size: 27px;
        text-align: center;
        font-weight: bold;
        line-height: 50px;
    }

    body {
        background-color: #c9f5c9;
        height: 640px;
    }

    button {
        background-color: rgb(49, 142, 204);
        border: 0px;
        width: 200;
        height: 38px;
        border-radius: 5px;
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }


    /*mulai dari sini tabel dalam */

    #namadokter>.table2 {
        font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 100%;
        border: 1px solid rgb(233, 181, 113);
    }

    .table2 tr th {
        background: white;
        color: black;
        font-weight: bold;
        text-align: center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border: 1px solid rgb(233, 181, 113);

    }

    .table2 tr td {
        text-align: left;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border: 2px;
        color: black;
        border: 1px solid rgb(233, 181, 113);

    }

    .table2 th td {
        border: 1px solid gainsboro;
        padding: 10px;
    }

    .table2 tr:nth-child(2n+0) {
        background-color: rgb(231, 194, 144);
    }

    #form {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border-spacing: 10px;
        font-weight: bold;
        padding-top: 10px;
    }

    #submit-btn {
        background: #4CAF50;
        border: none;
        border-radius: 7px;
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bold;
        letter-spacing: 1px;
        height: 40px;
        width: 100px;
        margin-left: 2px;
        margin-top:4px;
    }
    
</style>

<body>
    <header>
        <?php
        function headeer() {
            echo "Daftar Pasien Rumah Sakit Harapan";
        }
        headeer();
        ?>
    </header>
    <!--<section> -->
    <div id="dokter">
        <table class="table1">
            <tr>
                <th>FORM UPDATE PASIEN </th>
            </tr>
            <tr>
                <td>
                    <div id="namadokter">
                        <table class="table2">
                        
                            <div id="form">
                            <?php
                            //getting id from url
                            $noregistrasi = $_GET['noregistrasi'];

                            $result = mysqli_query($mysqli, "SELECT * FROM tabel_pasien WHERE
                            noregistrasi = '$noregistrasi'");

                            while($res = mysqli_fetch_array($result)) { 
                            $namapasien = $res['namapasien'];
                            $sakit = $res['sakit'];
                            $tgldaftar = $res['tgldaftar'];
                            //$tglkeluar = $res['tglkeluar'];
                            $jenisrawat = $res['jenisrawat'];
                            $kamar = $res['kamar'];
                            }
                            
                            
                            ?>
                                <div id="form">
                                <form class="col-12" action="Pasien_Edit1.php" method="post" name="form">
                                    <div class="form-group">
                                        <label for="id">No Registrasi</label>
                                        <input type="text" class="form-control" name="noregistrasi" value="<?php echo $noregistrasi;?>">
                                    
                                    <div class="form-group">
                                        <label for="name">Nama Pasien</label>
                                        <input type="text" class="form-control" name="namapasien" value="<?php echo $namapasien;?>">
                                    
                                        <div class="form-group">
                                            <label for="id">Sakit</label>
                                            <input type="text" class="form-control" name="sakit" value="<?php echo $sakit;?>">
                                        
                                        <div class="form-group">
                                            <label for="name">Tanggal Daftar</label>
                                            <input type="date" class="form-control" name="tgldaftar" value="<?php echo $tgldaftar;?>">
                                        
                                            <div class="form-group">
                                                <label for="id">Jenis Rawat</label>
                                                <input type="text" class="form-control" name="jenisrawat" value="<?php echo $jenisrawat;?>">
                                    
                                                
                                            <div class="form-group">
                                                <label for="id">Kamar</label>
                                                <select name="kamar" class="form-control" value="<?php echo $kamar;?>">
                                                    <option> -  </option>
                                                    <option> Melati </option>
                                                    <option> Mawar </option>
                                                    <option> Anggrek </option>
                                                    <option> Cendana </option>
                                                </select>
                                                
                                            
                                            <input id="submit-btn" type="submit" name="submitpasien1" value="SIMPAN" />
                                </form>
                            </div>

                            </div>


                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    </section>



</body>

</html>