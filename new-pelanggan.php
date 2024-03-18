<!DOCTYPE html>
<html>

<head>
    <title>New Customer</title>
    <link rel="stylesheet" href="formstyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin") {
        echo "You are unable to access this page";
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
                    <td><input type="text" last_name="last_name"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" address="address"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="text" name="phone_number"></td>
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