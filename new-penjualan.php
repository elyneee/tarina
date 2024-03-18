<DOCTYPE html>
    <html>

    <head>
        <title>New Sales</title>
        <link rel="stylesheet" href="formstyle.css">
    </head>

    <body>
        <?php include "menu.php"; ?>

        <?php
        if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "finance") {
            echo "You are unable to access this page";
            exit;
        }
        ?>

        <?php
        require "koneksi.php";

        $sql = "SELECT * FROM product";
        $query = mysqli_query($koneksi, $sql);
        ?>

        <div>
            <form action="create-sales.php" method="post">
                <h1>Add Sales</h1>
                <table>
                    <tr>
                        <td>Product</td>
                        <td>
                            <select name="id_product">
                                <?php while ($product = mysqli_fetch_array($query)) : ?>
                                    <option value='<?= $product["id"] ?>'>
                                        <?= $product["name"] ?>, price: <?= $product["price"] ?>, stock: <?= $product["stock"] ?>
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

    </html>