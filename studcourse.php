<?php
include("connect.php");

// Assign a student to a course
$student_id = $_POST['student_id'];
$course_id = $_POST['course_id'];

$sql = "INSERT INTO marks (student_id, course_id) VALUES ('$student_id', '$course_id')";

if ($conn->query($sql) === TRUE) {
    echo "Student assigned to course successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
