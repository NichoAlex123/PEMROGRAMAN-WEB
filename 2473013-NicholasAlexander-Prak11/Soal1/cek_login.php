<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin"){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

        body{
            font-family: Times New Roman;
            margin: 30px;
        }

        h1{
            font-size: 50px;
            margin-bottom: 20px;
        }

        .admin{
            color: blue;
            font-size: 70px;
        }

        a{
            color: purple;
            font-size: 30px;
        }

    </style>
<body>
    
</body>
<h1>Login berhasil!</h1>

    <h1>
        Selamat datang,
        <span class="admin">
            <?php echo $username; ?>
        </span>.
    </h1>

    <a href="login.php">
        kembali ke halaman login
    </a>

</html>

<?php

}
else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            font-family: Times New Roman;
            margin: 30px;
        }

        h1{
            color: red;
            font-size: 40px;
        }

        a{
            color: purple;
            font-size: 30px;
        }

    </style>
</head>
<body>
    <h1>

        Username : <?php echo $username; ?>

        Tidak Terdaftar!

    </h1>

    <a href="login.php">

        kembali ke halaman login

    </a>
</body>
</html>

<?php

}
?>