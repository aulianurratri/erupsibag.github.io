<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan||Erupsibag</title>
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_produk.css">
      <!--Fonts-->
      <link rel="icon" href="gambar/favicon.ico" type="image/x-icon">
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
    <div class="reviews-container">
    <?php 
        require_once('login/db.php');
        $no =1;
        $review = mysqli_query($conn,"SELECT * FROM tb_ulasan ORDER BY ulasan_id DESC  LIMIT 4;");
        if(mysqli_num_rows($review)>0){
          while($row = mysqli_fetch_array($review)){
            ?>
        <div class="review-item">
            <h3><?php echo $row['user_name'];?></h3>
            <p><?php echo $row['review'];?></p>
            <span class="reviewer">
            <?php for ($i=0;$i<$row['rating'];$i++) {?>
                <span class="star">&#9733;</span>
                <?php }?>
        </div>
        <?php }}else{ ?>
            <div class="riview">
            <H1>Ulasan tidak ditemukan</H1>
            <?php } ?>
            </div>
        
    </div>
    <div class="add-review-container">
        <h2>Tambahkan Ulasan Baru</h2>
        <form action="submit_ulasan.php" method="POST">
        <label for="user_name">Nama:</label>
        <input type="text" id="user_name" name="user_name" required><br><br>
        <label for="review">Ulasan:</label><br>
        <textarea id="review" name="review" rows="4" cols="50" required></textarea><br><br>
        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br><br>
        <input type="submit" value="Submit">

        </form>
    </div>
    <script>
                feather.replace();
              </script>
</body>
</html>
