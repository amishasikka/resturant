let header = document.querySelector('header');
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

let cartIcon = document.querySelector("#cart-icon");
let cart = document.querySelector(".cart");
let closeCart = document.querySelector("#close-cart");

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('feedbackForm');
    const feedbackInput = document.getElementById('feedback');
    const message = document.getElementById('message');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const feedback = feedbackInput.value;

        // Simulate submitting feedback using fetch API (you can replace this with actual backend API)
        if (feedback.trim() !== '') {
            fetch('https://jsonplaceholder.typicode.com/posts', {
                method: 'POST',
                body: JSON.stringify({
                    feedback: feedback
                }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.id) {
                    message.textContent = 'Your feedback is submitted';
                    feedbackInput.value = ''; // Clear the textarea
                    
                    // Reset the form size after a short delay
                    setTimeout(function() {
                        feedbackInput.style.height = ''; // Reset the textarea height
                    }, 100);
                    
                    // Hide the message after 3 seconds
                    setTimeout(function() {
                        message.textContent = '';
                    }, 3000);
                } else {
                    message.textContent = 'Failed to submit feedback';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                message.textContent = 'An error occurred';
            });
        } else {
            message.textContent = 'Please enter your feedback';
        }
    });
});


window.addEventListener('scroll', () => {
    header.classList.toggle('active', window.scrollY > 0);
}); 
menu.onclick = () => {
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    navbar.classList.remove('active');
}


// Open Cart
cartIcon.onclick = () => {
    cart.classList.add("active");
};
// Close Cart
closeCart.onclick = () => {
    cart.classList.remove("active");
};

// Cart Working JS
if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready);
}else{
    ready();
}

// Making Function
function ready(){
    //remove items from cart
    var removeCartButtons = document.getElementsByClassName("cart-remove");
    console.log(removeCartButtons);
    for(var i=0;i<removeCartButtons.length;i++) {
        var button =  removeCartButtons[i];
        button.addEventListener("click", removeCartItem);
    }
    //quantity changes
    var quantityInputs = document.getElementsByClassName("cart-quantity");
    for(var i=0;i<quantityInputs.length;i++){
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }
    //Add to cart
    var addCart = document.getElementsByClassName("add-cart");
    for(var i=0; i<addCart.length; i++){
    var button = addCart[i];
    button.addEventListener("click", addCartClicked);
    }
    //Buy Button Work
    document.getElementsByClassName("btn-buy")[0]
    .addEventListener("click", buyButtonClicked);
}
//But button 
function buyButtonClicked(){
    alert("You are redirecting to address page")
    var cartContent = document.getElementsByClassName("cart-content")[0];
    while (cartContent.hasChildNodes()) {
        cartContent.removeChild(cartContent.firstChild);
    }
    updatetotal();
}
// remove items from cart
function removeCartItem(event){
    var buttonClicked =  event.target;
    buttonClicked.parentElement.remove();
    updatetotal();
}
// Quantity Changes
function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updatetotal();
}

//Add to cart
function addCartClicked(event) {
    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
    var price = shopProducts.getElementsByClassName("price")[0].innerText;
    var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
    addProductToCart(title,price,productImg);
    updatetotal();
}
function addProductToCart(title, price, productImg) {
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cart-box");
    var cartItems = document.getElementsByClassName("cart-content")[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
    for(var i=0; i< cartItemsNames.length; i++) {
        if(cartItemsNames[i].innerText == title){
            alert("You have already add this item to cart");
            return;
        }  
    }
var cartBoxContent = `
                        <img src="${productImg}" alt="" class="cart-img"> 
                        <!--><div class="detail-box">
                            <div class="cart-product-title">${title}</div>
                            <div class="cart-price">${price}</div>
                            <input type="number" value="1" class="cart-quantity">
                            </div> 
                            <!-- Removecart -->
                        <i class='bx bxs-trash-alt cart-remove'></i>
                        `;

cartShopBox.innerHTML = cartBoxContent;
cartItems.append(cartShopBox);
cartShopBox
.getElementsByClassName("cart-remove")[0]
.addEventListener("click", removeCartItem); 
cartShopBox.
getElementsByClassName("cart-quantity")[0]
.addEventListener("change", quantityChanged);                   
}

// Update Total
function updatetotal() {
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box");
    var total = 0;
    for (var i = 0; i < cartBoxes.length; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName("cart-price")[0];
        var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
        var price = parseFloat(priceElement.innerText.replace("Rs.",""));
        var quantity = quantityElement.value;
        total = total + price * quantity;
    }
        // If price contain some cents value
        total = Math.round(total*100)/100;

        document.getElementsByClassName("total-price")[0].innerText = "Rs." + total;  
}
