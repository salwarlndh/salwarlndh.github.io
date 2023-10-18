<?php
require 'conn.php';

$result = mysqli_query($conn, "SELECT * FROM product");

$product = [];

while ($row = mysqli_fetch_assoc($result)){
    $product[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="dashboard">
            <section class="dash-main">
                <h1 style="color: pink">Welcome Admin!</h1> <br>
                <hr style="color: pink"><br>
                <h3 style="color: pink">List Product Velvet Skin</h3>
                <div class="leading-btn">
                    <a href = "add.php"><button class="ctn">Create</button></a>
                    <a href = "index.php"><button class="ctn">Back to LandPage</button></a>
                </div><br>
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Product</th>
                            <th>Jenis Product</th>
                            <th>Harga Product</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($product as $prd) :?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $prd["nama"] ?></td>
                            <td><?php echo $prd["jenis"] ?></td>
                            <td><?php echo $prd["harga"] ?></td>
                            <td class="action">
                            <a href="update.php?id=<?php echo $prd["id_produk"] ?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                            <a href="delete.php?id=<?php echo $prd["id_produk"] ?>"><button name="delete" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>