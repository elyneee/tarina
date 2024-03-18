<!DOCTYPE html>
<html>

<head>
    <title>Product Information</title>
    <link rel="stylesheet" href="datastyle.css">
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
            <h1>Product Information</h1>

            <input type="hidden" name="id" value=" <?= $id ?>">

            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?= $product["name"] ?>"></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category">
                            <option value="top" <?= $product["category"] == "top" ? "selected" : "" ?>>top</option>
                            <option value="bottom" <?= $product["category"] == "bottom" ? "selected" : "" ?>>bottom</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td><input type="number" name="stock" value="<?= $product["stock"] ?>"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="number" name="price" value="<?= $product["price"] ?>"></td>
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