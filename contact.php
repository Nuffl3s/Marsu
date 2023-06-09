<!DOCTYPE html>
<html>
    <head>
        <?php
            include "php/head.php";
        ?>
    </head>

    <body class="contact-body">
        <nav>
            <header>
                    <a href="home" class="logo">
                        <img src="images/Logo.png" alt="">Cook<span>Folio</span></a>
                    <div class="group">

                        <ul class="navigation">
                            <li><a href="homepage.php" class="active">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>

                        <div class="search">
                            <span class="icon">
                                <ion-icon name="search-outline" class="searchBtn" class="searchBtn"></ion-icon>
                                <ion-icon name="close-outline" class="closeBtn"></ion-icon>
                            </span>

                            <ion-icon name="menu-outline" class="menuToggle"></ion-icon>
                        </div>
                    </div>
                    <div class="searchBox">
                        <input type="text" placeholder="Search here...">
                    </div>
            </header>
        </nav>

        <section>
            <div class="con-container">
                <div class="contactinfo">
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                         <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <span>Cagayan de Oro City<br>
                                Misamis Oriental<br>
                                9000</span>
                            </li>

                            <li>
                            <span><i class="fas fa-envelope"></i></span>
                            <span>CookFolio@gmail.com</span>
                            </li>

                            <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <span>09173548760</span>
                            </li>
                        </ul>
                    </div>
                    <ul class="sci">
                        <li><a><i class="fa-brands fa-facebook"></i></i></a></li>
                        <li><a><i class="fa-brands fa-square-instagram"></i></a></li>
                        <li><a><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a><i class="fa-brands fa-tiktok"></i></a></li>    
                    </ul>
                </div>
                <div class="contactForm">
                    <h2>Send a Message</h2>
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>First Name</span>
                        </div>

                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>Last Name</span>
                        </div>

                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>Email Address</span>
                        </div>

                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>Mobile Number</span>
                        </div>

                        <div class="inputBox w100">
                            <textarea type="text" name="" required></textarea>
                            <span>Write your message here...</span>
                        </div>

                        <div class="inputBox w100">
                            <input type="submit" value="send">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section 7 start -->
        <?php
            include "php/footer.php";
        ?>
        <!-- section 7 end -->
    </body>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="/CookFolio/java/scriptall.js"></script>

</html>