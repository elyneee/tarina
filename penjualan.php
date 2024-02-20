<!DOCTYPE html>
<html>

<head>
    <title>sales</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $sql = "SELECT sales.id, product.name as name_product, sales.quantity, sales.total_amount, user.username, sales.created_at FROM product JOIN sales on product.id = sales.id_product JOIN user ON user.id = sales.id_user ORDER BY sales.created_at DESC";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <h1>Data sales</h1>
        <form action="new-sales.php" method="GET">
            <button type="submit">Add</button>
        </form>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>name product</th>
                <th>quantity</th>
                <th>Total price</th>
                <th>Diinput oleh</th>
                <th>Waktu</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($sales = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $sales["name_product"] ?></td>
                    <td><?= $sales["quantity"] ?></td>
                    <td><?= $sales["total_amount"] ?></td>
                    <td><?= $sales["username"] ?></td>
                    <td><?= $sales["created_at"] ?></td>
                    <td>
                        <form action="read-sales.php" method="GET">
                            <input type="hidden" name="id" value='<?= $sales["id"] ?>'>
                            <button type="submit">Lihat</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete-sales.php" method="POST" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $sales["id"] ?>'>
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