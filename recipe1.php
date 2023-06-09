
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
            <div class="recipe-container" href="#">
                <div class="top">
                    <div class="top-content">
                        <img src="/CookFolio/images/recipe-1.jpg" alt="">
                    </div>
                </div>
                <div class="middle">
                    <div class="middle-content">
                        <div class="txt">
                            <h3 data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">Ingredients</h3>
                        </div>

                        <table>
                            <tr>
                                <th>Contadina Quick Pizza Sauce</th>
                                <th>Fleischmann's Easy Pizza Crust</th>
                                <th>Toppings</th>
                            </tr>

                            <tr>
                                <td>½ cup water</td>
                                <td>3 ¼ cups all-purpose flour, or more as needed</td>
                                <td>1 cup shredded mozzarella cheese, or more to taste</td>
                            </tr>

                            <tr>
                                <td>½ (12 ounce) can CONTADINA® Tomato Paste</td>
                                <td>2 (.25 ounce) envelopes FLEISCHMANN'S® Pizza Crust Yeast or RapidRise® Yeast</td>
                                <td>1 (6 ounce) package HORMEL® Pepperoni</td>
                            </tr>

                            <tr>
                                <td>1 teaspoon dried oregano, crushed</td>
                                <td>1 tablespoon sugar</td>
                            </tr>

                            <tr>
                                <td>1 teaspoon dried basil, crushed</td>
                                <td>1 ½ teaspoons salt</td>
                            </tr>

                            <tr>
                                <td>½ teaspoon garlic powder</td>
                                <td>1 ⅓ cups very warm water (120 degrees F to 130 degrees F)</td>
                            </tr>

                            <tr>
                                <td>½ teaspoon onion powder</td>
                                <td>⅓ cup oil</td>
                            </tr>

                            <tr>
                                <td>½ teaspoon sugar</td>
                            </tr>

                            <tr>
                                <td>½ teaspoon salt</td>
                            </tr>

                            <tr>
                                <td>¼ teaspoon black pepper</td>
                            </tr>
                        </table>
                    </div>
                </div>

                 <div class="bottom">
                    <div class="bottom-content">
                        <div class="txt2">
                            <h3>Steps:</h3>
                        </div>

                        <div class="steps">
                            <p><span>Steps 1:</span> Preheat the oven to 425 degrees F (220 degrees C). Grease two 12-inch pizza pans.</p>
                            <p><span>Steps 2:</span> Make sauce: Whisk together water, tomato paste, oregano, basil, garlic powder, onion powder, sugar, salt, and pepper in a medium bowl until smooth. Set aside.</p>
                            <p><span>Steps 3:</span> Make sauce: Whisk together water, tomato paste, oregano, basil, garlic powder, onion powder, sugar, salt, and pepper in a medium bowl until smooth. Set aside.</p>
                            <p><span>Steps 4:</span> Transfer dough to a floured surface; knead until dough is smooth and elastic, about 4 minutes. Add more flour as needed. (If using RapidRise yeast, let dough rest, covered, for 10 minutes.)</p>
                            <p><span>Steps 5:</span> Divide dough in half. Lightly flour your hands, then pat each piece of dough onto the prepared pizza pans.</p>
                            <p><span>Steps 6:</span> Top dough with sauce, cheese, and pepperoni.</p>
                            <p><span>Steps 7:</span> Bake in the preheated oven until crusts are browned and cheese is bubbly, 18 to 20 minutes. Rotate pizza pans between the top and bottom oven racks halfway through baking.</p>
                        </div>
                    </div>
                 </div>
                
                
                <div class="other">
                    <h2 data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">Other Recipes</h2>
                </div>
        </section>

        <section class="menu">
            <div class="menu-content" data-aos="fade-in"
            data-aos-duration="1500" data-aos-once="true">
  
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
                            <a class="btn" id="popupBtn4">View Recipe</a>
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
                            <a class="btn" id="popupBtn6">View Recipe</a>
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
                            <a class="btn" id="popupBtn7">View Recipe</a>
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
                            <a class="btn" id="popupBtn9">View Recipe</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section">
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

        <?php
            include "php/footer.php";
         ?>
    </body>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="java/scriptall.js"></script>
</html>