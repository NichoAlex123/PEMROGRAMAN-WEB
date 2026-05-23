<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>

        body{
            font-family: Arial;
            background-color: #f5f5f5;
        }

        .container{
            width: 700px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px gray;
        }

        h2{
            text-align: center;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th{
            background-color: #f0f0f0;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        td{
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .btn-tambah{
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-edit{
            background-color: #2196F3;
            color: white;
            padding: 7px 12px;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-hapus{
            background-color: #f44336;
            color: white;
            padding: 7px 12px;
            text-decoration: none;
            border-radius: 4px;
        }

    </style>
</head>
<body>
    <div class="container">

        <h2>Data Siswa</h2>

        <a href="tambah.php" class="btn-tambah">

            Tambah Data

        </a>

        <table>

            <tr>

                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>

            </tr>

            <?php

            $query = $conn->query("SELECT * FROM siswa");

            while($data = $query->fetch_array()){

            ?>

            <tr>

                <td>

                    <?php echo $data['id']; ?>

                </td>

                <td>

                    <?php echo $data['nama']; ?>

                </td>

                <td>

                    <?php echo $data['kelas']; ?>

                </td>

                <td>

                    <a
                    href="edit.php?id=<?php echo $data['id']; ?>"
                    class="btn-edit">

                        Edit

                    </a>

                    <a
                    href="hapus.php?id=<?php echo $data['id']; ?>"
                    class="btn-hapus">

                        Hapus

                    </a>

                </td>

            </tr>

            <?php
            }
            ?>

        </table>

    </div>
</body>
</html>