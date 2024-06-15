<?php
require_once('login/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];
    
    $query="INSERT INTO tb_ulasan (user_name, review, rating) VALUES ('$user_name', '$review', $rating)";
    if ($conn->query($query)==true) {
        echo "Ulasan berhasil ditambahkan!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Redirect kembali ke halaman utama
    header("Location: ulasan.php");
    exit();
}
?>
