<?php 
    session_start();
    if ($_SESSION["nama"]==null){
        header("Location: ../produk/login.php");
    }
?>