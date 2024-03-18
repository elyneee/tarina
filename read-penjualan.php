<!DOCTYPE html>
<html>

<head>
    <title>Sales Data</title>
    <link rel="stylesheet" href="datastyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    // halaman ini boleh diakses oleh semua level

    require "koneksi.php";

    // id diambil dari tombol Lihat yang ditekan di penjualan.php
    $id = $_GET["id"];

    // cari sales yang memiliki id tersebut
    $sql = "SELECT sales.id, product.name as name_product, sales.quantity, sales.total_amount, user.username, sales.created_at FROM product JOIN sales on product.id = sales.id_product JOIN user ON user.id = sales.id_user WHERE sales.id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    $sales = mysqli_fetch_array($query);
    ?>

    <div>
        <h1>View Sales Data</h1>
        <table>
            <tr>
                <td>Product Name</td>
                <td><input readonly type="text" value="<?= $sales["name_product"] ?>"></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input readonly type="text" value="<?= $sales["quantity"] ?>"></td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td><input readonly type="text" value="<?= $sales["total_amount"] ?>"></td>
            </tr>
            <tr>
                <td>Inputted by</td>
                <td><input readonly type="text" value="<?= $sales["username"] ?>"></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><input readonly type="text" value="<?= $sales["created_at"] ?>"></td>
            </tr>
        </table>
    </div>
</body>

</html>