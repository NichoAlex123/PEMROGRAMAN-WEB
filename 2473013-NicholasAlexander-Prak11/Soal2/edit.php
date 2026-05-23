<?php


include "koneksi.php";

$id = $_GET['id'];

$query = $conn->query(

    "SELECT * FROM siswa
    WHERE id='$id'"

);

$data = $query->fetch_array();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            font-family: Arial;
            background-color: #f5f5f5;
        }

        .container{
            width: 700px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px gray;
        }

        h2{
            text-align: center;
            margin-bottom: 30px;
        }

        label{
            display: block;
            margin-bottom: 5px;
        }

        input[type=text]{
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .btn-update{
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-kembali{
            display: inline-block;
            margin-top: 15px;
            background-color: #2196F3;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
        }

    </style>
</head>
<body>
    <div class="container">

        <h2>Edit Data Siswa</h2>

        <form action="proses_edit.php" method="POST">

            <input
            type="hidden"
            name="id"
            value="<?php echo $data['id']; ?>">

            <label>Nama:</label>

            <input
            type="text"
            name="nama"
            value="<?php echo $data['nama']; ?>">

            <label>Kelas:</label>

            <input
            type="text"
            name="kelas"
            value="<?php echo $data['kelas']; ?>">

            <input
            type="submit"
            value="Update"
            class="btn-update">

        </form>

        <a href="index.php" class="btn-kembali">

            Kembali

        </a>

    </div>
</body>
</html>