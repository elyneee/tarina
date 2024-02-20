<!DOCTYPE html>
<html>

<head>
    <title>Read Pembelian</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    // halaman ini boleh diakses oleh semua level

    require "koneksi.php";

    // id diambil dari tombol Lihat yang ditekan di pembelian.php
    $id = $_GET["id"];

    // cari pembelian yang memiliki id tersebut
    $sql = "SELECT pembelian.id, product.name as name_product, pembelian.quantity, pembelian.total_amount, user.username, pembelian.created_at FROM product JOIN pembelian on product.id = pembelian.id_product JOIN user ON user.id = pembelian.id_user WHERE pembelian.id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    $pembelian = mysqli_fetch_array($query);
    ?>

    <div>
        <h1>Lihat pembelian</h1>
        <table>
            <tr>
                <td>name product</td>
                <td><input readonly type="text" value="<?= $pembelian["name_product"] ?>"></td>
            </tr>
            <tr>
                <td>quantity</td>
                <td><input readonly type="text" value="<?= $pembelian["quantity"] ?>"></td>
            </tr>
            <tr>
                <td>Total price</td>
                <td><input readonly type="text" value="<?= $pembelian["total_amount"] ?>"></td>
            </tr>
            <tr>
                <td>Diinput oleh</td>
                <td><input readonly type="text" value="<?= $pembelian["username"] ?>"></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td><input readonly type="text" value="<?= $pembelian["created_at"] ?>"></td>
            </tr>
        </table>
    </div>
</body>

</html>