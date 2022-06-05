<!DOCTYPE html>
<html>

<head>
    <title>Tambah Kamar - UAS </title>
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
        border: 2px solid#394939;
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
        padding: 0px 20px;
    }

    .table1 tr {
        background-color: #fbfbfb;
        height: 40px;
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
        background-color:#c9f5c9;
        height: 640px;
    }



    /*mulai dari sini tabel dalam */

    #form {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border-spacing: 10px;
        font-weight: bold;
        padding-top: 10px;
    }

    #submit-btn {
        background: #4CAF50;
        border: none;
        border-radius: 10px;
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bold;
        letter-spacing: 1px;
        height: 40px;
        width: 100px;
        margin-left: 2px;
        margin-top:8px;
    }

   
   

</style>

<body>
    <header>
    <?php
        function headeer() {
            echo "Daftar Kamar Rumah Sakit Harapan";
        }
        headeer();
        ?>
    </header>
    <content> 
    <div id="dokter">
        <table class="table1">
            <tr>
                <th>DATA KAMAR </th>
            </tr>
            <tr>
                <td>
                    <div id="namadokter">
                        <table class="table2">

                            <div id="form">
                                <form class="col-12" action="Kamar_Aksi.php" method="post" name="form">
                                    <div class="form-group">
                                        <label for="id">Kode Kamar</label>
                                        <input type="text" class="form-control" name="kodekamar">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama Kamar</label>
                                        <input type="text" class="form-control" name="namakamar">
                                        <div class="form-group">
                                            <label for="id">Nama Gedung</label>
                                            <input type="text" class="form-control" name="namagedung">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Status</label>
                                            <input type="text" class="form-control" name="status">
                                            <input id="submit-btn" type="submit" name="submit" value="TAMBAH" />
                                </form>
                            </div>


                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    </content>
    


</body>

</html>