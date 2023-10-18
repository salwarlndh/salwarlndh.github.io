<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <div class="form">
        <img src="../assets/rektorat.jpg" alt="">
        <div class="form-container">
            <h1>Masuk</h1><hr>
            <form action="dashboard.php">
                <input type="text" name="username" placeholder="Username" class="textfield">
                <input type="password" name="password" placeholder="Password" class="textfield">
                <div class="remember">
                    <input type="checkbox" name="remember" value="true">
                    <label for="remember">Ingat username ini</label>
                </div>
                <input type="submit" value="Masuk" class="login-btn">
            </form>
        </div>
    </div>
</body>
</html>