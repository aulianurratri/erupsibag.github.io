<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .bg-login{
            background-color: black;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
        }

        .box-login{
            background-color: wheat;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
            min-height: 200px;
            border: 1px solid #ccc;
            box-sizing: border-box;

        }

        .box-login h2 {
            margin-bottom: 20px;
            color: brown;
            text-align: center;
        }

        .input-control{
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        .btn {
            background-color: blue;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }


        .container {
			width: 80%;
			margin: auto;
			overflow: hidden;
		}

		.section {
			margin: 20px 0;
		}

		.section h3 {
			margin-bottom: 20px;
			color: blue; 
			font-family: 'Poppins', sans-serif;
			font-weight: 700;
		}

		.box {
			background-color: #fff;
			padding: 20px;
			border-radius: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			font-family: 'Lato', sans-serif;
		}

		.table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 20px;
		}

		.table th, .table td {
			padding: 10px;
			text-align: left;
		}

		.table th {
			background-color: blue; 
			color: #fff;
		}

		.table td {
			border: 1px solid #ddd;
		}

		.table tr:nth-child(even) {
			background-color: #f9f9f9;
		}

		.table tr:hover {
			background-color: #f1f1f1;
		}

		a {
			color: blue;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

    </style>
</head>
<body>
	<div class="section">
		<div class="container">
			<h3>Tambah Data Produk</h3>
			<div class="box">
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
					<input type="text" name="harga" class="input-control" placeholder="Harga" required>
					<input type="file" name="gambar" class="input-control" required>
					<textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea><br>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php 

					if(isset($_POST['submit'])){
						$nama 		= $_POST['nama'];
						$harga 		= $_POST['harga'];
						$deskripsi 	= $_POST['deskripsi'];

						
						$filename = $_FILES['gambar']['name'];
						$tmp_name = $_FILES['gambar']['tmp_name'];

						$type1 = explode('.', $filename);
						$type2 = $type1[1];

						$newname = time().'.'.$type2;
						
						$tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

						if(!in_array($type2, $tipe_diizinkan)){
							
							echo '<script>alert("Format file tidak diizinkan")</scrtip>';

						}else{
							
							
							move_uploaded_file($tmp_name, './gambar/'.$newname);
							require_once('../db.php');
							$insert = mysqli_query($conn, "INSERT INTO tb_produk VALUES(
										'',
										'".$nama."',
										'".$harga."',
										'".$deskripsi."',
										'".$newname."'
											)");

							if($insert){
								echo '<script>alert("Tambah data berhasil")</script>';
								echo '<script>window.location="data-produk.php"</script>';
							}else{
								echo 'gagal '.mysqli_error($conn);
							}

						}

						
						
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>