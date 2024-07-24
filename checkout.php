<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Checkout Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .hidden {
    display: none;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

:root {
    --primary-color: rgb(128, 72, 9);
    --danger-color: #f44336;
    --text-color: #ffffff;
    --background-color: #f8f8f8;
}

body {
    font-family: 'Montserrat', sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
}

.checkout-container {
    display: flex;
    justify-content: space-around;
    margin: 20px;
    margin-top: 10%;
}

.form-container, .payment-method-container, .cart-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 10px;
    padding: 20px;
    width: 30%;
    margin-top: 15px;
    box-sizing: border-box;
    max-height: 600px; /* Add this line */
    overflow-y: auto; /* Add this line */
}

.form-container h2, .payment-method-container h2, .cart-container h2 {
    margin-top: 0;
    text-align: center;
    font-weight: 600;
}

label {
    display: block;
    margin-top: 10px;
    font-weight: 600;
}

input[type="text"], input[type="email"], input[type="tel"], textarea, select {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea {
    height: 80px;
    resize: vertical;
}

.cart-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
}

.cart-item .product-image {
    max-width: 120px;
    max-height: 120px;
    margin-right: 20px;
}

.item-details {
    flex: 1;
}

.product-description {
    list-style-type: disc;
    margin: 10px 0;
    padding-left: 20px;
}

.quantity-controls {
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.quantity-controls button {
    background-color: rgb(128, 72, 9);
    color: #FFFFFF;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s, transform 0.2s; /* Add transition for smooth effect */
}

.quantity-controls button:hover {
    background-color: rgb(153, 87, 14); /* Lighter or different color on hover */
    transform: scale(1.05); /* Slightly increase size on hover */
}


.quantity-controls span {
    margin: 0 10px;
    font-weight: 600;
}

.order-controls {
    margin-top: 10px;
}

.order-controls button {
    background-color: transparent;
    border: none;
    color: var(--primary-color);
    cursor: pointer;
    font-size: 14px;
}

.total-container {
    border-top: 1px solid #ccc;
    padding-top: 10px;
    margin-top: 10px;
}

.total-container h3 {
    margin: 0;
    font-weight: 600;
    text-align: center;
    font-size: larger;
}

button.place-order {
    background-color: var(--primary-color);
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    display: block;
    width: 100%;
    box-sizing: border-box;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    border-radius: 8px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

fieldset {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 4px;
}

legend {
    font-weight: 600;
    padding: 0 10px;
}

.modal-buttons {
    display: flex;
    justify-content: flex-end;
}

.modal-buttons button {
    margin-left: 10px;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#save-edit {
    background-color: var(--primary-color);
    color: #fff;
}

#cancel-edit {
    background-color: var(--danger-color);
    color: #fff;
}

/* Style for the edit modal */
#edit-modal .modal-content {
    padding: 20px;
}

/* Flex container for checkboxes and labels */
.option {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.option input[type="checkbox"] {
    margin-right: 10px; /* Space between checkbox and label */
}

.option label {
    margin: 0;
}

.modal-buttons {
    margin-top: 20px;
}

.modal-buttons button {
    margin-right: 10px;
}


/*for nav bar*/



:root{
    --main-color:rgb(196, 119, 31);
    --second-color: rgb(196, 119, 31);
    --text-color: #1b1b1b;
    --bg-color:#DDD48F;

    /* Box shadow*/
    --box-shadow: 2px 2px 10px 4px rgb(14 55 54 / 15%);

}
.nav-buttons{
    margin-left: 60%;
}


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html, body {
    height: 100%;
    
}

body{
    font-family: "Poppins", sans-serif;
    
}

main {
    flex: 1;
}


/* Modal Styles */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    color: #000;
}

/* Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}


.payment-method {
    padding: 20px;
}

.payment-box h3 {
    margin-bottom: 15px;
}

.payment-box label {
    display: block;
    margin-bottom: 10px;
}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

    </style>
</head>
<body>

   <?php include('header.php'); ?>
    
    <div class="checkout-container">
        <div class="cart-container">
            <h2>List of Orders</h2>
         <?php include('get_coffee.php')?>
         
            <div class="cart-item">
                <img src="assets/img/coffee1.png<?php ?>" alt="Example Product 1" class="product-image">
                <div class="item-details">
                    <h3>Brewed Coffee</h3>
                    <ul class="product-description">
                       
                    </ul>
                    <p>Price: ₱45.00</p>
                    <p class="price-with-addons hidden">Price with Add-ons: ₱<span class="product-price">75.00</span></p>
                    <div class="quantity-controls">
                        <button class="decrease">−</button>
                        <span class="quantity">1</span>
                        <button class="increase">+</button>
                    </div>
                    <div class="order-controls">
                        <button class="edit">Edit</button> | 
                        <button class="remove">Remove</button>
                    </div>
                </div>
            </div>


            <!-- Add more cart items as needed -->
            <div class="total-container">
                <h3>Total Amount: ₱<span id="total-amount">75.00</span></h3>
            </div>
        </div>
        
        <div class="form-container">
            <h2>Checkout Form</h2>
            <form>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="e.g., Juan dela Cruz" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="e.g., example@gmail.com" required>
                
                <label for="city">City</label>
<select id="city" name="city" required>
    <option value="" disabled selected>Select your city</option>
    <option value="manila">Manila</option>
    <option value="quezon-city">Quezon City</option>
    <option value="makati">Makati</option>
    <option value="taguig">Taguig</option>
    <option value="pasig">Pasig</option>
    <option value="pasay">Pasay</option>
    <option value="mandaluyong">Mandaluyong</option>
    <option value="manila">Manila</option>
    <option value="san-juan">San Juan</option>
    <!-- Add more cities as needed -->
</select>

<label for="address">Address</label>
<input type="text" id="address" name="address" placeholder="e.g., 123 Main St" required>

<label for="address">Address</label>
<input type="text" id="address" name="address" placeholder="e.g., 123 Main St" required>

                
                <label for="contact-number">Contact Number</label>
                <input type="tel" id="contact-number" name="contact-number" placeholder="e.g., +639 915 185 5519" required>
                
                <label for="order-details">Additional Order Details</label>
                <textarea id="order-details" name="order-details" placeholder="(Optional) Additional details e.g. floor, unit number "></textarea>
                
                <label for="rider-details">Details for the Rider</label>
                <textarea id="rider-details" name="rider-details" placeholder="(Optional) Notes to the rider e.g., landmarks, drop off points"></textarea>
            </form>
        </div>
        
        
        <div class="payment-method-container">
            <h2>Payment Method</h2>
            <form>
                <label for="payment-method">Select Payment Method</label>
                <select id="payment-method" name="payment-method">
                    <option value="cod">Cash on Delivery</option>
                    <option value="gcash">GCash</option>
                    <option value="credit-debit">Credit/Debit Card</option>
                </select>
            </form>
            <button class="place-order">Place Order</button>
        </div>
    </div>
    
    <!-- Card Payment Modal -->
<div id="card-payment-modal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="card-payment-close">&times;</span>
        <h2>Card Payment</h2>
        <form id="payment-form">
            <div class="form-group">
                <label for="card-name">Cardholder's Name</label>
                <input type="text" id="card-name" name="card-name" placeholder="John Doe" required>
            </div>
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456" maxlength="19" required>
            </div>
            <div class="form-group">
                <label for="expiration-date">Expiration Date</label>
                <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YY" maxlength="7" required>
            </div>
            <button type="submit">Pay Now</button>
        </form>
    </div>
</div>

    
    <!-- Edit Modal HTML -->
<div id="edit-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Edit Order</h2>
        <form id="edit-form">
            <fieldset>
                <legend>Ice Level</legend>
                <div class="option">
                    <input type="checkbox" id="ice-more" name="ice-level" value="More Ice">
                    <label for="ice-more">More Ice</label>
                </div>
                <div class="option">
                    <input type="checkbox" id="ice-less" name="ice-level" value="Less Ice">
                    <label for="ice-less">Less Ice</label>
                </div>
                <div class="option">
                    <input type="checkbox" id="ice-no" name="ice-level" value="No Ice">
                    <label for="ice-no">No Ice</label>
                </div>
            </fieldset>

            <fieldset>
                <legend>Sugar Level</legend>
                <div class="option">
                    <input type="checkbox" id="sugar-regular" name="sugar-level" value="Regular">
                    <label for="sugar-regular">Regular</label>
                </div>
                <div class="option">
                    <input type="checkbox" id="sugar-less" name="sugar-level" value="Less Sugar">
                    <label for="sugar-less">Less Sugar</label>
                </div>
                <div class="option">
                    <input type="checkbox" id="sugar-no" name="sugar-level" value="No Sugar">
                    <label for="sugar-no">No Sugar</label>
                </div>
            </fieldset>

            <fieldset>
                <legend>Add-ons (₱15 each for specific add-ons)</legend>
                <div class="option">
                    <input type="checkbox" id="pearls" name="add-ons" value="Pearls">
                    <label for="pearls">Pearls</label>
                </div>
                <div class="option">
                    <input type="checkbox" id="nata" name="add-ons" value="Nata">
                    <label for="nata">Nata</label>
                </div>
                <div class="option">
                    <input type="checkbox" id="coffee-jelly" name="add-ons" value="Coffee Jelly">
                    <label for="coffee-jelly">Coffee Jelly</label>
                </div>
                <div class="option">
                    <input type="checkbox" id="whip-cream" name="add-ons" value="Whip Cream">
                    <label for="whip-cream">Whip Cream</label>
                </div>
                <div class="option">
                    <input type="checkbox" id="cheesecake" name="add-ons" value="Cheesecake">
                    <label for="cheesecake">Cheesecake</label>
                </div>
                <div class="option">
                    <input type="checkbox" id="cream-puff" name="add-ons" value="Cream Puff">
                    <label for="cream-puff">Cream Puff</label>
                </div>
            </fieldset>
            
            <div class="modal-buttons">
                <button type="button" id="save-edit">Save</button>
                <button type="button" id="cancel-edit">Cancel</button>
            </div>
        </form>
    </div>
</div>


<section class="footer">
    <div class="footer-box">
        <h3>Coffee Shop</h3>
        <p>
            <a href="https://www.google.com/maps/search/?api=1&query=Km.+37+Pulong+Buhangin%2C+Sta.+Maria%2C+Bulacan" 
               target="_blank" 
               aria-label="View Coffee Shop on Google Maps">
               Km. 37 Pulong Buhangin, Sta. Maria, Bulacan
            </a>
        </p>
        <div class="social">
            <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                <i class='bx bxl-facebook'></i>
            </a>
            <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                <i class='bx bxl-twitter'></i>
            </a>
            <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                <i class='bx bxl-instagram'></i>
            </a>
            <a href="https://www.tiktok.com" target="_blank" aria-label="TikTok">
                <i class='bx bxl-tiktok'></i>
            </a>
            <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
                <i class='bx bxl-linkedin'></i>
            </a>
        </div>
    </div>
    <!-- Footer Box -->
<div class="footer-box">
    <h3>Support</h3>
    <ul>
        <li><a href="#">Product</a></li>
        <li><a href="#" id="help-support-btn">Help & Support</a></li>
        
        <li><a href="#">Terms Of Use</a></li>
    </ul>
</div>

<!-- Help & Support Modal -->
<div id="help-support-modal" class="modal">
    <div class="modal-content">
        <span class="close" id="help-support-close">&times;</span>
        <h2>Help & Support</h2>
        <p>Welcome to our Help & Support section! Here you will find answers to commonly asked questions and resources to assist you with your queries:</p>
        <ul>
            <li><strong>FAQs:</strong> Visit our Frequently Asked Questions page for quick answers to common questions.</li>
            <li><strong>Customer Service:</strong> For personalized assistance, contact our customer service team via email or phone.</li>
            <li><strong>Live Chat:</strong> Use our live chat feature to get real-time support from our team.</li>
            <li><strong>Help Guides:</strong> Explore our comprehensive help guides and tutorials to find solutions to common issues.</li>
        </ul>
    </div>
</div>



    <div class="footer-box">
        <h3>View Guides</h3>
        <ul>
            <li><a href="#">Features</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100094896232995&sk=photos">Blog Posts</a></li>
            <li><a href="#" id="our-branches">Our Branches</a></li>
        </ul>
    </div>
    
    <!-- Modal for Our Branches -->
    <div id="branches-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Our Branches</h2>
            <p>Branch 1: 2nd Floor #2325 Angeles Building, KM38 Pulong Buhangin, Santa Maria Bulacan. (In Front of 7/11 km38)</p>
            <p>Branch 2: [Branch 2 Address]</p>
        </div>
    </div>

    <script>
    
    

    document.addEventListener('DOMContentLoaded', () => {
    const totalAmountElement = document.getElementById('total-amount');
    const editModal = document.getElementById('edit-modal');
    const closeModalButton = document.querySelector('.close');
    const saveEditButton = document.getElementById('save-edit');
    const cancelEditButton = document.getElementById('cancel-edit');
    let currentItem = null;

    function updateTotalAmount() {
        let totalAmount = 0;
        const cartItems = document.querySelectorAll('.cart-item');
        cartItems.forEach(item => {
            const quantity = parseInt(item.querySelector('.quantity').textContent, 10);
            const priceWithAddons = parseFloat(item.querySelector('.product-price').textContent);
            totalAmount += quantity * priceWithAddons;
        });
        totalAmountElement.textContent = totalAmount.toFixed(2);
    }

    function showEditModal(item) {
        currentItem = item;
        clearAllCheckboxes();

        // Load existing add-ons for the current item
        const existingAddOns = Array.from(item.querySelectorAll('.product-description li')).map(li => li.textContent);
        existingAddOns.forEach(addOn => {
            const checkbox = editModal.querySelector(`input[type="checkbox"][value="${addOn}"]`);
            if (checkbox) {
                checkbox.checked = true;
            }
        });

        editModal.style.display = 'block';
    }

    function hideEditModal() {
        editModal.style.display = 'none';
    }

    function saveEdit() {
        if (!currentItem) return;

        const checkboxes = editModal.querySelectorAll('input[type="checkbox"]');
        let selectedAddOns = [];
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                selectedAddOns.push(checkbox.value);
            }
        });

        const descriptionList = currentItem.querySelector('.product-description');
        descriptionList.innerHTML = '';

        selectedAddOns.forEach(addOn => {
            const li = document.createElement('li');
            li.textContent = addOn;
            descriptionList.appendChild(li);
        });

        const basePrice = parseFloat(currentItem.dataset.price);
        const addonPrices = {
            'Pearls': 15,
            'Nata': 15,
            'Coffee Jelly': 15,
            'Whip Cream': 15,
            'Cheesecake': 15,
            'Cream Puff': 15
        };
        const addOnPrice = selectedAddOns.reduce((total, addOn) => total + (addonPrices[addOn] || 0), 0);
        const totalPrice = basePrice + addOnPrice;

        currentItem.querySelector('.product-price').textContent = totalPrice.toFixed(2);

        const priceWithAddonsElement = currentItem.querySelector('.price-with-addons');
        if (selectedAddOns.length > 0) {
            priceWithAddonsElement.classList.remove('hidden');
        } else {
            priceWithAddonsElement.classList.add('hidden');
        }

        updateTotalAmount();
        hideEditModal();
    }

    function clearAllCheckboxes() {
        const checkboxes = editModal.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
    }

    function handleRemoveButtonClick(item) {
        item.remove();
        updateTotalAmount();
    }

    function initializeCartItems() {
        document.querySelectorAll('.cart-item').forEach(item => {
            const increaseButton = item.querySelector('.increase');
            const decreaseButton = item.querySelector('.decrease');
            const quantityElement = item.querySelector('.quantity');
            const editButton = item.querySelector('.edit');
            const removeButton = item.querySelector('.remove');

            increaseButton.addEventListener('click', () => {
                let quantity = parseInt(quantityElement.textContent, 10);
                quantity += 1;
                quantityElement.textContent = quantity;
                updateTotalAmount();
            });

            decreaseButton.addEventListener('click', () => {
                let quantity = parseInt(quantityElement.textContent, 10);
                if (quantity > 1) {
                    quantity -= 1;
                    quantityElement.textContent = quantity;
                    updateTotalAmount();
                }
            });

            editButton.addEventListener('click', () => {
                showEditModal(item);
            });

            removeButton.addEventListener('click', () => {
                handleRemoveButtonClick(item);
            });
        });
    }

    closeModalButton.addEventListener('click', hideEditModal);
    saveEditButton.addEventListener('click', saveEdit);
    cancelEditButton.addEventListener('click', hideEditModal);

    initializeCartItems();
    updateTotalAmount();
});


// Get modal element
var modal = document.getElementById("branches-modal");

// Get open modal button
var btn = document.getElementById("our-branches");

// Get close button
var span = document.getElementsByClassName("close-btn")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


document.getElementById('help-support-btn').onclick = function() {
    document.getElementById('help-support-modal').style.display = 'block';
}

document.getElementById('return-policy-btn').onclick = function() {
    document.getElementById('return-policy-modal').style.display = 'block';
}

document.getElementById('help-support-close').onclick = function() {
    document.getElementById('help-support-modal').style.display = 'none';
}

document.getElementById('return-policy-close').onclick = function() {
    document.getElementById('return-policy-modal').style.display = 'none';
}

// Close the modal if the user clicks anywhere outside of the modal
window.onclick = function(event) {
    if (event.target == document.getElementById('help-support-modal')) {
        document.getElementById('help-support-modal').style.display = 'none';
    } else if (event.target == document.getElementById('return-policy-modal')) {
        document.getElementById('return-policy-modal').style.display = 'none';
    }
}


    
    
    
    </script>
</body>
</html>
