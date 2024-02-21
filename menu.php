<?php
session_start();

if (!array_key_exists("username", $_SESSION)) {

    header("location:logout.php");
}
?>

<style>
    @font-face {
        font-family: 'Poppins';
        src: url('Poppins-Regular.eot');
        src: url('Poppins-Regular.eot?#iefix') format('embedded-opentype'),
            url('Poppins-Regular.woff2') format('woff2'),
            url('Poppins-Regular.woff') format('woff'),
            url('Poppins-Regular.ttf') format('truetype'),
            url('Poppins-Regular.svg#Poppins-Regular') format('svg');
        font-weight: 900;
        font-style: normal;
        font-display: normal;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f2f2f2;
        padding: 50px;
    }

    nav {
        background-color: #333;
        color: #fff;
        position: fixed;
        top: 0;
        left: 0;
        width: 175px;
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
        transition: transform 0.3s ease-in-out;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    nav ul li {
        padding: 10px 0;
        border-bottom: 1px solid #444;
    }

    nav ul li:last-child {
        border-bottom: none;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 10px;
    }

    nav ul li a:hover {
        color: #ddd;
        background-color: #444;
    }

    nav ul li ul {
        display: none;
        position: relative;
        top: 0;
        left: 100%;
    }

    nav ul li:hover>ul {
        display: block;
    }

    nav ul li ul li {
        padding: 0;
    }

    nav ul li ul li a {
        padding: 5px 10px;
    }

    nav ul li ul li a:hover {
        color: #ddd;
        background-color: #555;
    }

    nav ul li ul li ul {
        left: 100%;
        top: 0;
    }

    nav ul li ul li ul li a {
        padding: 5px 15px;
    }

    nav ul li ul li ul li a:hover {
        color: #ddd;
        background-color: #555;
    }

    body {
        background-color: #d8cccc;
    }
</style>

<nav>
    <ul>
        <li><a href="home.php">TARINA</a></li>
        <li>MASTER
            <ul>
                <?php if ($_SESSION["level"] == "admin") : ?>
                    <li><a href="user.php">User</a></li>
                <?php endif ?>
                <?php if ($_SESSION["level"] == "admin") : ?>
                    <li><a href="pelanggan.php">Customer</a></li>
                <?php endif ?>
                <li><a href="barang.php">Product</a></li>
            </ul>
        </li>
        <li>TRANSACTION
            <ul>
                <li><a href="penjualan.php">Sales</a></li>
                <li><a href="pembelian.php">Purchase</a></li>
            </ul>
        </li>
        <li>Welcome, <?= $_SESSION["username"] ?>!
            <ul>
                <li><a href="profil.php">Profile</a></li>
            </ul>
        </li>
        <li><a href="logout.php">Log Out</a></li>
    </ul>
</nav>