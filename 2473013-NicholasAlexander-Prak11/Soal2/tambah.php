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

        .btn-simpan{
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

        <h2>Tambah Data Siswa</h2>

        <form action="proses_tambah.php" method="POST">

            <label>Nama:</label>

            <input type="text" name="nama">

            <label>Kelas:</label>

            <input type="text" name="kelas">

            <input
            type="submit"
            value="Simpan"
            class="btn-simpan">

        </form>

        <a href="index.php" class="btn-kembali">

            Kembali

        </a>

    </div>
</body>
</html>