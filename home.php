 <!DOCTYPE html>
 <html>
    <head>
        <title>Electronics Products Store</title>

        <!-- font owesome   -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- coutom css file -->
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body style="background-color: rgb(218, 192, 163)">
        <!-- header section strat-->

        <header style="background-color: rgb(15, 44, 89)">
            <div >
            <a href="#"><img src="images/logo3.jpg" alt="logo_img" height="50" width="50"></a>
            </div>  
             
            <?php include 'menu.php' ?>       
            <!-- <nav class="navbar">                
                <a href="#">HOME</a>
                <a href="#">PRODUCTS</a>
                <a href="#">ADD TO CART</a>
                <a href="help.html">CONTACT US</a>
             
            </nav> -->
            
            <div class="icons">
                <i class="fas fa-search" id="search-icon" onclick="toggleSearchBar()"></i>
                <a href="teacher_Profile_form.php"><i class="fa fa-fw fa-user" style="font-size: 1.4rem;"></i></a> 
                <!-- <div class="profile">                    
                </div>-->
                <i class="fas fa-bars" id="menu-bars"></i>  
              </div>
              
              <div id="search-bar-container" style="border: 1px ">
                <input type="text" id="search-bar" placeholder="Search..." style="width: 200px; height: 30px; border: 1px solid gray; border-radius: 5px; padding: 5px;">
              </div>
              
              <script>
                function toggleSearchBar() {
                  let searchBarContainer = document.getElementById("search-bar-container");
                  searchBarContainer.style.display = (searchBarContainer.style.display === "none") ? "block" : "none";
                }
              </script>
                      

            <div class="button">   
            <a href="#.php" class="btn1">Sign Out</a>
            </div>

            <form action="" id="search-form">
                <input type="search" placeholder="search here..." name="" id="search-box">
                <label for="search-box" class="fas fa-search"></label>
                <i class="fas fa-times" id="close"></i>
            </form>

            

        </header>
        <!-- heaer section end -->
        
        <section class="home" id="home" style="background-color: rgb(218, 192, 163)">
            <div class="content">
                <h3>Discover the Latest Electronics Products</h3>
                <p style="color: black;">Explore our wide range of cutting-edge electronics and gadgets for your tech needs.</p>
                
            </div>

            <div class="image">
                <img src="images/main1.jpg" alt="bg_img1">
            </div>
        </section>

        <!-- home section strat -->
        

        <!-- section 1 start -->
        <section class="activity" id ="activity" style="background-color: rgb(234, 219, 200)">

            <h1 class="heading" style="color: black;"> Explore Our Product Categories</h1>
            <br>
            <div class="box-container">
                <div class="box">
                    <img class="image" src="images/lap.jpg" alt="">
                    <div class="content">
                        <img src="images/buy now.png" alt="">
                        <h3>Laptops</h3>
                        <p>Discover the latest laptops with powerful performance and sleek designs.</p>
                    </div>
                </div>

                <div class="box">
                    <img class="image" src="images/phone.jpg" alt="">
                    <div class="content">
                        <img src="images/buy now.png" alt="">
                        <h3>Smartphones</h3>
                        <p>Find the perfect smartphone to stay connected and productive on the go.</p>
                    </div>
                </div>


                <div class="box">
                    <img class="image" src="images/tab.jpg" alt="">
                    <div class="content">
                        <img src="images/buy now.png" alt="">
                        <h3>Tablets</h3>
                        <p>Explore our range of tablets for work, entertainment, and creativity.</p>
                    </div>
                </div>


                <div class="box">
                    <img class="image" src="images/asso.jpg" alt="">
                    <div class="content">
                        <img src="images/buy now.png" alt="">
                        <h3>Accessories</h3>
                        <p>Enhance your tech setup with a variety of accessories like headphones, chargers, and more.</p>
                    </div>
                </div>


                <div class="box">
                    <img class="image" src="images/apple.jpg" alt="">
                    <div class="content">
                        <img src="images/buy now.png" alt="">
                        <h3>Quality Electronics at Your Fingertips</h3>
                        <p>Shop for the latest electronics products and accessories with confidence.</p>
                    </div>
                </div>


                <div class="box">
                    <img class="image" src="images/high.jpg" alt="">
                    <div class="content">
                        <img src="images/buy now.png" alt="">
                        <h3>High-Performance Laptop</h3>
                        <p>Discover the Newest Laptop Models – Unleash Your Potential with Cutting-Edge Technology.</p>
                    </div>
                </div>
            </div>

        </section>
        <div class="sub-topic" style="background-color: rgb(234, 219, 200)">
            <h3 style="color: black;">Feature-Packed Electronics</h3>
            <p style="color: black;">Explore a world of high-quality electronic products to enhance your digital lifestyle. From cutting-edge smartphones to reliable keyboards and mice, we have everything you need for work.</p>
        </div>
        
        <!-- section 1 end -->
        <!--  popular products section 1 starts -->
        <section class="popular" id="popular" style="background-color: rgb(218, 192, 163)">
           

            <h1 class="heading"> <span>Popular</span> PRODUCTS</h1>

            <div class="box-container">

                <div class="box">
                    <a href="#" target="_blank">
                    <span class="price">200$</span>
                    <img src="images/e-tab.jpg" alt="">                    
                    <h3>Entertainment Tablet</h3>
                    </a>
                    <a href="#" class="btn"><i class="fa fa-gamepad" ></i> buy now</a>   
                </div>
                


                <div class="box">

                    <a href="#" target="_blank">
                    <span class="price">3$</span>
                    <img src="images/14.png" alt="">
                    <h3>Wireless Headphones</h3>
                    </a>
                    <a href="#" class="btn"><i class="fa fa-gamepad" ></i> buy now</a>
                      
                    
                </div>
                 


                <div class="box">
                    <a href="#" target="_blank">
                    <span class="price">free</span>
                    <img src="images/15.png" alt="">
                    <h3>WIRED MOUSE</h3>
                    </a>
                    <a href="#" class="btn"><i class="fa fa-gamepad" ></i> buy now</a>  
                </div>
                 
            
            
         
                <div class="box">
                    <a href="#" target="_blank">
                    <span class="price">$5</span>
                    <img src="images/16.png" alt="">
                    <h3>WIRELESS MOUSE</h3>
                    </a>
                    <a href="#" class="btn"><i class="fa fa-gamepad" ></i> buy now</a>   
                </div>
                
                
                
                <div class="box">
                    <a href="#" target="_blank">
                    <span class="price">$1</span>
                    <img src="images/17.png" alt="">
                    <h3>KEYBORD</h3>
                    </a>
                    <a href="#" class="btn"><i class="fa fa-gamepad" ></i> buy now</a> 
                </div>
                 
                
                <div class="box">
                    <a href="#" target="_blank">
                    <span class="price">$2</span>
                    <img src="images/2.png" alt="">
                    <h3>POWESUPLIERS</h3>
                    </a>
                    <a href="#" class="btn"><i class="fa fa-gamepad" ></i> buy now</a> 
                </div>
                
            </div>        
        </section>
 
        <!-- new section starts -->
        <section class="new" style="background-color: rgb(218, 192, 163)">
            <h1 class="heading"> <span>New</span> Arrivals</h1>

            <div class="box-container">

                <div class="box">
                    <a href="#" target="_blank">
                    <span class="price">New</span>
                    <img src="images/t-lap.jpg" alt="">
                    <h3>Latest Model Laptop</h3>
                    </a>
                  
                </div>
                


                <div class="box">
                    <a href="#" target="_blank">
                    <span class="price">New</span>
                    <img src="images/2.png" alt="">
                    <h3>Latest Tablet for You</h3>
                    </a>  
                    
                </div>
                 


                <div class="box">
                    <a href="#" target="_blank">
                    <span class="price">New</span>
                    <img src="images/3.png" alt="">
                    <h3>High-Quality Headphones</h3>
                    </a>
                </div>
                 
            
            
         
                <div class="box">
                    <a href="#" target="_blank">
                    <span class="price">New</span>
                    <img src="images/4.png" alt="">
                    <h3>Next-Gen Smartphone</h3>
                    </a>
                </div>
                


        </section>
        <!-- new section ends -->

        <!-- review section starts -->
        <section class="review" >
        <h1 class="heading">Customers <span>Reviews</span></h1><br><br>
        <div class="box-container">
            <div class="box">
                <img src="images/1.jpg" alt="">
                <h3> Jane Doe, Tech Enthusiast</h3>                                        </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>I recently bought a laptop from this store, and I'm extremely satisfied with the product quality and service. Highly recommended!"</p>
            </div>


            <div class="box">
                <img src="images/2.jpg" alt="">
                <h3>Jane Smith, Gadget Lover</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"I've been a loyal customer of this store for a while now. They offer a wide range of quality electronics, and their delivery is always on time!"</p>
            </div>


            <div class="box">
                <img src="images/3.jpg" alt="">
                <h3>Lisa Brown, Smartphone User</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>"I purchased a new smartphone from this store, and it exceeded my expectations. Their products are top-notch!"</p>
            </div>


            
        </div>
        </section>

        <!-- review section ends -->

        <!-- home section end -->

        <footer class="footer" style="background-color: rgb(15, 44, 89)">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Browse by Product Category</h4>
                        <ul>
                            <li><a href="ProductList.html">Laptops</a></li>
                            <li><a href="ProductList.html">Smartphones</a></li>
                            <li><a href="ProductList.html">Tablets</a></li>
                            <li><a href="ProductList.html">Accessories</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href="about.html">Our Story</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
    
                    <div class="footer-col">
                        <div class="social-links">
                            <h4>Connect with Us</h4>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
    
                    <div class="footer-col">
                        <div class="logo">
                            <img src="images/logo3.jpg" alt="">
                            <div class="logo-text">
                                <a href="#">Electronics Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="end-text" style="background-color: rgb(4, 21, 46)">
            <p>&copy; 2023. All Rights Reserved. Designed By 37th CS 2001 group.</p>
        </div>
    
    </body>
    </html>
    

    </body>
 </html>