<?php

require "koneksi.php";

session_start();

$id_product = $_POST["id_product"];
$quantity = $_POST["quantity"];

$sql = "SELECT price_jual, stock FROM product WHERE id = '$id_product'";
$query = mysqli_query($koneksi, $sql);
$product = mysqli_fetch_array($query);

if ($quantity > $product["stock"]) {
    echo "stock product tidak mencukupi";
    exit;
}

$total_amount = $quantity * $product["price_jual"];

$id_user = $_SESSION["id"];

$sql = "INSERT INTO sales (id_product, quantity, total_amount, id_user) VALUES ('$id_product', '$quantity', '$total_amount', '$id_user')";
mysqli_query($koneksi, $sql);

$sql = "UPDATE product SET stock = stock - $quantity WHERE id = '$id_product'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: penjualan.php");
}
