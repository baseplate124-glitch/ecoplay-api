<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode(["status" => "error", "message" => "No se recibió JSON"]);
    exit;
}

$username = $data["username"];
$password = password_hash($data["password"], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success", "message" => "Usuario registrado"]);
} else {
    echo json_encode(["status" => "error", "message" => $conn->error]);
}

$conn->close();
?>
