<?php include 'header.php'; ?>
<?php include 'final_connection.php'; ?>

<?php
// Handle deletion
if (isset($_POST['delete'])) {
    $id = intval($_POST['string_id']);
    $deleteQuery = "DELETE FROM string_info WHERE string_id = $id";
    if ($conn->query($deleteQuery)) {
        echo "Record with ID $id deleted.<br>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Show all records
$result = $conn->query("SELECT * FROM string_info");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['string_id'] . " - Message: " . $row['message'] . "<br>";
    }
} else {
    echo "No records found.<br>";
}
?>

<br><br>
<form method="POST" action="">
    <input type="number" name="string_id" required placeholder="Enter ID to delete">
    <button type="submit" name="delete">Delete</button>
</form>
