<?php
include 'db.php';
header("Content-Type: application/json");

$sql = "SELECT id, username FROM usuarios";
$result = $conn->query($sql);

$users = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    echo json_encode(["status" => "success", "data" => $users]);
} else {
    echo json_encode(["status" => "error", "message" => "No hay usuarios registrados"]);
}

$conn->close();
?>
