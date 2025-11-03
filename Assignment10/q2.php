<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['user'] == "admin" && $_POST['pass'] == "1234") {
        $_SESSION['user'] = "admin";
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>

<form method="post">
    Username: <input type="text" name="user" required><br>
    Password: <input type="password" name="pass" required><br>
    <input type="submit" value="Login">
</form>
