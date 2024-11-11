<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database
$databaseName = "vaibhav";
$sql = "CREATE DATABASE IF NOT EXISTS $databaseName";
if (mysqli_query($conn, $sql)) {
    echo "Database '$databaseName' created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Select the database
mysqli_select_db($conn, $databaseName);

// Create the table
$sql = "CREATE TABLE IF NOT EXISTS employees (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    department VARCHAR(50),
    salary DECIMAL(10, 2),
    age INT
)";
if (mysqli_query($conn, $sql)) {
    echo "Table 'employees' created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Insert data into the table
$sql = "INSERT INTO employees (name, department, salary, age) VALUES
    ('Alice', 'HR', 55.44, 33),
    ('Blice', 'HR2', 57.44, 38),
    ('Clice', 'HR3', 444.44, 32),
    ('Dlice', 'HR4', 888.44, 31),
    ('Elice', 'HR5', 666.44, 38)";

if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully";
} else {
    echo "Error inserting records: " . mysqli_error($conn);
}

//4 SELECT DATA with WHERE ,LIKE,AND,OR

echo "<h3>SELECT Quary with WHERE, LIKE, AND, OR</h3>";

// Close the connection
mysqli_close($conn);
?>
