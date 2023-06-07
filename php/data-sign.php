<?php
require 'koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "INSERT INTO signup VALUE (NULL,'$username','$email','$password')";

if (mysqli_query($conn, $query_sql)) {
    header("location:bracket.php");
} else {
    echo "Pendaftaran gagal : " . mysqli_error($conn);
}
