<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" href="../gambar/favicon.ico" type="image/x-icon">
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
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn {
            background-color: brown;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

    </style>
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn">
        </form>
        <?php
        if(isset($_POST['submit'])){
            session_start();
            include 'db.php';

            $user =mysqli_real_escape_string($conn, $_POST['user']);
            $pass = mysqli_real_escape_string($conn, $_POST['pass']);

            $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password ='".MD5($pass)."'");
            if(mysqli_num_rows($cek) > 0){
                $d = mysqli_fetch_object($cek);
                $_SESSION['status_login']= true;
                $_SESSION['nama']= $d->admin_name;
                $_SESSION['id']= $d->admin_id;
                echo '<script>window.location="dashboard.php"</script>';  
            }else{
                echo '<script>alert("username atau password anda salah!")</script>';  
            }

        }
        ?>

    </div>
</body>
</html>