<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Collection</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Notification for adding to basket -->
    <div id="notification" style="display: none;"></div>
    <div id="basket-container"></div>

    <div class="delivery-info">
        Free Delivery Available | Find out more
    </div>

    <div class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="Images/Logo.jpg" alt="Logo">
            </div>
            <div class="navbar-links">
            <a href="{{route('home.index')}}">HOME</a>
                <a href="{{route('men')}}">MEN</a>
                <a href="{{route('women')}}">WOMEN</a>
                <a href="{{route('kid')}}">KIDS</a>
                <a href="{{route('accessory')}}">ACCESSORIES</a>
                <a href="{{route('baby')}}">BABIES</a>
                <a hreflang="{{route('about-us')}}">ABOUT US</a>
            </div>
        </div>
        <div class="navbar-right">
            <div class="search-icon">
                <a href="{{route('search-bar')}}">
                <img src="Images/Search.png" alt="Search" id="search-icon">
                </a>
            </div>
            <div class="bag-icon">
                <a href="{{route('check-out')}}">
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

    <section class="hero-section">
        <img src="{{ asset('images/home.webp')}}" alt="Winter Outfit">
        <div class="caption">
            <h2>Wrapping Up for Winter</h2>
            <p>We've got an outerwear style to match every one of this season's dress codes – whether you're heading out on a country walk or hitting the slopes.</p>
        </div>
    </section>

    <section class="hero-section">
        <div class="caption">
            <h2>Into the Outdoors</h2>
            <p>From lightweight and warm to heavy and enveloping, these outerwear styles offer something for every outdoor adventurer.</p>
        </div>
        <img src="{{ asset('images/home2.webp')}}" alt="Outdoor Outfit">
    </section>

    <section class="product-grid">
        <div class="product">
            <img src="{{ asset('images/menshirt.avif')}}" alt="Leather Piston Bomber Jacket">
            <h3>STUDIO NICHOLSON</h3>
            <p>Leather Piston Bomber Jacket</p>
            <p>£1,095.00</p>
            <button class="add-to-basket" data-name="Leather Piston Bomber Jacket" data-price="1095.00" data-image="Images/menshirt.avif">Add to Basket</button>
        </div>
        <div class="product">
            <img src="{{ asset('images/men2.avif')}}"  alt="Billiards Tapestry Blouson Jacket">
            <h3>AMIRI</h3>
            <p>Billiards Tapestry Blouson Jacket</p>
            <p>£1,710.00</p>
            <button class="add-to-basket" data-name="Billiards Tapestry Blouson Jacket" data-price="1710.00" data-image="Images/men2.avif">Add to Basket</button>
        </div>
        <div class="product">
            <img src="{{ asset('images/men5.avif')}}"  alt="Down Cloud Puffer Jacket">
            <h3>MOOSE KNUCKLES</h3>
            <p>Down Cloud Puffer Jacket</p>
            <p>£1,030.00</p>
            <button class="add-to-basket" data-name="Down Cloud Puffer Jacket" data-price="1030.00" data-image="Images/men5.avif">Add to Basket</button>
        </div>
        <div class="product">
            <img src="{{ asset('images/men3.avif')}}"  alt="Leather Jacket">
            <h3>Brand Name</h3>
            <p>Leather Jacket</p>
            <p>£1,295.00</p>
            <button class="add-to-basket" data-name="Leather Jacket" data-price="1295.00" data-image="Images/men3.avif">Add to Basket</button>
        </div>
        <div class="product">
            <img src="{{ asset('images/men5.avif')}}"  alt="Down Puffer Jacket">
            <h3>Brand Name</h3>
            <p>Down Puffer Jacket</p>
            <p>£1,150.00</p>
            <button class="add-to-basket" data-name="Down Puffer Jacket" data-price="1150.00" data-image="Images/men5.avif">Add to Basket</button>
        </div>
        <div class="product">
            <img src="{{ asset('images/mr.avif')}}"  alt="Winter Jacket">
            <h3>Brand Name</h3>
            <p>Winter Jacket</p>
            <p>£1,350.00</p>
            <button class="add-to-basket" data-name="Winter Jacket" data-price="1350.00" data-image="Images/mr.avif">Add to Basket</button>
        </div>
    </section>

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

    <!-- JavaScript inclusion -->
    <script src="{{ asset('js/basket.js') }}"></script>
</body>

</html>