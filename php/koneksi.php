<?php
$host = "localhost";
$user = "david";
$passwd = "1";
$name = "david";

$conn = mysqli_connect($host, $user, $passwd, $name);

if (!$conn) {
    die("koneksi gagal terhubung : " . mysqli_connect_errno() . "-" . mysqli_connect_error());
}
