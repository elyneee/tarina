<?php
session_start();

if (!array_key_exists("username", $_SESSION)) {

    header("location:logout.php");
}
?>

<nav>
    <ul>
        <li><a href="home.php">HOME</a></li>
        <li>MASTER
            <ul>

                <?php if ($_SESSION["level"] == "admin") : ?>
                    <li><a href="user.php">User</a></li>
                <?php endif ?>
                <li><a href="barang.php">Product</a></li>
            </ul>
        </li>
        <li>TRANSACTION
            <ul>
                <li><a href="penjualan.php">Sales</a></li>
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

<body>
<body>
  <div id="diagram">
    <div class="box box-1"></div>
    <div class="box box-2"></div>
    <div class="box box-3"></div>
    <div class="box box-4"></div>
    <div class="box box-5"></div>
  </div>
</body>
</body>