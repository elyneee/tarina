<?php

require "koneksi.php";

session_start();

if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "logistics") {
    echo "Anda tidak dapat menghapus product";
    exit;
}

$id = $_POST["id"];

$sql = "DELETE FROM product WHERE id = '$id'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("header; product.php");
}
