<?php
$conn = new mysqli("127.0.0.1", "root", "", "CodePilotAU");

if ($conn->connect_error) {
    die("Connection failed");
}

// Read JSON input
$data = json_decode(file_get_contents("php://input"), true);

$name    = $data['sender_name'] ?? '';
$email   = $data['sender_email'] ?? '';
$subject = $data['subject'] ?? '';
$message = $data['message'] ?? '';
$session = $data['session_token'] ?? '';

if (!$name || !$email || !$subject || !$message || !$session) {
    echo "Missing data";
    exit;
}


$stmt = $conn->prepare("INSERT INTO contact_messages (session_token, name, email, subject, message)
VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $session, $name, $email, $subject, $message);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conn->close();
?>