<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&display=swap" rel="stylesheet">     <link rel="icon" href="img/LogoMyTrip.png">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="css/style-index.css">
    <title>My Trip</title>
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
                        error_reporting(0);
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

    <main class="main-guadalajara">
        <section class="city-title">
            <div class="img-back">
                <h2 class="titularCiudad">Guadalajara</h2>      
                <h3 class="subTitularCiudad">Discover a whole new world on</h3>
                <div class="city-title-buttons">
                    <button type="button" id="bttn1" class="city-button" onclick="alert('Hello world!')">About</button>
                    <button type="button" id="bttn2" class="city-button" onclick="alert('Hello world!')">Guides</button>    
                </div>
            </div>
        </section>
        <section class="city-guides-intro">
            <div class="intro-guides">
                <div class="intro-guide">
                    <img class="documentosIcon" src="img/Iconos/DocumentosIcon.png" alt="Icono Documentos">
                    <h3>Experience</h3>
                    <p>Nuestros guías son personas comunes que conocen su ciudad de la manera más natural y orgánica posible al vivir y pasar tiempo en ellas</p>
                </div>
                <div class="intro-guide">
                    <img class="documentosIcon" src="img/Iconos/ContactIcon.png" alt="Icono Documentos">
                    <h3>Our Guides</h3>
                    <p>Nuestros guías son personas comunes que conocen su ciudad de la manera más natural y orgánica posible al vivir y pasar tiempo en ellas</p>
                </div>
                <div class="intro-guide">
                    <img class="documentosIcon" src="img/Iconos/PersonIcon.png" alt="Icono Documentos">
                    <h3>Security</h3>
                    <p>Nuestros guías son personas comunes que conocen su ciudad de la manera más natural y orgánica posible al vivir y pasar tiempo en ellas</p>
                </div>
            </div>
        </section>
        <section class="city-guides">
            <h1>Guadalajara Guides</h1>
            <div class="row">
                <a class="row-a" href="guide-profile.php">
                    <div class="profile-card">
                        <img src="img/Personas/hombre2.jpeg" alt="">  
                        <div class="profile-content">
                            <p>JavIer Altozano Guerrilla</p>
                            <div class="guide-stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <div class="guide-tours-1">
                                <div class="guide-tours">
                                    <div class="tours-label">
                                        <p>Tours Made</p>
                                    </div>
                                    <div class="tours-number">
                                        <p>11</p>
                                    </div>
                                </div>
                            </div>
                            <div class="guide-descr">
                                <p>¿Qué tal?! Soy Javier <br></p>
                            </div>
                            <div class="guide-esp">
                                <p>Soy perfecto para mostrarte:</p>
                                <ul>
                                    <li><p>Restaurantes</p></li>
                                    <li><p>Gastronomia local</p></li>
                                    <li><p>Eventos locales</p></li>
                                    <li><p>Bares</p></li>
                                    <li><p>Plazas</p></li>
                                </ul>
                            </div>
                            <div class="guide-leng">
                                <p>Podemos conversar en</p>
                                <ul>
                                    <li><p>Español</p></li>
                                    <li><p>Ingles</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="row-a" href="guide-profile.php">
                <div class="profile-card">
                    <img src="img/Personas/mujer11.jpg" alt="">
                    <div class="profile-content">
                        <p>Rudbely Nathali Moreno Renteria</p>
                        <div class="guide-stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="guide-tours-1">
                            <div class="guide-tours">
                                <div class="tours-label">
                                    <p>Tours Made</p>
                                </div>
                                <div class="tours-number">
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                        <div class="guide-descr">
                            <p>¿Nuevo en Guadalajara? Genial! <br></p>
                        </div>
                        <div class="guide-esp">
                            <p>Soy perfecta para mostrarte:</p>
                            <ul>
                                <li><p>Arte</p></li>
                                <li><p>Galerias</p></li>
                                <li><p>Música</p></li>
                                <li><p>Museos</p></li>
                                <li><p>Teatros</p></li>
                            </ul>
                        </div>
                        <div class="guide-leng">
                            <p>Podemos conversar en</p>
                            <ul>
                                <li><p>Español</p></li>
                                <li><p>Ingles</p></li>
                                <li><p>Japones</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </a>
                <a class="row-a" href="guide-profile.php">
                <div class="profile-card">
                    <img src="img/Personas/hombre3.jpeg" alt="">
                    <div class="profile-content">
                        <p>Ernesto Rubio Padilla</p>
                        <div class="guide-stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="guide-tours-1">
                            <div class="guide-tours">
                                <div class="tours-label">
                                    <p>Tours Made</p>
                                </div>
                                <div class="tours-number">
                                    <p>21</p>
                                </div>
                            </div>
                        </div>
                        <div class="guide-descr">
                            <p>¿El amor de mi vida? ¡Guadalajara! <br></p>
                        </div>
                        <div class="guide-esp">
                            <p>Soy perfecto para mostrarte:</p>
                            <ul>
                                <li><p>Zonas de Aventuras</p></li>
                                <li><p>Restaurantes</p></li>
                                <li><p>Todo tipo de comidas</p></li>
                                <li><p>Historia de México</p></li>
                            </ul>
                        </div>
                        <div class="guide-leng">
                            <p>Podemos conversar en</p>
                            <ul>
                                <li><p>Español</p></li>
                                <li><p>Ingles</p></li>
                                <li><p>Frances</p></li>
                            </ul>
                            <ul>
                                <li><p>Italiano</p></li>
                                <li><p>Japones</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="row">
                <a class="row-a" href="guide-profile.php">
                <div class="profile-card">
                    <img src="img/Personas/mujer2.jpeg" alt="">  
                    <div class="profile-content">
                        <p>Jimena Ortiz Navarro</p>
                        <div class="guide-stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="guide-tours-1">
                            <div class="guide-tours">
                                <div class="tours-label">
                                    <p>Tours Made</p>
                                </div>
                                <div class="tours-number">
                                    <p>8</p>
                                </div>
                            </div>
                        </div>
                        <div class="guide-descr">
                            <p>Amaras Guadalajara, te lo aseguro <br></p>
                        </div>
                        <div class="guide-esp">
                            <p>Soy perfecta para mostrarte:</p>
                            <ul>
                                <li><p>Atractivos Naturales</p></li>
                                <li><p>Caminatas por bosques y montañas</p></li>
                                <li><p>Paisajes hermosos que te quitaran el aliento</p></li>
                                <li><p>Diversión garantizada en tus viajes</p></li>
                            </ul>
                        </div>
                        <div class="guide-leng">
                            <p>Podemos conversar en</p>
                            <ul>
                                <li><p>Español</p></li>
                                <li><p>Ingles</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </a>
                <a class="row-a" href="guide-profile.php">
                <div class="profile-card">
                    <img class="image-edit-1" src="img/Personas/mujer11.jpg" alt="">  
                    <div class="profile-content">
                        <p>Octavio Paz C.</p>
                        <div class="guide-stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <div class="guide-tours-1">
                            <div class="guide-tours">
                                <div class="tours-label">
                                    <p>Tours Made</p>
                                </div>
                                <div class="tours-number">
                                    <p>24</p>
                                </div>
                            </div>
                        </div>
                        <div class="guide-descr">
                            <p>¿Listos para descubrir la mejor cara de Guadalajara? <br></p>
                        </div>
                        <div class="guide-esp">
                            <p>Soy perfecta para mostrarte:</p>
                            <ul>
                                <li><p>Zoologios y acuarios</p></li>
                                <li><p>Centros de diversion</p></li>
                                <li><p>Tequila</p></li>
                                <li><p>Spots de fotografia</p></li>
                            </ul>
                        </div>
                        <div class="guide-leng">
                            <p>Podemos conversar en</p>
                            <ul>
                                <li><p>Español</p></li>
                                <li><p>Ingles</p></li>
                                <li><p>Frances</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </a>
                <a class="row-a" href="guide-profile.php">
                <div class="profile-card">
                    <img src="img/Personas/hombre4.jpeg" alt="">  
                    <div class="profile-content">
                        <p>Eder Marquez Murillo</p>
                        <div class="guide-stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="guide-tours-1">
                            <div class="guide-tours">
                                <div class="tours-label">
                                    <p>Tours Made</p>
                                </div>
                                <div class="tours-number">
                                    <p>7</p>
                                </div>
                            </div>
                        </div>
                        <div class="guide-descr">
                            <p>Mi ciudad te asombrará <br></p>
                        </div>
                        <div class="guide-esp">
                            <p>Soy perfecto para mostrarte:</p>
                            <ul>
                                <li><p>Zonas deportivas</p></li>
                                <li><p>Estadios</p></li>
                                <li><p>Eventos deportivos</p></li>
                                <li><p>Zonas de deporte extremo</p></li>
                                <li><p>Gimnasios deportivos</p></li>
                            </ul>
                        </div>
                        <div class="guide-leng">
                            <p>Podemos conversar en</p>
                            <ul>
                                <li><p>Español</p></li>
                                <li><p>Ingles</p></li>
                                <li><p>Japones</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="row-2">
                <a class="row-a" href="guide-profile.php">
                <div class="profile-card">
                    <div class="profile-image">

                    </div>
                    <div class="profile-content">
                        <div class="column1">
                            <div class="guide-name">
                                <p>Eder Marquez Murillo</p>
                            </div>
                            <div class="guide-stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="guide-descr">
                                <p>¿Listos para descubrir la mejor cara de Guadalajara? <br></p>
                            </div>
                            <div class="guide-leng">
                                <p>Podemos conversar en</p>
                                <ul>
                                    <li><p>Español</p></li>
                                    <li><p>Ingles</p></li>
                                    <li><p>Japones</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column2">
                            <div class="guide-tours-1">
                                <div class="guide-tours">
                                    <div class="tours-label">
                                        <p>Tours Made</p>
                                    </div>
                                    <div class="tours-number">
                                        <p>32</p>
                                    </div>
                                </div>
                            </div>
                            <div class="guide-esp">
                                <p>Soy perfecto para mostrarte:</p>
                                <ul>
                                    <li><p>Zonas deportivas</p></li>
                                    <li><p>Estadios</p></li>
                                    <li><p>Eventos deportivos</p></li>
                                    <li><p>Zonas de deporte extremo</p></li>
                                    <li><p>Gimnasios deportivos</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </section>
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