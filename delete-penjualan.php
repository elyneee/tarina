<?php

require "koneksi.php";

session_start();

if ($_SESSION["level"] != "admin") {
    echo "You are unable to delete this data";
    exit;
}

$id = $_POST["id"];

$sql = "DELETE FROM sales WHERE id = '$id'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: penjualan.php");
}
