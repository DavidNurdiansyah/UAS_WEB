<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];
$query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    header("location:input.php");
} else {
    echo "<script language='javascript'>";
    echo "alert('User atau Password salah');";
    echo "window.location.href = 'login.php';";
    echo "</script>";
}
