<!DOCTYPE html>
<html>
    <head>
        <?php
            include "php/head.php";
        ?>
    </head>

    <body>
        <nav>
            <header>
                    <a href="home" class="logo">
                        <img src="images/Logo.png" alt="">Cook<span>Folio</span></a>
                    <div class="group">

                        <ul class="navigation">
                            <li><a href="homepage.php" class="active">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#recipe">Recipe</a></li>
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

        <!-- home start-->

        <section class="home" id="home">
            <div class="swiper mySwiper home-slider">
                <div class=" swiper-wrapper wrapper">
                    <div class="swiper-slide slide" data-aos="fade-in"
                    data-aos-duration="1500" data-aos-once="true">
                        <div class="main-content" >
                                <span>Our Special Dish</span>
                                <h3>Pasta</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo ea quas ratione mollitia quibusdam nemo eaque pariatur facere, exercitationem inventore iusto culpa aspernatur molestias tenetur. Harum quas enim nam.</p>
                                <a href="#" class="btn">View Recipe</a>
                        </div>
                        <div class="image">
                            <img src="images/img3.png">
                        </div>
                    </div>

                    <div class="swiper-slide slide" data-aos="fade-in"
                    data-aos-duration="1500" data-aos-once="true">
                        <div class="main-content">
                            <span>Our Special Dish</span>
                            <h3>Pizza</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo ea quas ratione mollitia quibusdam nemo eaque pariatur facere, exercitationem inventore iusto culpa aspernatur molestias tenetur. Harum quas enim nam.</p>
                            <a href="#" class="btn">View Recipe</a>
                        </div>
                        <div class="image">
                            <img src="images/img2.png">
                        </div>
                    </div>

                    <div class="swiper-slide slide" data-aos="fade-in"
                    data-aos-duration="1500" data-aos-once="true">
                        <div class="main-content">
                            <span>Our Special Dish</span>
                            <h3>Burger</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo ea quas ratione mollitia quibusdam nemo eaque pariatur facere, exercitationem inventore iusto culpa aspernatur molestias tenetur. Harum quas enim nam.</p>
                            <a href="#" class="btn">View Recipe</a>
                        </div>
                        <div class="image">
                            <img src="images/img1.png">
                        </div>
                    </div>

                    <div class="swiper-slide slide" data-aos="fade-in"
                    data-aos-duration="1500" data-aos-once="true">
                        <div class="main-content">
                            <span>Our Special Dish</span>
                            <h3>Salad</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis explicabo ea quas ratione mollitia quibusdam nemo eaque pariatur facere, exercitationem inventore iusto culpa aspernatur molestias tenetur. Harum quas enim nam.</p>
                            <a href="#" class="btn">View Recipe</a>
                        </div>
                        <div class="image">
                            <img src="images/img4.png">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- home end-->

        <!-- section 1 -->
        <section class="about" id="about">

            <div class="about-img" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
                <img src="images/about-img.jpg">
            </div>
    
            <div class="about-text">
                <h3 data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">About Us</h3>
                <h2 data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">Join our journey and indulge from the start</h2>
                <p data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <a href="#" class="btn" data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">Learn more</a>
            </div>
        </section>
         <!-- section 1 end -->

        <!-- section 2 start -->
        <section class="section-2" id="recipe">
            <div class="container">
                <div class="top-text">
                    <a href="recipe">
                        <p data-aos="fade-down" data-aos-duration="1500" data-aos-once="true">Food Menu</p>
                        <h2 data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">Our Delicious food</h2>
                    </a>
                </div>
            </div>         
         </section>
        <!-- section 1 end -->

         <!-- section 3 start -->
         
         <section class="menu">
            <div class="menu-btns" data-aos="fade-in"
                data-aos-duration="1500" data-aos-once="true">
                <button class="menu-btn active-btn" onclick="filterObjects('all')">All</button>
                <button class="menu-btn active-btn" onclick="filterObjects('pizza')">Pizza</button>
                <button class="menu-btn active-btn" onclick="filterObjects('pasta')">Pasta</button>
                <button class="menu-btn active-btn" onclick="filterObjects('burger')">Burger</button>
                <button class="menu-btn active-btn" onclick="filterObjects('salad')">Salad</button>
            </div>

            <div class="menu-content" data-aos="fade-in"
            data-aos-duration="1500" data-aos-once="true">
                <div class="box pizza">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food1.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Pepperoni Pizza</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe1.php">View Recipe</a>
                        </div>
                    </div>
                </div>


                <div class="box pizza">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food9.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Hawaiian Pizza</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe2.php">View Recipe</a>
                        </div>
                    </div>
                </div>

                
                <div class="box salad">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food10.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Waldorf Salad</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe3.php">View Recipe</a>
                        </div>
                    </div>
                </div>


                <div class="box burger">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food11.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Chicken Burger</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe4.php">View Recipe</a>
                        </div>
                    </div>
                </div>


                <div class="box burger">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food12.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Bacon Burger</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe5.php">View Recipe</a>
                        </div>
                    </div>
                </div>

    
                <div class="box burger">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food2.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Veggie Burger</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe6.php">View Recipe</a>
                        </div>
                    </div>
                </div>

                
                <div class="box pizza">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food3.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Meksikano Pizza</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe7.php">View Recipe</a>
                        </div>
                    </div>
                </div>

    
                <div class="box pasta">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food6.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Penne Pasta</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe8.php">View Recipe</a>
                        </div>
                    </div>
                </div>

    
                <div class="box salad">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food5.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Cucumber Salad</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe9.php">View Recipe</a>
                        </div>
                    </div>
                </div>

    
                <div class="box pasta">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food4.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Rotini Pasta</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe10.php">View Recipe</a>
                        </div>
                    </div>
                </div>

    
                <div class="box salad">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food7.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Shrimp Salad</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe11.php">View Recipe</a>
                        </div>
                    </div>
                </div>

    
                <div class="box pasta">
                    <div class="box-content">
                        <div class="box-img">
                            <img src="images/food8.png">
                        </div>
    
                        <div class="box-text">
                            <h4>Meatballs Spag</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>

                        <div class="box-btn">
                            <a class="btn" href="recipe12.php">View Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- section 3 end -->


         <!--section 4 review start  -->
        <section class="section-4">
            <div class="top-text-4">
                <a href="#">
                    <p data-aos="fade-down" data-aos-duration="1500" data-aos-once="true">Review</p>
                    <h2 data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">People's Review</h2>
                </a>
            </div>
            <div class="container2">
                <div class="swiper mySwiper swiper2" data-aos="fade-in"
                data-aos-duration="1500" data-aos-once="true">
                   <div class="swiper-wrapper wrapper2" >
                    <div class="swiper-slide s-slide">
                        <div class="card">
                            <img src="images/pic1.png" alt="">
                            <div class="review">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque reiciendis aliquam est, ut libero doloribus</p>
                            <h3>Daren de Nibher</h3>
                            <h4>CEO, Microsoft</h4>
                        </div>
                    </div>
                     <div class="swiper-slide s-slide">
                       <div class="card">
                           <img src="images/pic2.png" alt="">
                           <div class="review">
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                           </div>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque reiciendis aliquam est, ut libero doloribus</p>
                           <h3>Greggy Protacio</h3>
                           <h4>CEO, Microsoft</h4>
                       </div>
                     </div>
                     <div class="swiper-slide s-slide">
                       <div class="card">
                           <img src="images/pic3.jpg" alt="" >
                           <div class="review">
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fas fa-star-half"></i></i>
                           </div>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque reiciendis aliquam est, ut libero doloribus</p>
                           <h3>Plint de Usman</h3>
                           <h4>CEO, Oracle </h4>
                       </div>
                     </div>
                     <div class="swiper-slide s-slide">
                       <div class="card">
                           <img src="images/pic4.png" alt="">
                           <div class="review">
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                           </div>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque reiciendis aliquam est, ut libero doloribus</p>
                           <h3>Patwick Mags</h3>
                           <h4>CEO, Facebook</h4>
                       </div>
                     </div>
                    </div>
                    <div class="swiper-button-next"></div>
                   <div class="swiper-button-prev"></div>
                   <div class="swiper-pagination"></div>
            </div>
        </section>

         <!-- section 4 review end -->

         <!-- section 5 start -->
         <section class="section-5">
            <div class="container3" >
                <div class="content">
                    <div class="ct-img">
                        <img src="images/Logo.png" data-aos="fade-in"
                        data-aos-duration="1500" data-aos-once="true">
                    </div>
    
                    <div class="text" data-aos="fade-in"
                    data-aos-duration="1500" data-aos-once="true">
                        <h3>Subscribe To Cook<span>Folio</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Eligendi, nisi!</p>
                    </div>
    
                    <div class="letter" data-aos="fade-in"
                    data-aos-duration="1500" data-aos-once="true">
                        <form>
                            <input type="email" name="email" placeholder="Your Email" required>
                            <input type="submit" value="Subscribe" required>
                        </form>
                    </div>
                </div>
            </div>
        </section>
         <!-- section 5 end -->

         <!-- section 6 start -->
         <section class="section-6">
            <div id="progress">
                <span id="progress-value"><i class="fa-sharp fa-solid fa-chevron-up"></i></span>
            </div>
         </section>
         <!-- section 6 end -->

         <!-- section 7 start -->
         <?php
            include "php/footer.php";
         ?>
         <!-- section 7 end -->

    </body>
		
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="java/scriptall.js"></script>
</html>