<?php
require 'koneksi.php';

$query_sql = "DELETE FROM tim";

if (mysqli_query($conn, $query_sql)) {
    header("location:input.php");
} else {
    echo "Pendaftaran gagal : " . mysqli_error($conn);
}
