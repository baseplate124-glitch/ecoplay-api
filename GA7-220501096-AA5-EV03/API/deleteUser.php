<?php
include 'db.php';
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if ($data === null || !isset($data["username"])) {
    echo json_encode(["status" => "error", "message" => "Faltan datos"]);
    exit;
}

$username = trim($data["username"]);

$sql = "DELETE FROM usuarios WHERE username = '$username'";
$result = $conn->query($sql);

if ($conn->affected_rows > 0) {
    echo json_encode(["status" => "success", "message" => "Usuario eliminado"]);
} else {
    echo json_encode(["status" => "error", "message" => "Usuario no encontrado"]);
}

$conn->close();
?>
