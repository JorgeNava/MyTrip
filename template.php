<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&display=swap" rel="stylesheet">     <link rel="icon" href="img/LogoMyTrip.png">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-template.css">

    <link rel="stylesheet" href="css/style-template.css">    
    <title>Templates</title>
</head>
<body>
<header class="header">
        <aside class="aside-header">
            <a href="index.php"><h2>MY</h2></a>
        </aside>
        <nav class="navegador">
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Guides</a></li>
                <li><a href="index.php">FAQ</a></li>
                <li><a href="index.php">Contact</a></li>
            </ul>
            <div class="account-display">
                <img class="logo" id="logoIcon" src="img/LogoMyTrip.png" alt="">
                <div class="account-content">
                    <?php
                        session_start();
                        $usuario = $_SESSION['username'];
                        if(!isset($usuario)){
                            echo "<p>Welcome</p>";
                        }else{
                            echo "<p>Welcome $usuario</p>";
                            echo "<a href='logica/salir.php'>Salir</a>";
                        }
                    ?>
                    <div class="account-redirection">
                        <a href="login.php">Login</a>
                        <p>/</p>
                        <a href="register.php">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>

    </main>

    <footer>
        <div class="f-column1">
            <a href="index.php">
                <img class="logo" src="img/LogoMyTrip.png" alt="">
            </a>
        </div>
        <div class="f-column2">
            <p>My Trip</p>
            <p>This website is operated and maintened by MyTrip Company
                a non-convencional tour agency. We will always promote the 
                enjoyment of your own time in the way you want at any time.
            </p>
        </div>
        <div class="f-column3">
            <p>Site Links</p>
            <a href="index.php">Home</a>
            <a href="index.php">About</a>
            <a href="index.php">Guides</a>
            <a href="index.php">FAQ</a>
        </div>
        <div class="f-column4">
            <p>Contact Us</p>
            <p>+52 646 119 45 07</p>
            <p>mytripcontact@gmail.com</p>
            <p>Pedregal Playitas, Basalto #210</p>
            <p>22800, Ensenada, Baja California</p>
        </div>
        <div class="f-column5">
            <img src="img/Iconos/fb.png" alt="">
            <img src="img/Iconos/insta.png" alt="">
            <img src="img/Iconos/whats.png" alt="">
            <img src="img/Iconos/youtube.png" alt="">
        </div>
    </footer>
</body>
</html> 