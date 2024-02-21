<!DOCTYPE html>
<html>

<head>
    <title>Product</title>
    <link rel="stylesheet" href="datastyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $sql = "SELECT * FROM product";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <h1>Data Product</h1>
        <form action="new-barang.php" method="GET">
            <button type="submit">Add</button>
        </form>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th colspan="2">Action</th>
            </tr>
            <?php $i = 1; ?>
            <?php while ($product = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $product["name"] ?></td>
                    <td><?= $product["category"] ?></td>
                    <td><?= $product["stock"] ?></td>
                    <td><?= $product["price"] ?></td>
                    <td><?= $product["created_at"] ?></td>
                    <td><?= $product["updated_at"] ?></td>
                    <td>
                        <form action="read-barang.php" method="GET">
                            <input type="hidden" name="id" value='<?= $product["id"] ?>'>
                            <button type="submit">See</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete-barang.php" method="POST" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $product["id"] ?>'>
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
            return confirm(`Delete product '${id}'?`);
        }
    </script>
</body>

</html>