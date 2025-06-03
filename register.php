<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_id = $_POST['event_id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO registrations (event_id, full_name, email, phone) VALUES ('$event_id', '$full_name', '$email', '$phone')";
    mysqli_query($conn, $sql);
    echo "Registration successful!";
}
?>
<form method="POST">
    <input name="event_id" placeholder="Event ID" required>
    <input name="full_name" placeholder="Full Name" required>
    <input name="email" placeholder="Email" required>
    <input name="phone" placeholder="Phone" required>
    <button type="submit">Register</button>
</form>