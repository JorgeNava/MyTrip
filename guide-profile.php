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
    
    <link rel="stylesheet" href="css/style-profile.css">
    <title>My Trip - Guides Profile</title>
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
        <section class="head-section">
            <div class="bck-layer">
                <div class="head-content">
                    <h1>Eder Marquez Murillo <br><p>Guadalajara, Jalisco, México</p></h1>
                    <button type="button" class="shrbttn">Share Profile</button>
                </div>
            </div>
        </section>  
        <section class="main-section">
            <div class="marging-div">
                <aside class="aside-profile">
                    <div class="profile-img">
                        <a href="reservation.php"><button type="button" class="cntctbttn">Contact Eder</button></a>
                        <button type="button" class="optionbttn">...</button>
                    </div>
                    <div class="profile-content">
                        <div class="padding-content">
                            <h1>About</h1>
                            <p>
                                Let me show you the greateast parts of my city,
                                the place where I´ve been living since I had 5 years old,
                                I love to share the amazing places I´ve discovered during
                                my lifetime here. If you love to be always moving and exercising like me
                                don´t doubt on calling on me, I can show you the places that wont make 
                                you forget Guadalajara ever.
                            </p>
                            <div class="profile-details">
                                <div class="details-row">
                                    <p>Tours complete</p> 
                                    <b>24</b>
                                </div>
                                <div class="details-row">
                                    <p>Guide Rating</p>
                                    <b>Stars</b>
                                </div>
                                <div class="details-row">
                                    <p>Reviews</p>
                                    <b>18</b>
                                </div>
                            </div>
                            <div class="profile-special">
                                <p>I can show you:</p>
                                <ul>
                                    <div class="special-column">
                                        <li><p>Sport Zones</p></li>
                                        <li><p>Stadiums</p></li>
                                        <li><p>Sport Events</p></li>
                                    </div>
                                    <div class="special-column">
                                        <li><p>Extreme Sports Zones</p></li>
                                        <li><p>Gym Sports</p></li>
                                    </div>
                                </ul>
                            </div>
                            <div class="profile-leng">
                                <p>We can always talk on</p>
                                <ul>
                                    <li><p>English</p></li>
                                    <li><p>Spanish</p></li>
                                    <li><p>Japanese</p></li>
                                </ul>
                            </div>
                            <div class="profile-footer">
                                <h2>MY</h2>
                                <div class="p-footer-d"></div>
                            </div>
                        </div>
                    </div>
                </aside>
                <section class="profile-reviews">
                    <div class="extra-section">
                        <img src="img/Paisajes/centro.jpg" alt="">
                        <img src="img/Paisajes/parque.jpg" alt="">
                        <img src="img/Paisajes/poli.jpg" alt="">
                        <img src="img/Paisajes/estadio.jpg" alt="">
                    </div>
                    <div class="main-reviews">
                        <div class="review-row">
                            <div class="row-content">
                                <div class="image-review">
                                    <img src="img/Personas/hombre5.jpeg" alt="">
                                    <p>Juan Pablo M.</p>
                                </div>
                                <div class="text-review">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aut voluptate esse ullam quis optio distinctio itaque, laborum quae neque, asperiores sequi eum repellendus suscipit sed possimus maiores exercitationem!</p>
                                    <p>14 April 2020</p>
                                </div>
                            </div>
                            <div class="review-div"></div>
                        </div>
                        <div class="review-row">
                            <div class="row-content">
                                <div class="image-review">
                                    <img src="img/Personas/mujer11.jpeg" alt="">
                                    <p>Octavio Carrillo D.</p>
                                </div>
                                <div class="text-review">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aut voluptate esse ullam quis optio distinctio itaque, laborum quae neque, asperiores sequi eum repellendus suscipit sed possimus maiores exercitationem!</p>
                                    <p>14 April 2020</p>
                                </div>
                            </div>
                            <div class="review-div"></div>
                        </div>
                        <div class="review-row">
                            <div class="row-content">
                                <div class="image-review">
                                    <img src="img/Personas/mujer8.jpeg" alt="">
                                    <p>Nathali Moreno R.</p>
                                </div>
                                <div class="text-review">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aut voluptate esse ullam quis optio distinctio itaque, laborum quae neque, asperiores sequi eum repellendus suscipit sed possimus maiores exercitationem!</p>
                                    <p>14 April 2020</p>
                                </div>
                            </div>
                            <div class="review-div"></div>
                        </div>
                        <div class="review-row">
                            <div class="row-content">
                                <div class="image-review">
                                    <img src="img/Personas/mujer1.jpeg" alt="">
                                    <p>Octavio Carrillo D.</p>
                                </div>
                                <div class="text-review">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aut voluptate esse ullam quis optio distinctio itaque, laborum quae neque, asperiores sequi eum repellendus suscipit sed possimus maiores exercitationem!</p>
                                    <p>14 April 2020</p>
                                </div>
                            </div>
                            <div class="review-div"></div>
                        </div>
                        <div class="review-row">
                            <div class="row-content">
                                <div class="image-review">
                                    <img src="img/Personas/mujer2.jpeg" alt="">
                                    <p>Octavio Carrillo D.</p>
                                </div>
                                <div class="text-review">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aut voluptate esse ullam quis optio distinctio itaque, laborum quae neque, asperiores sequi eum repellendus suscipit sed possimus maiores exercitationem!</p>
                                    <p>14 April 2020</p>
                                </div>
                            </div>
                            <div class="review-div"></div>
                        </div>
                        <div class="review-row">
                            <div class="row-content">
                                <div class="image-review">
                                    <img src="img/Personas/mujer4.jpeg" alt="">
                                    <p>Octavio Carrillo D.</p>
                                </div>
                                <div class="text-review">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aut voluptate esse ullam quis optio distinctio itaque, laborum quae neque, asperiores sequi eum repellendus suscipit sed possimus maiores exercitationem!</p>
                                    <p>14 April 2020</p>
                                </div>
                            </div>
                            <div class="review-div"></div>
                        </div>
                        <div class="review-row">
                            <div class="row-content">
                                <div class="image-review">
                                    <img src="img/Personas/hombre1.jpeg" alt="">
                                    <p>Octavio Carrillo D.</p>
                                </div>
                                <div class="text-review">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aut voluptate esse ullam quis optio distinctio itaque, laborum quae neque, asperiores sequi eum repellendus suscipit sed possimus maiores exercitationem!</p>
                                    <p>14 April 2020</p>
                                </div>
                            </div>
                            <div class="review-div"></div>
                        </div>
                        <div class="review-row">
                            <div class="row-content">
                                <div class="image-review">
                                    <img src="img/Personas/hombre2.jpeg" alt="">
                                    <p>Octavio Carrillo D.</p>
                                </div>
                                <div class="text-review">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aut voluptate esse ullam quis optio distinctio itaque, laborum quae neque, asperiores sequi eum repellendus suscipit sed possimus maiores exercitationem!</p>
                                    <p>14 April 2020</p>
                                </div>
                            </div>
                            <div class="review-div"></div>
                        </div>
                        <div class="review-row">
                            <div class="row-content">
                                <div class="image-review">
                                    <img src="img/Personas/hombre3.jpeg" alt="">
                                    <p>Octavio Carrillo D.</p>
                                </div>
                                <div class="text-review">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aut voluptate esse ullam quis optio distinctio itaque, laborum quae neque, asperiores sequi eum repellendus suscipit sed possimus maiores exercitationem!</p>
                                    <p>14 April 2020</p>
                                </div>
                            </div>
                            <div class="review-div"></div>
                        </div>
                        <div class="review-row">
                            <div class="row-content">
                                <div class="image-review">
                                    <img src="img/Personas/mujer9.jpeg" alt="">
                                    <p>Octavio Carrillo D.</p>
                                </div>
                                <div class="text-review">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eius aut voluptate esse ullam quis optio distinctio itaque, laborum quae neque, asperiores sequi eum repellendus suscipit sed possimus maiores exercitationem!</p>
                                    <p>14 April 2020</p>
                                </div>
                            </div>
                            <div class="review-div"></div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>







    <footer>
        <div class="f-column1">
            <a href="index.html">
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