<?php
include 'db.php';

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if ($username && $password) {
    $stmt = $conn->prepare("SELECT password FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            echo "Login exitoso";
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
    $stmt->close();
} else {
    echo "Faltan datos";
}

$conn->close();
?>
