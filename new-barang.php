<!DOCTYPE html>
<html>

<head>
    <title>New product</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "logistics") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }
    ?>

    <div>
        <form action="create-barang.php" method="POST">
            <h1>Add product</h1>
            <table>
                <tr>
                    <td>product_name</td>
                    <td><input type="text" product_name="product_name"></td>
                </tr>
                <tr>
                    <td>category</td>
                    <td>
                        <select product_name="category">
                            <option value="top">top</option>
                            <option value="bottom">bottom</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>stock</td>
                    <td><input type="number" min="0" product_name="stock"></td>
                </tr>
                <tr>
                    <td>price Beli</td>
                    <td><input type="number" min="0" product_name="price_beli"></td>
                </tr>
                <tr>
                    <td>price Jual</td>
                    <td><input type="number" min="0" product_name="price_jual"></td>
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