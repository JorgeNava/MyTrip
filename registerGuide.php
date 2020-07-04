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

    <link rel="stylesheet" href="css/style-registerGuide.css">
    <title>Regsiter</title>
</head>

<body>
    <main>
        <section class="A-register">
            <div class="A_content-register">
                <h2 class="A_headerText-register">GUIDE NOW</h2>
                <p>help spread the enjoy of our world !</p>
            </div>
            <div class="img_back-register"></div>
        </section>

        <form class="form-register" method="POST" name="form-work" action="logica/registrarGuia.php">
            <header>
                <a href="index.php"><h2>MY</h2></a>
            </header>
            <div class="row">
                <div class="row-element">
                    <p>Name</p>
                    <input name="nombre" class="input-1" type="text">
                </div>
                <div class="row-element">
                    <p>Fathers Lastname</p>
                    <input name="apellido_p" class="input-1" type="text">
                </div>
                <div class="row-element">
                    <p>Mothers Lastname</p>
                    <input  name="apellido_m" class="input-1" type="text">
                </div>
            </div>
            <div class="row">
                <div class="row-element">
                    <p>Nationality</p>
                    <select name="nacionalidad" id="nationality">
                        <option value="Mexican">Mexican</option>
                        <option value="American">American</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="row-element">
                    <p>Gender</p>
                    <select name="sexo" id="gender">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
                <div class="row-element">
                    <p>Birth Date</p>
                    <input name="fechaNacimiento" class="input-1" type="date">
                </div>
            </div>
            <div class="row">
                <div class="row-element">
                    <p>Telephone</p>
                    <input name="telefono" class="input-1" type="text">
                </div>
            </div>

            <div class="div-line"></div>

            <div class="row">
                <div class="row-element">
                    <p>Email</p>
                    <input name="email" class="input-2" type="text">
                </div>
                <div class="row-element">
                    <p>Username</p>
                    <input name="username" class="input-1" type="text">
                </div>
                <div class="row-element">
                    <p>Password</p>
                    <input name="clave" class="input-1" type="password">
                </div>
            </div>

            <div class="div-line"></div>

            <div class="row">
                <div class="row-element">
                    <p>PayPal Email</p>
                    <input name="emailPayPal" class="input-2" type="text">
                </div>
                <div class="row-element">
                    <p>Card Number</p>
                    <input name="numTarjeta" class="input-1" type="text">
                </div>
                <div class="row-element">
                    <p>Expiration Date</p>
                    <input name="vencimientoTarjeta" class="input-1" type="date">
                </div>
            </div>

            <div class="save-zone">
                <button type="submit" class="btn"><p>Continue</p></button>
                <a class="guide-register" href="register.php">Join us as a Tourist!</a>
            </div>
        </form>
    </main>
</body>

</html>