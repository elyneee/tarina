<!DOCTYPE html>
<html>

<head>
    <title>New Customer</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }
    ?>

    <div>
        <form action="create-pelanggan.php" method="POST">
            <h1>Add Customer</h1>
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" first_name="first_name"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>
                        <select first_name="last_name">
                            <option value="top">Top</option>
                            <option value="bottom">Bottom</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="number" min="0" name="address"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="number" min="0" name="phone_number"></td>
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