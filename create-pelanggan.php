<?php

require "koneksi.php";

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$address = $_POST["address"];
$phone_number = $_POST["phone_number"];

$sql = "INSERT INTO customer (first_name, last_name, address, phone_number) VALUES ('$first_name', '$last_name', '$address', '$phone_number')";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: pelanggan.php");
}
