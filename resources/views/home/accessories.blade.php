<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>


<body>
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
                <img src="Images/Search.png" alt="Search" id="search-icon">
            </div>
            <div class="bag-icon">
                <img src="Images/Bag.png" alt="Bag">
            </div>
            <div class="person-icon">
                <img src="Images/Person.png" alt="Person" id="person-icon">
            </div>
            <!-- Hidden Search Bar -->
            <div class="search-bar" id="search-bar">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>

    <div class="watches-header">
        <h1>MENS FINE WATCHES</h1>
        <p>The very pinnacle of aesthetics and engineering, designer men’s watches are driven by innovation and excellence. <a href="#">Read more</a></p>
        <div class="watches-filter">
            <!-- <span>595 Results</span> -->
            <button class="sort-by">SORT BY ▼</button>
        </div>
    </div>

    <!-- Hero Section -->
<section class="hero-section">
    <img src="{{ asset('images/menwatch1.avif')}}" alt="Luxury Watch">  
    <div class="caption">
        <h2>Timeless Elegance</h2>
        <p>Discover our curated collection of luxury watches, blending precision craftsmanship with iconic designs to suit every occasion.</p>
    </div>
</section>

<section class="hero-section">
    <div class="caption">
        <h2>Crafted for Excellence</h2>
        <p>From bold chronographs to classic timepieces, explore styles that combine innovation, heritage, and unmatched sophistication.</p>
    </div>
    <img src="{{ asset('images/menwatch.avif')}}" alt="Stylish Watch">
</section>


<section class="product-grid">
    <div class="product">
        <img src="{{ asset('images/menwatch6.avif')}}" alt="Watch 1">
        <h3>TUDOR Black Bay Harrods</h3>
        <p>£3,550.00</p>
        <button class="add-to-cart">Add to Cart</button>
        <button class="wishlist">&#x2764;</button>
    </div>
    <div class="product">
        <img src="{{ asset('images/menwatch4.avif')}}" alt="Watch 2">
        <h3>Cartier Santos Steel</h3>
        <p>£7,400.00</p>
        <button class="add-to-cart">Add to Cart</button>
        <button class="wishlist">&#x2764;</button>
    </div>
    <div class="product">
        <img src="Images/santos.avif" alt="Watch 3">
        <h3>Cartier Santos Rose Gold</h3>
        <p>£5,800.00</p>
        <button class="add-to-cart">Add to Cart</button>
        <button class="wishlist">&#x2764;</button>
    </div>
    <div class="product">
        <img src="{{ asset('images/menwatch.avif')}}" alt="Watch 4"> 
        <h3>New Brand Watch</h3>
        <p>£2,500.00</p>
        <button class="add-to-cart">Add to Cart</button>
        <button class="wishlist">&#x2764;</button>
    </div>
    <div class="product">
        <img src="Images/menwatch7.avif" alt="Watch 5">
        <h3>Classic Chronograph</h3>
        <p>£4,200.00</p>
        <button class="add-to-cart">Add to Cart</button>
        <button class="wishlist">&#x2764;</button>
    </div>
</section>




    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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


    <!-- Overlay -->
    <div id="overlay"></div>

    <!-- Login Box -->
    <div id="login-box">
        <span id="close-login">&times;</span>
        <h3>Login</h3>
        <input type="text" id="username" placeholder="Username">
        <input type="password" id="password" placeholder="Password">
        <button id="login-button">Login</button>
        <p>Don't have an account? <a href="#">Sign Up</a></p>
    </div>

    
    <script>
        // Toggle Search Bar
        const searchIcon = document.getElementById('search-icon');
        const searchBar = document.getElementById('search-bar');
        const personIcon = document.getElementById('person-icon'); // Login button
        const loginBox = document.getElementById('login-box');
        const overlay = document.getElementById('overlay');
        const closeLogin = document.getElementById('close-login');
        let isSearchOpen = false;

        searchIcon.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent this click from triggering document's click handler
            if (isSearchOpen) {
                searchBar.style.width = '0';
                searchBar.classList.remove('open'); // Remove expanded border color
            } else {
                searchBar.style.width = '200px';
                searchBar.classList.add('open'); // Add expanded border color
            }
            isSearchOpen = !isSearchOpen;
        });

        document.addEventListener('click', (event) => {
            // Check if the click is outside the search bar and search icon
            if (!searchBar.contains(event.target) && !searchIcon.contains(event.target)) {
                searchBar.style.width = '0';
                searchBar.classList.remove('open'); // Remove expanded border color
                isSearchOpen = false; // Reset search open state
            }
        });

        // Show Login Box
        personIcon.addEventListener('click', () => {
            loginBox.style.display = 'block';
            overlay.style.display = 'block';
        });

        // Close Login Box
        closeLogin.addEventListener('click', () => {
            loginBox.style.display = 'none';
            overlay.style.display = 'none';
        });

        overlay.addEventListener('click', () => {
            loginBox.style.display = 'none';
            overlay.style.display = 'none';
        });

        // Change button appearance on input
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        const loginButton = document.getElementById('login-button');

        function toggleButtonState() {
            if (username.value && password.value) {
                loginButton.classList.add('active');
            } else {
                loginButton.classList.remove('active');
            }
        }

        username.addEventListener('input', toggleButtonState);
        password.addEventListener('input', toggleButtonState);
    </script>
</body>
</html>