<?php
// Include the SQL file
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Read the SQL file and execute its contents
$sqlFile = 'database.sql';
$sqlContents = file_get_contents($sqlFile);

if (mysqli_multi_query($conn, $sqlContents)) {
    echo "Database setup and initial data inserted successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
