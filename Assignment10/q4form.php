<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['captcha'] == $_SESSION['captcha']) {
        echo "CAPTCHA verified successfully.";
    } else {
        echo "Invalid CAPTCHA.";
    }
}
?>

<form method="post">
    <img src="captcha.php" alt="CAPTCHA Image"><br>
    Enter CAPTCHA: <input type="text" name="captcha" required><br>
    <input type="submit" value="Verify">
</form>
