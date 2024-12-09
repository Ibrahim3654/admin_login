<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - TrendSwap</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>
    body {
        margin: 0;
        font-family: 'Montserrat', sans-serif;
        overflow-x: hidden;
    }

    header {
        background-color: white;
        border-bottom: 1px solid #ccc;
    }

    main {
        padding: 20px 50px;
        max-width: 1200px;
        margin: 0 auto;
    }

    h2 {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: black;
        margin-bottom: 20px;
    }

    #basket-container {
        background-color: #f9f9f9;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .basket-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #ccc;
    }

    .basket-item:last-child {
        border-bottom: none;
    }

    .basket-item p {
        font-size: 14px;
        color: black;
        margin: 5px 0;
    }

    .basket-item input[type="number"] {
        width: 50px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
    }

    .remove-item {
        background-color: white;
        border: 1px solid black;
        color: black;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 12px;
        font-family: 'Montserrat', sans-serif;
    }

    .remove-item:hover {
        background-color: black;
        color: white;
    }

    #total-container {
        text-align: center;
        margin-top: 20px;
    }

    #total-container h3 {
        font-size: 20px;
        color: black;
        margin-bottom: 15px;
    }

    #checkout-button {
        width: 100%;
        max-width: 300px;
        padding: 10px;
        border: 2px solid black;
        background-color: white;
        color: black;
        font-size: 16px;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    #checkout-button:hover {
        background-color: black;
        color: white;
    }

    footer {
        background-color: #333;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        padding: 20px 0;
    }

    .footer-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-section h3 {
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .footer-section p,
    .footer-section ul,
    .footer-section a {
        font-size: 14px;
        margin: 5px 0;
        color: #ccc;
        text-decoration: none;
    }

    .footer-bottom {
        text-align: center;
        padding: 10px 0;
        font-size: 12px;
        border-top: 1px solid #444;
    }


</style>

<body>
    <div class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="Images/Logo.jpg" alt="Logo">
            </div>
            <div class="navbar-links">
                <a href="{{route('home.index')}}">HOME</a>
                <a href="{{route('men')}}">MEN</a>
                <a href="{{route('women')}}">WOMAN</a>
                <a href="{{route('kid')}}">KIDS</a>
                <a href="{{route('accessory')}}">ACCESSORIES</a>
                <a href="{{route('baby')}}">BABIES</a>
            </div>
        </div>
        <div class="navbar-right">
            <div class="search-icon">
                <img src="Images/Search.png" alt="Search" id="search-icon">
            </div>
            <div class="bag-icon">
                <a href="checkout.html">
                    <img src="Images/Bag.png" alt="Bag">
                </a>
            </div>
            
            <div class="person-icon">
                <img src="Images/Person.png" alt="Person" id="person-icon">
            </div>

            <div class="search-bar" id="search-bar">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>

    <main>
        <h2>Your Basket</h2>
        <div id="basket-container">

        </div>
        
        <div id="total-container">
            <h3>Total: £<span id="total-price">0.00</span></h3>
            <button id="checkout-button">Proceed to Payment</button>
        </div>
        
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h3>About Us</h3>
                <p>
                    We are a leading online store providing the latest fashion trends for men, women, and kids. Our mission is to deliver quality products at affordable prices.
                </p>
            </div>
            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                <li><a href="{{route('about-us')}}">About</a></li>                                                                             
                    <li><a href="{{route('contact-us')}}">Contact</a></li>
                    <li><a href="{{route('faqs')}}">FAQs</a></li>
                    <li><a href="{{route('private-policy')}}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h3>Contact Us</h3>
                <p>Email: info@trendswap.com</p>
                <p>Phone: +44 7392 284916</p>
                <div class="social-icons">
                    <a href="#"><img src="Images/FacebookW.png" alt="Facebook"></a>
                    <a href="#"><img src="Images/InstagramW.png" alt="Instagram"></a>
                    <a href="#"><img src="Images/XW.png" alt="X"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 TrendSwap. All Rights Reserved.</p>
        </div>
    </footer>

    <script> src="basket.js"
    
    function displayBasket() {
        const basket = getBasket(); 
        const basketContainer = document.getElementById('basket-container');
        const totalPriceElement = document.getElementById('total-price');
        let total = 0;

        basketContainer.innerHTML = ''; 

        basket.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;

            const itemElement = document.createElement('div');
            itemElement.className = 'basket-item';
            itemElement.innerHTML = `
                <img src="${item.image}" alt="${item.name}" class="item-image">
                <p>${item.name}</p>
                <p>£<span class="item-price">${item.price.toFixed(2)}</span></p>
                <p>Quantity: 
                    <input type="number" class="item-quantity" value="${item.quantity}" min="1" data-name="${item.name}">
                </p>
                <button class="remove-item" data-name="${item.name}">Remove</button>
            `;
            basketContainer.appendChild(itemElement);
        });

        totalPriceElement.textContent = total.toFixed(2);
    }

    document.addEventListener('DOMContentLoaded', () => {
        const basketContainer = document.getElementById('basket-container');

        basketContainer.addEventListener('input', (e) => {
            if (e.target.classList.contains('item-quantity')) {
                const basket = getBasket();
                const productName = e.target.dataset.name;
                const newQuantity = parseInt(e.target.value);

                const product = basket.find(item => item.name === productName);
                if (product) product.quantity = newQuantity;

                saveBasket(basket);
                displayBasket(); 
            }
        });

        basketContainer.addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-item')) {
                const basket = getBasket();
                const productName = e.target.dataset.name;

                const updatedBasket = basket.filter(item => item.name !== productName);
                saveBasket(updatedBasket);
                displayBasket(); 
            }
        });

        displayBasket(); 
    });
    </script>
    <script src="{{ asset('js/basket.js') }}"></script>
    
</body>
</html>