<!DOCTYPE html>
<html>

<head>
    <title>New User</title>
    <link rel="stylesheet" href="formstyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin") {
        // jika di sesi ini levelnya bukan admin, akses ditolak
        echo "You are unable to access this page";
        exit;
    }
    ?>

    <div>
        <!-- username, password, dan level dikirim ke create-user.php -->
        <form action="create-user.php" method="POST">
            <h1>Add User</h1>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>
                        <select name="level">
                            <option value="admin">Admin</option>
                            <option value="finance">Finance</option>
                            <option value="logistics">Logistics</option>
                        </select>
                    </td>
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