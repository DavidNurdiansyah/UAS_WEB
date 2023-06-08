<?php
$host = "sql310.infinityfree.com";
$user = "if0_34380072";
$passwd = "fzvE4HuRoFlWD";
$name = "if0_34380072_david";

$conn = mysqli_connect($host, $user, $passwd, $name);

if (!$conn) {
    die("koneksi gagal terhubung : " . mysqli_connect_errno() . "-" . mysqli_connect_error());
}