<!DOCTYPE html>
<html>

<head>
    <title>Customer</title>
    <link rel="stylesheet" href="datastyle.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $sql = "SELECT * FROM customer";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <h1>Customer Data</h1>
        <form action="new-pelanggan.php" method="GET">
            <button type="submit">Add</button>
            <button onclick="cetakLaporan()">Print</button>
        </form>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th colspan="2">Action</th>
            </tr>
            <?php $i = 1; ?>
            <?php while ($customer = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $customer["first_name"] ?></td>
                    <td><?= $customer["last_name"] ?></td>
                    <td><?= $customer["address"] ?></td>
                    <td><?= $customer["phone_number"] ?></td>
                    <td><?= $customer["created_at"] ?></td>
                    <td><?= $customer["updated_at"] ?></td>
                    <td>
                        <form action="read-pelanggan.php" method="GET">
                            <input type="hidden" name="id" value='<?= $customer["id"] ?>'>
                            <button type="submit">See</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete-pelanggan.php" method="POST" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $customer["id"] ?>'>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </table>
    </div>
    <script>
        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Delete customer '${id}'?`);
        }
    </script>

    <script>
        function cetakLaporan() {
            window.print();
        }
    </script>

</body>

</html>