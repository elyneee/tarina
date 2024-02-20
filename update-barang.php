<?php

require "koneksi.php";

$id = $_POST["id"];
$product_name = $_POST["product_name"];
$category = $_POST["category"];
$stock = $_POST["stock"];
$price_beli = $_POST["price_beli"];
$price_jual = $_POST["price_jual"];

$sql = "UPDATE product SET product_name = '$product_name', category = '$category', stock = '$stock', price_beli = '$price_beli', price_jual = '$price_jual' WHERE id = '$id'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: barang.php");
}
