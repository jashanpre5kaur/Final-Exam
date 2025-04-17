<?php include 'header.php'; ?>
<?php include 'final_connection.php'; ?>

<?php
// Handle form submission
if (isset($_POST['submit'])) {
    $msg = $conn->real_escape_string($_POST['message']);
    $sql = "INSERT INTO string_info (message) VALUES ('$msg')";
    if ($conn->query($sql)) {
        echo "Message saved successfully!<br>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST" action="">
    <input type="text" name="message" maxlength="50" required>
    <button type="submit" name="submit">Submit</button>
</form>

<br>
<a href="showAll.php">Show all records</a>
