<?php

require "koneksi.php";

session_start();

if ($_SESSION["level"] != "admin") {
    echo "You are unable to delete the customer";
    exit;
}

$id = $_POST["id"];

$sql = "DELETE FROM customer WHERE id = '$id'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("header; customer.php");
}
