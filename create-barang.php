<?php

require "koneksi.php";

$name = $_POST["name"];
$category = $_POST["category"];
$stock = $_POST["stock"];
$price = $_POST["price"];

$sql = "INSERT INTO product (name, category, stock, price) VALUES ('$name', '$category', '$stock', '$price')";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: barang.php");
}
