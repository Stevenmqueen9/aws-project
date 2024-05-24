<?php
require 'db_connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM utenti WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "L'username non risulta nel database";
} else {
    $password = md5($password);
    $sql = "SELECT * FROM utenti WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['id_utente'] = $result->fetch_assoc()['id'];

        header('Location: indexlog.php');
        exit(); 
    } else {
        echo "Le credenziali non sono corrette";
    }
}

$conn->close();
?>
