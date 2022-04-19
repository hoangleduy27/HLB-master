<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bien Dao Book</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon_HLB.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/email.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!--  -->

</head>

<body onload="myMap()">
    <div class="preload-bg">
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="navbar-wrap container-fluid">
        <nav class="container navbar">
            <div class="nav-left">
                <a href="#" class="logo__link">
                    <svg xmlns="http://www.w3.org/2000/svg" id="navbar-img" data-name="Layer 1 copy" viewBox="0 0 64 64" width="512" height="512">
                        <path d="M62,28l-2-1L55,17l-8-2-1,3.51V31a1,1,0,0,1-2,0V22.38L37,25l-.5,9.65,1.87-.8,4.83,1.79L47,32.9l5.24,3.95,7.81-1.72,1.92.58Zm-6,6a1,1,0,0,1-2,0V31a1,1,0,0,1,2,0Z" />
                        <path d="M7,8h4a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8Z" />
                        <path d="M55,9a1,1,0,0,0,1,1h4a1,1,0,0,0,0-2H56A1,1,0,0,0,55,9Z" />
                        <path d="M37.67,7a1,1,0,0,0,1,1H43a1,1,0,0,0,0-2H39.58A6,6,0,0,0,27.75,6H17a1,1,0,0,0,0,2H28.67a1,1,0,0,0,1-1,4,4,0,1,1,8,0Z" />
                        <path d="M5,20,3.78,34.07l2.64,2.64L10,35.52V34a1,1,0,0,1,2,0v.85l2.83-.94,5.92,1.69L27,32.12l3.6,3.8L30,25l-6-4-4-4V27a1,1,0,0,1-2,0V16.29Zm14,9a1,1,0,0,1,1,1v2a1,1,0,0,1-2,0V30A1,1,0,0,1,19,29Z" />
                        <path d="M40,43a5.8,5.8,0,0,0,3.1-.79,10.5,10.5,0,0,1,9.79,0,6.52,6.52,0,0,0,6.22,0,10.19,10.19,0,0,1,2.9-1V37.8l-2-.61-4.5,1L51.8,39,47,35.38l-3.5,2.5L38.42,36l-2,.87-.21,5,.71.34A5.8,5.8,0,0,0,40,43Z" />
                        <path d="M8,43a5.79,5.79,0,0,0,3.1-.79A9.72,9.72,0,0,1,16,41a9.72,9.72,0,0,1,4.89,1.21A5.79,5.79,0,0,0,24,43a5.8,5.8,0,0,0,3.1-.79,9.75,9.75,0,0,1,3.75-1.15L30.78,39l-2.13-2.24-2-2.14-1.42.79L21,37.75,14.88,36l-9,3-.48-.48L3.55,36.67,3,41.43a11.88,11.88,0,0,1,1.86.79A5.79,5.79,0,0,0,8,43Z" />
                        <path d="M64,43c-4,0-4,2-8,2s-4-2-8-2-4,2-8,2-4-2-8-2-4,2-8,2-4-2-8-2-4,2-8,2-4-2-8-2v9a1,1,0,0,1,1-1H19a1,1,0,0,1,0,2H1a1,1,0,0,1-1-1v8a1,1,0,0,1,1-1H4a1,1,0,0,1,0,2H1a1,1,0,0,1-1-1v4H64ZM53,51h4a1,1,0,0,1,0,2H53a1,1,0,0,1,0-2Zm-8,0h4a1,1,0,0,1,0,2H45a1,1,0,0,1,0-2ZM23,51H41a1,1,0,0,1,0,2H23a1,1,0,0,1,0-2Zm6,10H8a1,1,0,0,1,0-2H29a1,1,0,0,1,0,2Zm8,0H33a1,1,0,0,1,0-2h4a1,1,0,0,1,0,2Zm22,0H41a1,1,0,0,1,0-2H59a1,1,0,0,1,0,2Z" />
                    </svg>
                    <span>BienDao</span>
                </a>
            </div>

            <ul class="nav-right">
                <li class="nav-item nav-item-active">
                    <a href="index.php" class="nav-item__link">Home</a>
                    <span class="underline"></span>
                </li>
                <li class="nav-item">
                    <a href="details.php" class="nav-item__link">Details</a>
                    <span class="underline"></span>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-item__link">About</a>
                    <span class="underline"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-item__link" href="login/signIn.php" id="login-icon">
                        <i class="fas fa-user "></i>
                    </a>

                </li>
            </ul>
            <div class="bar-icon">
                <div class="bar1 bar"></div>
                <div class="bar2 bar"></div>
                <div class="bar3 bar"></div>
            </div>
        </nav>
        <div class="mobile-menu">
            <div class="mobile-menu-item">
                <a href="index.php" class="mobile-item__link">Home</a>
            </div>
            <div class="mobile-menu-item">
                <a href="details.php" class="mobile-item__link">Details</a>
            </div>
            <div class="mobile-menu-item">
                <a href="about.php" class="mobile-item__link">About</a>
            </div>
            <div class="mobile-menu-item">
                <a href="login/signIn.php" class="mobile-item__link mobile-login">Login</a>
            </div>
        </div>
    </div>

    <div id="header-bg" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/HLB_1.jpg" style="width: 100%;">
                <div class="carousel-shadow">
                    <span class="carousel-shadow-title" style="font-family: Georgia, 'Times New Roman', Times, serif">Biển Đảo Book</span>
                    <div class=" carousel__search-wrap">
                        <div class="carousel-search-input">
                            <input type="text" class="input-search" placeholder="Discover BienDao">
                            <div class="search-icon">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                </div>
                <div class="carousel__confirm">
                    <button class="confirm-btn">SEE MORE!</button>

                    <div class="carousel-confirm-details">
                        Welcome
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="count-wrap col-sm-4">
                    <div class="count-content fadeInUp">
                        <i class="fas fa-users"></i>
                        <div class="user-count count">500+</div>
                        <div class="count-title">Members</div>
                    </div>
                </div>
                <div class="count-wrap col-sm-4">
                    <div class="count-content fadeInUp" data-wow-delay="0.2s">
                        <i class="fas fa-comments"></i>
                        <div class="feedback-count count ">450+</div>
                        <div class="count-title">Feedback</div>
                    </div>
                </div>
                <div class="count-wrap col-sm-4 ">
                    <div class="count-content fadeInUp" data-wow-delay="0.4s">
                        <i class="fas fa-headphones-alt"></i>
                        <div class="service-count count">100%</div>
                        <div class="count-title">Support 24/7</div>
                    </div>
                </div>

            </div>
            <div class="row" style="justify-content: center;">
                <a href="details.html" class="details__link fadeInUp" data-wow-delay="0.4s">
                    See more
                </a>
            </div>
            <p class="top-comment-title fadeInUp">Reviews</p>
            <div class="row top-comment">
                <div class="comment-item-wrap col-sm-10 fadeInUp">
                    <div class="comment-item">
                        <img src="images/customer1.jpg" class="comment-img">
                        <p class="comment-name">Chris Fox</p>
                        <p class="customer-country">Australia</p>
                        <p class="comment-content">This is the best services I have ever seen. Vietnamese are very friendly and hospitable.</p>
                    </div>
                </div>
                <div class="comment-item-wrap col-sm-10 offset-md-2 fadeInUp" data-wow-delay="0.1s">
                    <div class="comment-item">
                        <img src="images/customer2.jpg" class="comment-img">
                        <p class="comment-name">Roseanne Park</p>
                        <p class="customer-country">Korea</p>
                        <p class="comment-content">I love Viet Nam. Wonderful country, friendly people. Hope you guys visit here.</p>
                    </div>
                </div>
                <div class="comment-item-wrap col-sm-10 fadeInUp" data-wow-delay="0.2s">
                    <div class="comment-item">
                        <img src="images/customer3.jpg" class="comment-img">
                        <p class="comment-name">David Beckham</p>
                        <p class="customer-country">England</p>
                        <p class="comment-content">This is the most greatest book i've ever seen.</p>
                    </div>
                </div>
                <div class="comment-item-wrap col-sm-10 offset-md-2 fadeInUp" data-wow-delay="0.3s">
                    <div class="comment-item">
                        <img src="images/customer4.jpg" class="comment-img">
                        <p class="comment-name">Taylor Swift</p>
                        <p class="customer-country">United States</p>
                        <p class="comment-content">Hoang Sa, Truong Sa are Viet Nam's.</p>
                    </div>
                </div>
                <div class="comment-item-wrap col-sm-10 fadeInUp" data-wow-delay="0.4s">
                    <div class="comment-item">
                        <img src="images/customer5.jpg" class="comment-img">
                        <p class="comment-name">An Khánh</p>
                        <p class="customer-country">Vietnam</p>
                        <p class="comment-content">Halong Bay, recognized by UNESCO in 1994, is one of the most attractive scenery.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Gui email  -->
        <section id="contact" class="add-padding border-top-color2">

            <div class="container infor-contact-wrap fadeInUp">
                <div class="row infor-contact">
                    <div class="contact-img-wrap col-md-6">
                        <video width="100%" height="90%" controls>
                            <source src="videos/biendao2.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="contact-img-wrap col-md-6">
                        <?php
                        include("./Gui email/contact.php")
                        ?>
                    </div>
                </div>





            </div>

    </div>

    </section>

    <div id="googleMap" style="width:100%;height:400px;"></div>

    <script>
        function myMap() {
            var num = new google.maps.LatLng(15.9754962, 108.2484754);
            var mapProp = {
                center: num,
                mapTypeId: google.maps.MapTypeId.HYBRID,
                zoom: 16,
            };
            var maps = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker = new google.maps.Marker({
                position: num,
                map: maps,
                title: "Lords Cricket Ground, London!"
            });
        }
    </script>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <div class="container-fluid app-footer fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-title">GENERAL</div>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">About Us</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Details</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Services</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Terms & Conditions</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Best Price Policy</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="footer-title">TRIP PLANNING</div>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">FAQs</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Weather</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Travel Updates</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Download Brochures</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Visa & Immigration</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-5">
                    <div class="footer-title">CONTACT INFORMATION</div>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <i class="fa fa-home"></i> Hoà Phong, Hoà Vang, Đà Nẵng
                        </li>
                        <li class="footer-item">
                            <i class="fa fa-phone"></i> 0123456789
                        </li>
                        <li class="footer-item">
                            <i class="fa fa-fax"></i> 0123456789
                        </li>
                        <li class="footer-item">
                            <i class="far fa-envelope"></i> hoangledung@gmail.com
                        </li>
                        <li class="footer-item">
                            <i class="far fa-registered"></i> Copy-right by Dung 2/2021
                        </li>
                        <li class="footer-item">

                        </li>
                    </ul>
                </div>
                <div class="col-sm-1">
                    <ul class="footer-list social-list">
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">
                                <i class="footer-social-icon fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">
                                <i class="footer-social-icon fab fa-instagram-square"></i>
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">
                                <i class="footer-social-icon fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">
                                <i class="footer-social-icon fab fa-telegram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

</body>

</html>