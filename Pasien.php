
<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM tabel_pasien ORDER BY
noregistrasi ASC"); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Paien - UAS </title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
	* {
		margin: 0px;
	}

	.table1 {
		font-family: Arial;
		color: rgb(0, 0, 0);
		border-collapse: collapse;
		border: 3px solid #394939;
	}

	.table1 tr th {
		background:  #394939;
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
		width: 1300px;
		height: 100px;
		margin-top: 20px;
		margin-left: 10px;
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
		background-color:rgb(189, 32, 32);
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
				<th>DATA KELOLA PASIEN</th>
			</tr>
			<tr>
			<td>
			<div class="row">
					<div class="col">
					
					</div>
					<div class="col-xs">
					<form class="form-inline my-2 my-lg-0 " action="Pasien.php" method="get">
					<input class="form-control mr-sm-2 mt-4" type="search" placeholder="Search by name" aria-label="Search"
					name="cari">
					<button class="btn btn-secondary mt-4" type="submit">Search</button>
					</form>
					<br>
					<?php
					if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					echo "Hasil pencarian : ".$cari."";
					}
					?>
					</div>
					</div>
					<a href="Pendaftaran.php"><button type="button"> <i class="fa fa-plus"></i>Tambah data</button></a> 
					<a href="Website.php"><button type="button"> <i class="fa fa-home"></i>Home</button></a> 
					
				</td>
			</tr>
			<tr>
				<td>
					<div id="namadokter">
						<table class="table2">
							<tr>
								<th>No Registrasi</th>
								<th>Nama Pasien</th>
								<th>Sakit</th>
								<th>Tgl Daftar</th>
								<th>Jenis Rawat</th>
								<th>Kamar</th>
								<th>Action</th>
							</tr>
							<tbody>
								<?php
								if(isset($_GET['cari'])){
									$cari = $_GET['cari'];
		
								$result = mysqli_query($mysqli, "SELECT * FROM tabel_pasien WHERE namapasien like '%".$cari."%'");
									}
									else{
										$result = mysqli_query($mysqli, "SELECT * FROM tabel_pasien
										ORDER BY noregistrasi ASC"); 
										} 

								while($res = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>".$res['noregistrasi']."</td>";
								echo "<td>".$res['namapasien']."</td>";
								echo "<td>".$res['sakit']."</td>";
								echo "<td>".$res['tgldaftar']."</td>";
								echo "<td>".$res['jenisrawat']."</td>";
								echo "<td>".$res['kamar']."</td>";
								
								echo "<td><center><a class='btn btn-success badge-pill 'style=width:80px;border-radius:5px; href=\"Pasien_Edit.php?noregistrasi=$res[noregistrasi]\">Edit</a>  
								<a class='btn btn-danger badge-pill ' style=width:80px;border-radius:5px; href=\"Pasien_Delete.php?noregistrasi=$res[noregistrasi]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></center></td>";
				
				 }
				 ?>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</div>
    </section>
    
    

</body>

</html>