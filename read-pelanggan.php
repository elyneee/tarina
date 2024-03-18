<!DOCTYPE html>
<html>

<head>
    <title>Customer Information</title>
    <link rel="stylesheet" href="datastyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM customer WHERE id = '$id'";

    $query = mysqli_query($koneksi, $sql);

    $customer = mysqli_fetch_array($query);
    ?>

    <div>
        <form action="update-customer.php" method="POST">
            <h1>Customer Information</h1>

            <input type="hidden" name="id" value=" <?= $id ?>">

            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="first_name" value="<?= $customer["first_name"] ?>"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="last_name" value="<?= $customer["last_name"] ?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="number" name="address" value="<?= $customer["address"] ?>"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="number" name="phone_number" value="<?= $customer["phone_number"] ?>"></td>
                </tr>
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