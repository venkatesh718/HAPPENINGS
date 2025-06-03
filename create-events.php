<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';
    $title = $_POST['title'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $sql = "INSERT INTO events (title, category, date, location, price, description) VALUES ('$title', '$category', '$date', '$location', '$price', '$description')";
    mysqli_query($conn, $sql);
    header("Location: payment.php");
}
?>
<form method="POST">
    <input name="title" placeholder="Title" required>
    <input name="category" placeholder="Category" required>
    <input type="date" name="date" required>
    <input name="location" placeholder="Location" required>
    <input type="number" name="price" placeholder="Price" required>
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Create Event</button>
</form>