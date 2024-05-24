<?php
require 'db_connection.php';

$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $conn->prepare("SELECT id, password FROM aws WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo '<script>alert("L\'utente non risulta nel DB"); window.location.href = "login.html";</script>';
} else {
    $user = $result->fetch_assoc();

    // Verifica la password utilizzando MD5
    if (md5($password) === $user['password']) {
        session_start();
        $_SESSION['id_utente'] = $user['id'];
        header('Location: indexlog.php');
        exit(); 
    } else {
        echo '<script>alert("Credenziali errate"); window.location.href = "login.html";</script>';
    }
}

$stmt->close();
$conn->close();
?>
