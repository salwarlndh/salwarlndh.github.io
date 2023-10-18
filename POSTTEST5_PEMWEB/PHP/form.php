<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome ><</title>

    <style>
    body {
        background-color: #E5BEEC;

    }

    .container {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    }

    h1 {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #2A2F4F;
    }

    img {
        padding: 30px 30px;
    }
</style>
</head>

<body>
    <h1>Anda Berhasil Submit!</h1>
    <div class="container">
        <img src="../assets-landpage/cat.png" alt="cat">

    <?php 
    $nama = $_POST['nama'];
    $noTelp = $_POST['noTelp'];
    $email = $_POST['email'];

    echo "Nama : $nama";
    echo "<br>";
    echo "No. Telp : $noTelp";
    echo "<br>";
    echo "Email : $email";
    ?>
    </div>
</body>
</html>




