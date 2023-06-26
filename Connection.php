<?php
$host = 'localhost:3307';
$username = 'root';
$password = 'tarun'; // Replace 'your_password' with the actual password

$database = 'studentdetails';

// Establish the database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    // Handle the connection error
    throw new mysqli_sql_exception(mysqli_connect_error());
}

// Continue with your code

?>