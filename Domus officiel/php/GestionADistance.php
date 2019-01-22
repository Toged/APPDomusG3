<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="UTF-8">
        <title>Contrôle ton habitat à distance!</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style_a_distance.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="header_V.1.js"></script>
    </head>
    <header>
        <div class="container">
            <nav class="ordinateur">
                <a href="#"><img src="logo_domus_blanc.png" alt="logo" class="logo"></a>
                <ul>
                    <li class="active"><a href="#">Accueil</a></li>
                    <li><a href="#">Nos Offres</a></li>
                    <li><a href="#">Nos Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><span onclick="openNav('mySidepane1','500px')" ><a href="#">Se connecter</a></span>
                        <div id="mySidepane1" class="sidepane1" >
                            <p>Identifiant</br></p>
                            <form action="" class="formulaire">
                                <input type="text" name="Identifiant" placeholder="Identifiant">
                            </form>
                            <p>Mot de passe</p>
                            <form>
                                <input type="text" name="Mot de passe" placeholder="Mot de Passe" >
                            </form></br>
                            <a href="#">Se connecter</a></br>
                            <a href="#">Créer un compte</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <nav class="mobile">
                <div class="bar-btn">
                    <img src="menu32.png" class="menu">
                    <img src="close-cross32.png" class="close">
                </div>
                <ul>
                    <li class="active"><a href="#">Accueil</a></li>
                    <li><a href="#">Nos Offres</a></li>
                    <li><a href="#">Nos Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Se Connecter</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <body>
            <!--Home page style-->
    

        <!-- Sections -->
        <section id="service" class="service sections">
            <div class="container">
                <div class="heading text-center">
                    <h1>Contrôles...</h1>
                    <div class="separator"></div>
                </div>
                <!-- Example row of columns -->
                <div class="row">
                    <div class="wrapper">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-pencil"></i>
                                <a href="GestionEclairage.php"><h5>...les lumières</h5></a>
                                <div class="separator2"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
                            </div>
                        </div> 

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-camera-retro"></i>
                                <a href="GestionPositionVolets.php"><h5>...les volets</h5></a>
                                <div class="separator2"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
                            </div>
                        </div> 

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-lightbulb-o"></i>
                                <a href="GestionTemperature.php"><h5>...la température</h5></a>
                                <div class="separator2"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
                            </div>
                        </div> 

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-lock"></i>
                                <h5>...la sûreté</h5>
                                <div class="separator2"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>
    </body>
    <footer>
        <div class="footer_container">
            <div class="footer_menu">
                <ul>
                    <li>MENU</li>
                    <li>Accueil</li>
                    <li>Nos Offres</li>
                    <li>Contact</li>
                    <li>Se Connecter</li>
                </ul>   
            </div>
            <div class="footer_icons">
                <img src="facebook.png" class="fb_icon">
                <img src="instagram.png" class="insta_icon">
                <img src="twitter.png" class="twitter_icon">
            </div>
            <div class="footer_copyright">©Copyright 2018</div>
        </div>
    </footer>
</html>
