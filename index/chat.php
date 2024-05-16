<?php
include 'db_config.php';

$sql = "SELECT username, message, timestamp FROM messages ORDER BY timestamp ASC";
$result = $conn->query($sql);

$messages = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}

$conn->close();
echo json_encode($messages);
?>
