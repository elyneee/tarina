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
        background-color: white;
        padding: 50px;
    }

    nav {
        background-color: whitesmoke;
        color: black;
        position: fixed;
        top: 0;
        left: 0;
        width: 145px;
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
        transition: transform 0.3s ease-in-out;
        box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2);
        font-size: medium;
    }

    /* list navbar */
    nav ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
    }

    /* tarina */
    nav ul li {
        padding: 10px 0;
    }

    nav ul li a {
        color: black;
        text-decoration: none;
    }

    .list {
        margin-top: 150px;
        padding: 5px 0;
        position: absolute;
    }

    .list a:hover {
        background-color: black;
        color: white;
        display: flex;
    }

    .tarina {
        writing-mode: vertical-lr;
        font-size: 1.7rem;
        text-align: center;
        font-weight: 700;
        display: flex;
        align-items: center;
        letter-spacing: 2px;
        white-space: nowrap;
    }

    .tarina a {
        color: black;
        text-decoration: none;
        display: block;
    }

    /* welcome + log out */
    nav ul li:last-child {
        border-bottom: none;
    }

    /* log out link */
    nav ul li:last-child a {
        text-decoration: none;
        color: black;
    }

    /* list dropdown */
    nav ul li ul {
        display: none;
        float: left;
        position: relative;
        top: 0;
        left: 100%;
    }

    /* list dropdown hover */
    nav ul li:hover>ul {
        display: contents;
    }

    /* list dropdown */
    nav ul li ul li {
        padding: 0;
    }

    /* transaction */
    nav ul li ul li ul {
        left: 100%;
        top: 0;
    }

    /* transaction list link */
    nav ul li ul li ul li a {
        padding: 5px 15px;
    }

    .logout {
        text-align: center;
    }

    .logout a {
        margin-top: 450px;
        text-decoration: none;
        color: black;
        display: block;
    }

    .logout a:hover {
        background-color: black;
        color: white;
    }

    footer {
        color: black;
        text-align: center;
        background-color: white;
        position: fixed;
        bottom: 0;
        left: 150px;
        right: 0;
        height: 50px;
        font-size: 0.8rem;
    }

    @media print {
        nav {
            display: none;
        }

        footer {
            display: none;
        }
    }
</style>

<nav>
    <ul>
        <div class="tarina">
            <li><a href="home.php">TARINA</a></li>
        </div>
        <div class="list">
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
                </ul>
            </li>
            <li>WELCOME, <?= $_SESSION["username"] ?>!
                <ul>
                    <li><a href="profil.php">Profile</a></li>
                </ul>
            </li>
        </div>
        <div class="logout">
            <li><a href="logout.php">LOG OUT</a></li>
        </div>
    </ul>
</nav>

<footer>
    <p>&copy; 2024 TARINA Clothing Store</p>
</footer>