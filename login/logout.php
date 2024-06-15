<?php
  session_start();
      // Session terdaftar, saatnya logout
      session_unset(); // Hapus semua variabel session
      session_destroy();
      header("Location: ../index.php");
?>