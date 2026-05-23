<?php

include "koneksi.php";

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$conn->query(

    "INSERT INTO siswa(nama, kelas)
    VALUES('$nama', '$kelas')"

);

header("Location:index.php");

?>