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
        
        <link rel="stylesheet" href="css/style-reservation.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="scipts/script-reservation.js"></script>

        <title>Contact Eder Marquez</title>
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
        <div class="card">
            <div class="contact-card">
                <div class="image-contact">
                </div>
                <div class="content-contact">
                    <div class="header-content">
                        <h2>I´m Eder Marquez</h2>
                        <p>Guide since 2020</p>
                    </div>
                    <div class="div-content"></div>
                    <div class="trip-content">
                        <form class="form-register" method="POST" name="form-work" action="logica/registar-tour.php">
                            <div class="row">
                                <div class="column">
                                    <label for="fname">Date</label>
                                    <input name="fechaTour" type="date" id="dname" value="2020-09-09" style="width: 20vw;">
                                </div>
                                <div class="column">
                                    <label for="lname">Duration $35/hr</label>
                                    <select name="duracionTour" class="select-input">
                                        <option value="4:00">4 hours</option>
                                        <option value="5:00">5 hours</option>
                                        <option value="6:00">6 hours</option>
                                        <option value="7:00">7 hours</option>
                                        <option value="8:00">8 hours</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <label for="lname">Starting Time</label>
                                    <select name="horaDeEncuentro" class="select-input">
                                        <option value="5:00">5:00 am</option>
                                        <option value="5:30">5:30 am</option>
                                        <option value="6:00">6:00 am</option>
                                        <option value="6:30">6:30 am</option>
                                        <option value="7:00">7:00 am</option>
                                        <option value="7:30">7:30 am</option>
                                        <option value="8:00">8:00 am</option>
                                        <option value="8:30">8:30 am</option>
                                        <option value="9:00">9:00 am</option>
                                        <option value="9:30">9:30 am</option>
                                        <option value="10:00">10:00 am</option>
                                        <option value="10:30">10:30 am</option>
                                        <option value="11:00">11:00 am</option>
                                        <option value="11:30">11:30 am</option>
                                        <option value="12:00">12:00 pm</option>
                                        <option value="13:00">1:00 pm</option>
                                        <option value="13:00">1:30 pm</option>
                                        <option value="14:00">2:00 pm</option>
                                        <option value="13:00">2:30 pm</option>
                                        <option value="14:00">3:00 pm</option>
                                        <option value="13:00">3:30 pm</option>
                                        <option value="15:00">4:00 pm</option>
                                        <option value="13:00">4:30 pm</option>
                                        <option value="17:00">5:00 pm</option>
                                        <option value="17:30">5:30 pm</option>
                                        <option value="18:00">6:00 pm</option>
                                        <option value="18:30">6:30 pm</option>
                                        <option value="19:00">7:00 pm</option>
                                        <option value="19:30">7:30 pm</option>
                                        <option value="20:00">8:00 pm</option>
                                    </select>
                                </div>
                                <div class="column">
                                    <label for="lname">Meeting Place</label>
                                    <input name="lugarDeEncuentro" type="text" id="mtinput" placeholder="El Ranchito, Tlaquepaque" style="width: 20vw;">
                                </div>
                            </div>
                            <div class="mid-div"></div>
                            <div class="row">
                                <div class="column low-margin-row">
                                    <div class="row">
                                        <div class="column">
                                            <label for="lname">Adults</label>
                                            <select name="" class="select-input">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="column">
                                            <label for="lname">Children</label>
                                            <select name="" class="select-input">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="column">
                                            <label for="lname">+ Adults</label>
                                            <select name="adultosExtra" class="select-input">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                         <div class="column low-margin-row">
                                            <label for="lname">+ Children</label>
                                            <select name="niñosExtra" class="select-input">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="column include">
                                        <h3>What´s included</h3>
                                        <ul>
                                            <li>
                                                <p>Guide Fee</p>
                                            </li>
                                        </ul>
                                        <div id="jsAdder"></div>
                                        <button type="submit" onclick="obtenerCostoTour()" class="btn"><p>Book it</p></button>
                                </div>
                                <div class="column include">
                                    <h3>What´s not included</h3>
                                    <ul>
                                        <li>
                                            <p>Hotel Meetup</p>
                                        </li>
                                        <li>
                                            <p>Your transportation fee</p>
                                        </li>
                                        <li>
                                            <p>Guide transportation fee</p>
                                        </li>
                                        <li>
                                            <p>Lunch, Dinner, Entrance fee</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="extra-card">
                <div class="progress-bar">
                    <div class="progress-element current">
                        <a href="#">Information</a>
                    </div>
                    <div class="tri-current"></div>
                    <div class="tri-inv"></div>
                    <div class="progress-element">
                        <a href="payment.php">Payment</a>
                    </div>
                    <div class="tri"></div>
                    <div class="tri-inv"></div>
                    <div class="progress-element">
                        <a href="#">Done</a>
                    </div>
                    <div class="tri"></div>
                </div>
            </div>
        </div>
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