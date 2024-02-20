<!DOCTYPE html>
<html>

<head>
    <title>Read product</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM product WHERE id = '$id'";

    $query = mysqli_query($koneksi, $sql);

    $product = mysqli_fetch_array($query);
    ?>

    <div>
        <form action="update-product.php" method="POST">
            <h1>Lihat product</h1>

            <input type="hidden" product_name="id" value=" <?= $id ?>">

            <table>
                <tr>
                    <td>product_name</td>
                    <td><input type="text" product_name="product_name" value="<?= $product["product_name"] ?>"></td>
                </tr>
                <tr>
                    <td>category</td>
                    <td>
                        <select product_name="category">
                            <option value="top" <?= $product["category"] == "top" ? "selected" : "" ?>>top</option>
                            <option value="bottom" <?= $product["category"] == "bottom" ? "selected" : "" ?>>bottom</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>stock</td>
                    <td><input type="number" product_name="stock" value="<?= $product["stock"] ?>"></td>
                </tr>
                <tr>
                    <td>price Beli</td>
                    <td><input type="number" product_name="price_beli" value="<?= $product["price_beli"] ?>"></td>
                </tr>
                <tr>
                    <td>price Jual</td>
                    <td><input type="number" product_name="price_jual" value="<?= $product["price_jual"] ?>"></td>
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

</html>