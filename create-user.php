<?php

require "koneksi.php";

$product = $_POST["product"];

$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$level = $_POST["level"];

$sql = "INSERT INTO user (product, password, level) VALUES ('$product', '$password', '$level')";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: user.php");
}
