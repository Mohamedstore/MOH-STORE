<?php
// Start session to manage user sessions
session_start();

// Database connection
$servername = "localhost"; 
$username = "root";     
$password = "";            
$dbname = "login";        


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $whatsapp = mysqli_real_escape_string($conn, $_POST['whatsapp']);



    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO user (users, pass, whatsapp) VALUES (?, ?, ?)");

    // Check if the prepare() method succeeded
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind the parameters
    $stmt->bind_param("sss", $uname, $password, $whatsapp);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to login page or home page after successful registration
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <nav class="navbar background">
        <div class="logo">
            <a href="index.php"><img src="image/mohlogo5.jpg" alt="Logo"></a>
        </div>
        <ul class="nav-list">
        <div class="underline-animation"> <li><a href="Botpage.php">BOTS </a></li> </div> 
          <div class="underline-animation"> <li><a href="Recour.php">Resources</a></li></div> 
          <div class="underline-animation"> <li><a href="support.php"> Support </a> </li> </div> 
        </ul>
        <div class="rightnav">
            <div class="login-bar">
                <button class="btn btn-sm"><a href="login.php">Login</a></button>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <h2>User Registration</h2>
        <form action="register.php" method="post">
            <input type="text" name="uname" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="whatsapp" placeholder="Enter your WhatsApp Number" required>
            <button type="submit">Signup</button>
        </form>
    </div>

    <footer class="background">
        <p class="text-footer">Copyright ©-All rights are reserved by MOH</p>
    </footer>
</body>
</html>
