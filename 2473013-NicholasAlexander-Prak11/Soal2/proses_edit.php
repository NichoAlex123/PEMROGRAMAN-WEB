<?php

include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$conn->query(

    "UPDATE siswa
    SET

    nama='$nama',
    kelas='$kelas'

    WHERE id='$id'"

);

header("Location:index.php");

?>