<?php

require "koneksi.php";

$id = $_POST["id"];
$name = $_POST["name"];
$category = $_POST["category"];
$stock = $_POST["stock"];
$price = $_POST["price"];

$sql = "UPDATE product SET name = '$name', category = '$category', stock = '$stock', price = '$price' WHERE id = '$id'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: barang.php");
}
