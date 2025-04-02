<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "File uploaded successfully. <a href='$target_file'>Click here </a>to view your file";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>
