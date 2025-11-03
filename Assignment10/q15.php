<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_SESSION['user'] ?? "Guest";
    $msg = "Feedback from $name: " . $_POST['feedback'];
    mail("admin@vit.ac.in", "Student Feedback", $msg, "From: noreply@vit.ac.in");
    echo "Thank you, $name. Feedback sent!";
}
?>

<form method="post">
    Feedback:<br>
    <textarea name="feedback" required></textarea><br>
    <input type="submit" value="Send Feedback">
</form>
