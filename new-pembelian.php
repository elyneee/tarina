<!DOCTYPE html>
<html>

<head>
    <title>New purchase</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $sql = "SELECT * FROM product";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <form action="create-purchase.php" method="post">
            <h1>Add purchase</h1>
            <table>
                <tr>
                    <td>Product</td>
                    <td>
                        <select name="id_product">
                            <?php while ($product = mysqli_fetch_array($query)) : ?>
                                <option value='<?= $product["id"] ?>'>
                                    <?= $product["name"] ?>, price: <?= $product["price_beli"] ?>, stock: <?= $product["stock"] ?>
                                </option>
                            <?php endwhile ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input type="number" min="0" name="quantity"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">SAVE</button>
                        <button type="reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</body>

</html>