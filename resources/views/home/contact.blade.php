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
                <a href="{{route('about-us')}}">ABOUT US</a>
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
                <a href="signup.html"><img src="Images/Person.png" alt="Person" id="person-icon"></a>
            </div>
            <!-- Hidden Search Bar -->
            <div class="search-bar" id="search-bar">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>


      <!-- Main Content -->
      <main>
        <section id="contact">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Whether you have a question, feedback, or just want to say hello, feel free to reach out. Fill out the form below and we'll get back to you as soon as possible.</p>
            <div class = "form-container">
            <form id="contactForm" action="https://formspree.io/f/mldekele" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Submit</button>
            </form>
            <div id="form-response"></div>
        </section>
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
                <li><a href="aboutus.html">About</a></li>
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