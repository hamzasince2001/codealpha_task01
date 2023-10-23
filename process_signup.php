<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['name'];
    $upassword = $_POST['password'];
    $uemail = $_POST['email'];
    
    // Create a database connection
    $conn = mysqli_connect("localhost", "root", "", "codealpha");

    // Check the database connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Define the SQL query to insert data into the 'abc' table
    $sql = "INSERT INTO user (uname, upassword, uemail) VALUES ('$uname', '$upassword',  '$uemail')";

    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}

?>
