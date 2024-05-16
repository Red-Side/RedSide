<?php
include 'db_config.php';

$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
$message = $data['message'];

$sql = "INSERT INTO messages (username, message) VALUES ('$username', '$message')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error", "error" => $conn->error));
}

$conn->close();
?>
