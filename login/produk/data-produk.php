<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
	<link rel="icon" href="../gambar/favicon.ico" type="image/x-icon">
    <style>
        body {
			font-family: 'Quicksand', sans-serif;
			background-color: white;
			margin: 0;
			padding: 0;
			color: #333;
		}

		header {
			background-color: blue;
			color: #fff;
			padding: 20px 0;
			font-family: 'Montserrat', sans-serif;
		}

		header h1 a {
			color: blue;
			text-decoration: none;
			font-family: 'Pacifico', cursive;
			font-weight: 700;
		}

		header ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
		}

		header ul li {
			margin-right: 20px;
		}

		header ul li a {
			color: blue;
			text-decoration: none;
			font-family: 'Roboto', sans-serif;
			font-weight: 400;
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
			border-radius: 10px;
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
            text-align: center;
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

		footer {
			background-color: blue;
			color: #fff;
			padding: 20px 0;
			text-align: center;
			font-family: 'Roboto', sans-serif;
		}

		footer small {
			display: block;
			margin-top: 10px;
			font-family: 'Roboto', sans-serif;
		}
    </style>
</head>
<body>
        <div class="section">
            <div class="container">
                <h3>Data Produk</h3>
                <div class="box">
                    <p><a href="tambah-produk.php">Tambah Data</a></p>
                    <table border="1" cellspacing="0"class="table">
                        <thead>
                            <tr>
                                <th width="60px">No</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            require_once('../db.php');
                                $no =1;
                                $produk = mysqli_query($conn,"SELECT * FROM tb_produk ORDER BY product_id DESC");
                                if(mysqli_num_rows($produk)>0){
                                while($row = mysqli_fetch_array($produk)){
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['product_name']?></td>
                                <td>Rp. <?php echo number_format($row['product_price'])?></td>
                                <td><?php echo $row['product_description']?></td>
                                <td><img src="gambar/<?php echo $row['product_image'] ?>" width="100px"></td>
                                <td>
                                    <a href="edit-produk.php?id=<?php echo $row['product_id'] ?>">Edit</a> || <a href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('yakin hapus?')">Hapus</a>
                                </td>
                            </tr>
                           <?php }}else{ ?>
                                <tr>
                                    <td collapse="6">Tidak ada data</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</body>
</html>