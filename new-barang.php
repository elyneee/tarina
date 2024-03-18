<!DOCTYPE html>
<html>

<head>
    <title>New Product</title>
    <link rel="stylesheet" href="formstyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "logistics") {
        echo "You are unable to access this page";
        exit;
    }
    ?>

    <div>
        <form action="create-barang.php" method="POST">
            <h1>Add Product</h1>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category">
                            <option value="top">Top</option>
                            <option value="bottom">Bottom</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td><input type="number" min="0" name="stock"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="number" min="0" name="price"></td>
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