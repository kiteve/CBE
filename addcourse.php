<?php
include("connect.php");

// Add a new course
$name = $_POST['name'];
$sql = "INSERT INTO courses (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    echo "Course added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
