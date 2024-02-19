<?php

require "koneksi.php";

$barang = $_POST["barang"];

$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$level = $_POST["level"];

$sql = "INSERT INTO user (barang, password, level) VALUES ('$barang', '$password', '$level')";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: user.php");
}
