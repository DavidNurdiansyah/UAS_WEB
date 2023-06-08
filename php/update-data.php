<?php
require 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "UPDATE signup set password = '$password' WHERE email = '$email'";

if (mysqli_query($conn, $query_sql)) {
    header("location:login.php");
} else {
    echo "Pendaftaran gagal : " . mysqli_error($conn);
}
