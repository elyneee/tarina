<!DOCTYPE html>
<html>

<head>
    <title>Read purchase</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    // halaman ini boleh diakses oleh semua level

    require "koneksi.php";

    // id diambil dari tombol Lihat yang ditekan di purchase.php
    $id = $_GET["id"];

    // cari purchase yang memiliki id tersebut
    $sql = "SELECT purchase.id, product.name as name_product, purchase.quantity, purchase.total_amount, user.username, purchase.created_at FROM product JOIN purchase on product.id = purchase.id_product JOIN user ON user.id = purchase.id_user WHERE purchase.id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    $purchase = mysqli_fetch_array($query);
    ?>

    <div>
        <h1>Lihat purchase</h1>
        <table>
            <tr>
                <td>name product</td>
                <td><input readonly type="text" value="<?= $purchase["name_product"] ?>"></td>
            </tr>
            <tr>
                <td>quantity</td>
                <td><input readonly type="text" value="<?= $purchase["quantity"] ?>"></td>
            </tr>
            <tr>
                <td>Total price</td>
                <td><input readonly type="text" value="<?= $purchase["total_amount"] ?>"></td>
            </tr>
            <tr>
                <td>Diinput oleh</td>
                <td><input readonly type="text" value="<?= $purchase["username"] ?>"></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td><input readonly type="text" value="<?= $purchase["created_at"] ?>"></td>
            </tr>
        </table>
    </div>
</body>

</html>