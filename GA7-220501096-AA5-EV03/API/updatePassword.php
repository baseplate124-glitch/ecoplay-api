<?php
include 'db.php';
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if ($data === null || !isset($data["username"]) || !isset($data["new_password"])) {
    echo json_encode(["status" => "error", "message" => "Faltan datos"]);
    exit;
}

$username = trim($data["username"]);
$new_password = password_hash(trim($data["new_password"]), PASSWORD_DEFAULT);

$sql = "UPDATE usuarios SET password = '$new_password' WHERE username = '$username'";
$result = $conn->query($sql);

if ($conn->affected_rows > 0) {
    echo json_encode(["status" => "success", "message" => "Contraseña actualizada"]);
} else {
    echo json_encode(["status" => "error", "message" => "Usuario no encontrado"]);
}

$conn->close();
?>
