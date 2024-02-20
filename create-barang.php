<?php

require "koneksi.php";

$product_name = $_POST["product_name"];
$category = $_POST["category"];
$stock = $_POST["stock"];
$price = $_POST["price"];

$sql = "INSERT INTO product (product_name, category, stock, price) VALUES ('$product_name', '$category', '$stock', '$price')";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: barang.php");
}
