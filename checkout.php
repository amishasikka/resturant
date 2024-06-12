<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="check.css">
</head>
<body>
    <!-- Customer info -->
    <div class="page">
    <section class="address">
        <a href="index1.php"><i class='bx bxs-chevron-left chevron'></i>
        </a>
        <h3>Shipping address</h3>
        <button>Edit</button>
        <i class='bx bxs-map mark'></i>
        <form action="">
            <label for="" style="position: absolute; top: 295px;">Full Name</label>
            <input type="text" placeholder="Full Name"><br>

            <label for="" style="position: absolute; top:345px; left: 365px;">Phone</label>
            <input type="number" name="phoneno" id="phoneno" placeholder="Phone"><br>

            <label for="" style="position: absolute; top:389px; left: 362px;">Address</label>
            <input type="text" placeholder="Address" id="address">

            <!--Countries-->
            <label for="" class="country">Country</label>
            <select name="" id="country"></select>
                    
            <!--Cities-->
            <label for="" class="city">City</label>
            <select name="" id="city">
            <option value="">Punjab</option>
            </select>
            

        </form> <br>
    </section>
    <!-- Order Summary -->
    <section class="summary">
        <h4>Order Summary</h4></a>
        <div class="cart">
        <div class="cart-content">
            <ul class="cartCheckoutItems"></ul>

            </div>

            <!-- Total -->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">Rs.0</div>
                <a href="payment.php"><button type="button" class="btn-checkout" style="position: absolute; top: 600px;">CHECKOUT</button></a>
            </div>
        </div>
        
            <!-- Shop -->

        <div class="shop-box">
            <div class="shop-img">
            <img src="taste9.avif" alt="" class="product-img">
            </div>
            <h5 class="product-title">Apptetizing Pasta</h5>
            <h6><span class="price" id="item-price">Rs.569</span></h6>
        </div>
        
        
    </section>
</div>
<button>Edit</button>

<script src="checkout.js"></script>     
</body>
</html>