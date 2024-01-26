<?php
// Simulate user authentication (replace with actual authentication logic)
$validUsername = '21bce9268';
$validPassword = password_hash('vitap@!', PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === $validUsername && password_verify($password, $validPassword)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>
