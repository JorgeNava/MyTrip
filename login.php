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

    <link rel="stylesheet" href="css/style-login.css">    
    <title>Login</title>
</head>
<body>
    <main>
        <div class="card">
            <section class="image-section">
                <img src="img/login.png" alt="">
                <a href="register.php">Create an account</a>
            </section>
        
            <section class="content-section">
                <header>
                    <p>Sign in</p>
                </header>
                <form action="logica/loguear.php" method="POST">
                    <div class="element">
                        <input name="usuario" type="text" placeholder="Username">
                    </div>
                    <div class="element">
                        <input name="clave" type="Password" placeholder="Password">
                    </div>
                    <div class="element">
                        <input type="checkbox" name="" id="box">
                        <p>Remeber me</p>
                    </div>
                    <div class="save-zone">
                        <button type="submit" class="btn"><p>Log in</p></button>
                    </div>
                </form>

                <div class="alt-login">
                    <p>Or login with</p>
                    <img src="img/Iconos/alt_login.png" alt="">
                </div>
            </section>    
        </div>
    </main>
</body>
</html> 