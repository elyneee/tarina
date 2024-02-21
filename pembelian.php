<!DOCTYPE html>
<html>

<head>
    <title>Purchase</title>
    <link rel="stylesheet" href="datastyle.css">
</head>

<style>
    .body {
        background-color: #40220b;
        padding: 2rem;
    }

    .h1 {
        color: #f0dfd3;
    }
</style>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $sql = "SELECT purchase.id, product.name as name_product, purchase.quantity, purchase.total_amount, user.username, purchase.created_at FROM product JOIN purchase on product.id = purchase.id_product JOIN user ON user.id = purchase.id_user ORDER BY purchase.created_at DESC";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <h1>Purchase Data</h1>
        <form action="new-pembelian.php" method="get">
            <button type="submit">Add</button>
        </form>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Total price</th>
                <th>Inputted by</th>
                <th>Time</th>
                <th colspan="2">Action</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($purchase = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $purchase["product_name"] ?></td>
                    <td><?= $purchase["quantity"] ?></td>
                    <td><?= $purchase["total_amount"] ?></td>
                    <td><?= $purchase["username"] ?></td>
                    <td><?= $purchase["created_at"] ?></td>
                    <td>
                        <form action="read-pembelian.php" method="get">
                            <input type="hidden" name="id" value='<?= $purchase["id"] ?>'>
                            <button type="submit">Lihat</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete-purchase.php" method="post" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $purchase["id"] ?>'>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </table>
    </div>
    <script>
        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus sales '${id}'?`);
        }
    </script>
</body>

</html>