<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            
        </div>
    </nav>
   

<div class="login-container">
    <h2>Login</h2>
    <form action="logi.php" method="post">
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">'. htmlspecialchars($_GET['error']) . '</p>';
        }
        ?>
        <input type="text" name="uname" placeholder="Username" >
        <input type="password" name="password" placeholder="Password" >
        <button type="submit">Login</button>
        <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
    </form>
</div>

    

    <footer class="background">
        <p class="text-footer">
            Copyright ©-All rights are reserved by MOH 
        </p>
    </footer>
</body>
</html>
