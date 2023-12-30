<?php
 include("connect.php");

// Add a new student
$name = $_POST['name'];
$sql = "INSERT INTO students (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    echo "Student added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
