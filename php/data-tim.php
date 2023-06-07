<?php
require 'koneksi.php';

$tim1 = $_POST['tim1'];
$tim2 = $_POST['tim2'];
$tim3 = $_POST['tim3'];
$tim4 = $_POST['tim4'];
$finalis1 = $_POST['finalis1'];
$finalis2 = $_POST['finalis2'];
$tim5 = $_POST['tim5'];
$tim6 = $_POST['tim6'];
$tim7 = $_POST['tim7'];
$tim8 = $_POST['tim8'];

$query_sql = "INSERT INTO tim VALUE (NULL,'$tim1','$tim2','$tim3','$tim4','$finalis1','$finalis2','$tim5','$tim6','$tim7','$tim8')";

if (mysqli_query($conn, $query_sql)) {
    header("location:bracket.php");
} else {
    echo "Pendaftaran gagal : " . mysqli_error($conn);
}

header("location:bracket.php");