<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];
        header("Location: welcome.php");
        exit();
    } else {
        echo "<script>alert('Nombre de usuario o contraseña incorrectos');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
</head>
<body>

<img class="img-quiz" src="img/bg.png" alt="">


    <h2 class="login-title">Iniciar Sesión</h2>

    <div class="container-div">


       <div class="div-right">
            <form method="POST" action="">
                <label for="username">Nombre de Usuario:</label> <br>
                <input class="input-3d" type="text" id="username" name="username" required><br><br>
                <label for="password">Contraseña:</label><br>
                <input class="input-3d" type="password" id="password" name="password" required><br><br><br>
                <button class="btn-log" type="submit">Iniciar Sesión</button>
            </form>
        </div>

    </div>
 
</body>
</html>
