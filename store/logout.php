

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="style/style1.css">
</head>
<body>
<?php
// Start the session
session_start();

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: login.php");
exit();
?>


    <nav class="navbar background">
        <div class="logo">
            <a href="index.php"><img src="image/mohlogo5.jpg" alt="Logo"></a>
        </div>
        <ul class="nav-list">
        <div class="underline-animation"> <li><a href="Botpage.php">BOTS </a></li> </div> 
          <div class="underline-animation"> <li><a href="Recour.php">Resources</a></li></div> 
          <div class="underline-animation"> <li><a href="support.php"> Support </a> </li> </div> 
        </ul>
    </nav>
    <div class="container">
        <h1>You have been logged out</h1>
        <p>Thank you for visiting. You have successfully logged out.</p>
        <a href="login.php" class="btn">Login Again</a> <a href="index.php"> Home Page  </a>
    </div>
    <footer class="background">
        <p class="text-footer">
            &copy; All rights reserved by MOH
        </p>
    </footer>
 
    
</body>
</html>
