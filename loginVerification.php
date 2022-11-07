<?php

$email = $_POST['email'];
$password = $_POST['password'];

$mysqli = new mysqli("localhost", "root", "", "se_project");

$sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        
        $sql = "SELECT * FROM login WHERE email = '$email'";
        // session start
        session_start();
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $email;
        header("Location:home.php");
    } else {
        echo "Invalid email or password.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
?>