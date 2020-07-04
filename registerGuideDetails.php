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

    <link rel="stylesheet" href="css/style-registerGuideDetails.css">
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

        <form class="form-register" method="POST" name="form-work" action="logica/registrarGuiaDetalles.php">
            <header>
                <a href="index.php"><h2>MY</h2></a>
            </header>
            <div class="row">
                <div class="row-element">
                    <p>Talk us about you...</p>
                    <input name="descripcion" class="input-1" type="text">
                </div>
            </div>
            
            <div class="row">
                <div class="row-element">
                    <p>Tell us about the places you know most of your city</p>
                    <input name="especialidades" class="input-1" type="text">
                </div>
            </div>

            <div class="row">
                <div class="row-element">
                    <p>What languages do you think you know enough to give spoken tours?</p>
                    <input  name="idiomas" class="input-1" type="text">
                </div>
            </div>

            <div class="save-zone">
                <button type="submit" class="btn"><p>Register</p></button>
            </div>
        </form>
    </main>
</body>

</html>