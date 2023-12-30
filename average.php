<?php
 include("connect.php");

// Calculate average marks for each student
$sql = "SELECT students.id AS student_id, students.name AS student_name, AVG(marks.score) AS average_score
        FROM students
        LEFT JOIN marks ON students.id = marks.student_id
        GROUP BY students.id, students.name";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Student ID: " . $row['student_id'] . " | Student Name: " . $row['student_name'] . " | Average Score: " . $row['average_score'] . "<br>";
    }
} else {
    echo "No records found";
}

$conn->close();
?>
