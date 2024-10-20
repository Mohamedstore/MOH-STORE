<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "login"; // Change to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST['uname']) && isset($_POST['password'])) {
        // Escape user inputs for security
        $username = $conn->real_escape_string($_POST['uname']);
        $password = $conn->real_escape_string($_POST['password']);

        // Query to check if the provided username and password exist in the database
        $sql = "SELECT * FROM user WHERE users='$username' AND pass='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Fetch user data
            $row = $result->fetch_assoc();

            // Store user information in session variables
            $_SESSION['username'] = $row['users'];
            $_SESSION['userid'] = $row['id']; // Assuming the column name for user id is 'id'

            // Successful login, redirect to a welcome page
            header("Location: index.php");
            exit();
        } else {
            // Invalid credentials, redirect back to the login page with an error message
            header("Location: login.php?error=Invalid username or password");
            exit();
        }
    } else {
        // Redirect back to the login page with an error message if either username or password is not provided
        header("Location: login.php?error=Please provide both username and password");
        exit();
    }
} else {
    // If someone tries to access this script directly without submitting the form, redirect them to the login page
    header("Location: login.php");
    exit();
}

// Close connection
$conn->close();
?>
