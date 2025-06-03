<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM events ORDER BY date LIMIT 6");
while($row = mysqli_fetch_assoc($result)) {
    echo "<div><h2>{$row['title']}</h2><p>{$row['date']} - {$row['location']}</p></div>";
}
?>
<form action="submit-review.php" method="POST">
    <input type="text" name="user_name" placeholder="Your Name" required>
    <textarea name="review_text" placeholder="Your Review" required></textarea>
    <button type="submit">Submit Review</button>
</form>