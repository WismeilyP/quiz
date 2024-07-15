<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($name); ?>!</h1>
    <a href="quiz.php">Iniciar Quiz</a>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
