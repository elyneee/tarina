<?php

require "koneksi.php";

$id = $_POST["id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$address = $_POST["address"];
$phone_number = $_POST["phone_number"];

$sql = "UPDATE customer SET first_name = '$first_name', last_name = '$last_name', address = '$address', phone_number = '$phone_number' WHERE id = '$id'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: pelanggan.php");
}
