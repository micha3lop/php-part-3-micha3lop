<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['remember'])) {
        setcookie('username', $_POST['username'], time()+3600*24);
    }
}

$username = $_COOKIE['username'] ?? 'Guest';

echo "Welcome " . htmlspecialchars($username);
?>

<form method="post">
    Username: <input type="text" name="username" required><br>
    <input type="checkbox" name="remember"> Remember Me<br>
    <input type="submit" value="Submit">
</form>
