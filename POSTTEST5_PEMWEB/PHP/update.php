<?php
require "conn.php";
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM product where id_produk='$id'");

$product = [];

while ($row = mysqli_fetch_assoc($result)){
    $product[] = $row;
}

$product = $product[0];

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    $result = mysqli_query($conn, "UPDATE product SET nama = '$nama', jenis='$jenis', harga='$harga' WHERE id_produk = '$id'");

    if ($result) {
        echo "
        <script>
            alert('Data berhasil Diubah!');
            document.location.href = 'dashboard.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'update.php'
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Update Data</h1><br><hr>
            <form action="" method="post">
                <label for="nama">Nama Product</label>
                <input type="text" name="nama" value="<?php echo $product['nama']?>" class="textfield">
                <label for="jenis">Jenis Product:</label>
                    <select name="jenis" id="jenis" value="<?php echo $product['jenis']?>">
                        <option value="Face Wash">Face Wash</option>
                        <option value="Serum">Serum</option>
                        <option value="Moisturizer">Moisturizer</option>
                    </select>
                <!-- <input type="text" name="jenis" value="<?php echo $product['jenis']?>" class="textfield"> -->
                <label for="harga">Harga Product</label>
                <input type="text" name="harga" value="<?php echo $product['harga']?>" class="textfield">
                <input type="submit" name="update" value="Update Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>