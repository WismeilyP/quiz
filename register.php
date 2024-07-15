<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Verificar si el nombre de usuario ya existe
    $check_query = "SELECT * FROM users WHERE username='$username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Nombre de usuario ya existe
        echo "<script>alert('El nombre de usuario ya está registrado. Por favor, elige otro.');</script>";
    } else {
        // Insertar el nuevo usuario
        $query = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registro exitoso');</script>";
            header("Location: login.php");
            exit();
        } else {
            echo "<script>alert('Error en el registro');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
</head>
<body>

    <img class="img-quiz-two" src="img/congrat.png" alt="">

    <h2 class="login-title">Registrarse</h2>
    <form method="POST" action="">
        <label for="name">Nombre:</label><br>
        <input class="input-3d" type="text" id="name" name="name" required><br><br>
        <label for="username">Nombre de Usuario:</label><br>
        <input class="input-3d" type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label><br>
        <input class="input-3d" type="password" id="password" name="password" required><br><br><br>
        <button class="btn-log" type="submit">Registrarse</button>
    </form>
</body>
</html>
