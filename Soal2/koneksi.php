<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "dbsekolah";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){

    die("Koneksi gagal");

}

?>