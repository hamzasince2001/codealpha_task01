<?php include'header.php'; ?>


<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codealpha";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["loginid"];
    $upassword = $_POST["password"];

    // Fetch user data from the database
    $sql = "SELECT * FROM user WHERE uemail = '$uname' AND upassword = '$upassword'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Valid credentials, set session and redirect
        $_SESSION['logged_in'] = true;
        $_SESSION['uname'] = $uname;
        header("Location: dash.php"); // Redirect to the desired page
        exit();
    } else {
        // Invalid credentials, show error or redirect to login page
        echo "Invalid credentials.";
    }
}

$conn->close();
?>

<?php include'footer.php'; ?>