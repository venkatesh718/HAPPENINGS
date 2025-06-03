<?php
include 'db.php';
$user_name = $_POST['user_name'];
$review_text = $_POST['review_text'];
$sql = "INSERT INTO reviews (user_name, review_text) VALUES ('$user_name', '$review_text')";
mysqli_query($conn, $sql);
header("Location: event-main.php");
?>