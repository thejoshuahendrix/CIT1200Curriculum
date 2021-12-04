<?php
//You have to use below codes as is.
//YOU ONLY Modify Year, Semester, your userID at line 17
$servername = "acad-classweb01";
$username = "cit1200A";
$password = "cit1200";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database - YOU ONLY Modify Year, Semester, your userID
//$sql = "CREATE DATABASE Fall2020_CIT1200_kuk";
$sql = "CREATE DATABASE Fall2020_CIT1200_hendrixj6183";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>