<!DOCTYPE html>
<html>

<head>
    <title>Pembelian</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $sql = "SELECT pembelian.id, product.name as name_product, pembelian.quantity, pembelian.total_amount, user.username, pembelian.created_at FROM product JOIN pembelian on product.id = pembelian.id_product JOIN user ON user.id = pembelian.id_user ORDER BY pembelian.created_at DESC";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <h1>Data Pembelian</h1>
        <form action="new-pembelian.php" method="get">
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
            <?php while ($pembelian = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $pembelian["name_product"] ?></td>
                    <td><?= $pembelian["quantity"] ?></td>
                    <td><?= $pembelian["total_amount"] ?></td>
                    <td><?= $pembelian["username"] ?></td>
                    <td><?= $pembelian["created_at"] ?></td>
                    <td>
                        <form action="read-pembelian.php" method="get">
                            <input type="hidden" name="id" value='<?= $pembelian["id"] ?>'>
                            <button type="submit">Lihat</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete-pembelian.php" method="post" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $pembelian["id"] ?>'>
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