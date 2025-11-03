<?php
if(isset($_FILES['file'])) {
    $upload_dir = "uploads/";
    if(!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $target_file = $upload_dir . basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        echo "<img src='$target_file' width='200'>";
    } else {
        echo "File upload failed.";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    Select image to upload: <input type="file" name="file" required><br>
    <input type="submit" value="Upload Image">
</form>
