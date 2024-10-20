
<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOH STORE</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <!-- index.php -->
    <nav class="navbar background">
        <div class="logo">
        <a href="index.php"><img src="image/mohlogo5.jpg" alt="Logo"></a>
        </div>
        <ul class="nav-list">
          <div class="underline-animation"> <li><a href="Botpage.php">BOTS </a></li> 
        <ul class ="service-list">
           <li> BOT BLACK TIGER </li>
           <li>BOT SONA </li>
           <li>BOTTON BOT</li>
        </ul>
        </div> 
          <div class="underline-animation"> <li><a href="Recour.php">Resources</a></li></div> 
          <div class="underline-animation"> <li><a href="support.php"> Support </a> </li> </div> 
        </ul>
        <div class="rightnav">
            <div class="login-bar">
                <?php
                session_start();
                if (isset($_SESSION['username'])) {
                    echo '<button class="btn btn-sm"><a href="logout.php">Logout (' . $_SESSION['username'] . ')</a></button>';
                } else {
                    echo '<button class="btn btn-sm"><a href="login.php">Login</a></button>';
                }
                ?>
            </div>
        </div>
    </nav>


    <div class="cover-image" alt="Description of your cover image"></div>

    <footer class="background">
        <p class="text-footer">
            Copyright ©-All rights are reserved by MOH
        </p>
    </footer>
</body>

</html>
