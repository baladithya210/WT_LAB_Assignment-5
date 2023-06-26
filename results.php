<?php
// Get the registration number, semester number, and category number from user input
$regNo = $_POST['regNo'];
$semesterNo = $_POST['semesterNo'];
$catNo = $_POST['catNo'];

// Prepare and execute the SQL query to retrieve subject-wise marks
$sql = "SELECT DBMS, WT, Python FROM marks WHERE student_rollno = $regNo AND semester_no = $semesterNo AND cat_no = $catNo";
$result = $conn->query($sql);

// Check if the query executed successfully
if ($result === false) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    // Display the subject-wise marks
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $dbmsMarks = $row['DBMS'];
        $wtMarks = $row['WT'];
        $pythonMarks = $row['Python'];

        echo "DBMS Marks: " . $dbmsMarks . "<br>";
        echo "WT Marks: " . $wtMarks . "<br>";
        echo "Python Marks: " . $pythonMarks . "<br>";
    } else {
        echo "No results found.";
    }
}

// Close the database connection
$conn->close();
?>