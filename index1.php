<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img.png" type="image/x-icon">
    <title>UNDINE-Food Delivery Website</title>
    <!--Link to CSS-->
    <link rel="stylesheet" href="style.css">
    <!--Box-Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>
    <!--Navbar-->
    <header>
        <a href="#" class="logo"><img src="img.png" alt="img">Undine</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <i class='bx bxs-cart-add' id="cart-icon"></i>
        <!-- cart -->
        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
            <!-- content -->
            <div class="cart-content">

            </div>

            <!-- Total -->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">Rs.0</div>
            </div>
            <!-- Buy Button -->
            <a href="checkout.php"><button type="button" class="btn-buy">Buy Now</button></a>
            <!-- Cart-close -->
            <i class='bx bx-x' id="close-cart"></i>
        </div>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="index.php">Signup</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#shop">Shop</a></li>
            <li><a href="#customer">Customer</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>
    </header>
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <span>Welcome To Our </span>
            <h1>Healthy Food <br>Collection!</h1>
            <p>Free delivery on all orders above ₹249 and unlock free dishes on all orders above ₹499*</p>
            <a href="#shop" class="btn">Our Menu</a>
        </div>
        <div class="home-img">
            <img src="salad.webp" alt="img">
        </div>
    </section>
    <!-- About -->
    <section class="about" id="about">
        <h1>Today Deal's</h1>

        <div class="about-container">

            <!-- box 1-->
            <div class="about-box">
                <div class="box-img">
                    <img src="egg.webp" alt="img">
                </div>
                <h3>Nutrition Plate</h3>
                <h2>
                    <span>Rs.290</span>
                </h2>
            </div>

            <!-- box 2-->
            <div class="about-box">
                <div class="box-img">
                    <img src="greensalad.webp" alt="img">
                </div>
                <h3>Green Salad</h3>
                <h2>
                    <span>Rs.379</span>
                </h2>
            </div>

            <!-- box 4-->
            <div class="about-box">
                <div class="box-img">
                    <img src="spaguetti.png" alt="img">
                </div>
                <h3>Spaguetti</h3>
                <h2>
                    <span>Rs.489</span>
                </h2>
            </div>

            <!-- box 5-->
            <div class="about-box">
                <div class="box-img">
                    <img src="desert.png" alt="img">
                </div>
                <h3>Sweet Tartlet with Chocolate</h3>
                <h2>
                    <span>Rs.649</span>
                </h2>
            </div>

        </div>
    </section>
    <!-- Shop -->
    <section class="shop" id="shop">
        <div class="heading">
            <h2>Undine's Menu</h2>
            <p>Choose your favourite food item from the Undine's Healthy menu. Get fresh food with your choice of toppings

            </p>
        </div>
        <div class="shop-container">

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste15.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Pumpkin Soup</h3>
                <h2><span class="price" id="item-price">Rs.469</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste2.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Flavourful Chicken</h3>
                <h2><span class="price" id="item-price">Rs.1400</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste9.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Apptetizing Pasta</h3>
                <h2><span class="price" id="item-price">Rs.569</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste4.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Avocado Toast</h3>
                <h2><span class="price" id="item-price">Rs.659</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste5.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Delicias Breakfast!</h3>
                <h2><span class="price" id="item-price">Rs.449</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste6.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">licious Brunch</h3>
                <h2><span class="price" id="item-price">Rs.660</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste7.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Creamy CheesePlate</h3>
                <h2><span class="price" id="item-price">Rs.450</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste8.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Melty Ice-Creams</h3>
                <h2><span class="price" id="item-price">Rs.249</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste3.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Guacamole Salad</h3>
                <h2><span class="price" id="item-price">Rs.668</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste16.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Tomato Toast</h3>
                <h2><span class="price" id="item-price">Rs.429</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste10.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Orange Juice</h3>
                <h2><span class="price" id="item-price">Rs.229</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste11.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Beaf Steak</h3>
                <h2><span class="price" id="item-price">Rs.759</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste12.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Meat in Buttersauce</h3>
                <h2><span class="price" id="item-price">Rs.678</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste13.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Steak Potatoes</h3>
                <h2><span class="price" id="item-price">Rs.559</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste14.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Oreo Cookie Sandwich</h3>
                <h2><span class="price" id="item-price">Rs.349</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="taste15.avif" alt="" class="product-img">
                </div>
                <h3 class="product-title">Pumpkin Soup</h3>
                <h2><span class="price" id="item-price">Rs.469</span></h2>
                <i class='bx bxs-cart-add add-cart'></i>
            </div>

        </div>
    </section>

    <section class="customer" id="customer">
        <div class="heading">
            <h2>Our Customer's</h2>
            <p>Order the Favourite dishes eaten by Celebrities.</p>
        </div>
        <div class="customer-container">
            <div class="box">
                <img src="sallu2.webp" alt="">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Nice Resturant ,I loved the food,value for money and unique taste.I suggest everybody to visit here. ~Salman Khan</p>
                <h2>Salman Khan</h2>
            </div>

            <div class="box">
                <img src="dil1.avif" alt="">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Have been ordering food for delivery during lockdown and food quality has been very good with no compromises.</p>
                <h2>Diljit Dosanjh</h2>
            </div>

            <div class="box">
                <img src="kiara-advani.jpg" alt="">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Amazing food quality I ordered the food for my family living in Jaipur the staff is amazing and I got to know that food was very hygienic.
                </p>
                <h2>Kiara Advani</h2>
            </div>

            <div class="box">
                <img src="priyanka.jpeg" alt="">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>It's a great place to eat healthy and nutritious food.And hygiene is absolutely fantastic🤘😝.I recommend my friends always.
                </p>
                <h2>Priyanka Chopra</h2>
            </div>

        </div>
    </section>

    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact Us</h2>
            <p>We Would Love To Hear From You.</p>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <h2>Get In Touch</h2>
                <p>Follow our Website on these Social media handles ,So you can get new offers and great deals. </p>
                <div class="address">
                    <i class='bx bxs-map'><span>44 Street NYC, USA 10001<span></span></i>
                    <i class='bx bxs-phone'><span>+1 100 104 40001<span></span></i>
                    <i class='bx bxs-envelope'><span>contact@Undine.com<span></span></i>
                </div>
                <div class="social">
                    <a href="#" title="link"><i class='bx bxl-facebook'></i></a>
                    <a href="#" title="link"><i class='bx bxl-twitter'></i></a>
                    <a href="#" title="link"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
            <div class="contact-form">
                <form id="feedbackForm">
                    <input type="text" placeholder="Your Name*" required>
                    <input type="email" name="" placeholder="Email Address*" required>
                    <textarea id="feedback" cols="30" rows="10" placeholder="Message*"></textarea>
                    <button type="submit" class="btn" id="submitButton">Submit</button>
                </form>
                <p id="message"></p>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; CarpoolVnom All Right Reserved.</p>
    </div>

    <!--Link To JS-->
    <script src="main.js"></script>

</body>

</html>