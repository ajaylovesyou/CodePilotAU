<?php
$conn = new mysqli("127.0.0.1", "root", "", "CodePilotAU");

if ($conn->connect_error) {
    die("Connection failed");
}

// Read JSON
$data = json_decode(file_get_contents("php://input"), true);

$session = $data['session_token'] ?? '';
$name    = $data['user_name'] ?? '';

if (!$session || !$name) {
    echo "Missing data";
    exit;
}

// Insert (or update same session)
$stmt = $conn->prepare("
    INSERT INTO user_sessions (session_token, user_name)
    VALUES (?, ?)
    ON DUPLICATE KEY UPDATE user_name = VALUES(user_name)
");

$stmt->bind_param("ss", $session, $name);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>