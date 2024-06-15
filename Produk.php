<<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk||Erupsibag</title>
    <link rel="icon" href="gambar/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_produk.css">
      <!--Fonts-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700;&display=swap"
            rel="stylesheet">

        <!-- feather icons-->
        <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<?php include("navbar.php"); ?>
<div class="container">
  <div class="container-inner">
<?php 
        require_once('login/db.php');
        $no =1;
        $produk = mysqli_query($conn,"SELECT * FROM tb_produk ORDER BY product_id DESC");
        if(mysqli_num_rows($produk)>0){
          while($row = mysqli_fetch_array($produk)){
            ?>
            <div class="product-container">
                <div class="product-image">
                    <img src="login/produk/gambar/<?php echo $row['product_image'] ?>" alt="Product Image" class="gambar-produk">
                    <h1 class="product-title"> <?php echo $row['product_name']?></h1>
                    <p> Rp. <?php echo number_format($row['product_price'])?></p>
                    <a target="_blank"href="https://wa.me/62882001632509?text=saya%20berminat%20membeli%20<?php echo urlencode($row['product_name'])?>" class="buy-button">Beli Sekarang</a>
                </div>
              </div>
            
        
        <?php }}else{ ?>
            
        <?php } ?>
        </div>
        </div>
    <footer>
        <p>&copy; 2024 - Erupsibag.</p>
    </footer>
    <script>
                feather.replace();
              </script>

</body>
</html>
