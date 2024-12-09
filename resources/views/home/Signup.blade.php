<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>

/* Sign-Up Page Styles */
.signup-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    background-color: #f9f9f9;
    
}

.signup-box {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 350px;
}

.signup-box h2 {
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: 700;
}

.signup-box input {
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 0; /* Make corners sharp */
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
}

.signup-box button {
    width: 95%;
    padding: 10px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    border: 2px solid black;
    background: white;
    color: black;
    cursor: pointer;
    transition: background 0.3s ease, color 0.3s ease;
    border-radius: 0; /* Make corners sharp */
}

.signup-box button.active {
    background: black;
    color: white;
}

.signup-box p {
    font-size: 14px;
    margin-top: 15px;
}

.signup-box p a {
    color: black;
    text-decoration: none;
    font-weight: bold;
}

.signup-box p a:hover {
    color: gray;
}
</style>


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
                <a href="{{ route('home.index') }}">HOME</a>
                <a href="{{ route('men') }}">MEN</a>
                <a href="{{ route('women') }}">WOMAN</a>
                <a href="{{ route('kid') }}">KIDS</a>
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
            <!-- Hidden Search Bar -->
            <div class="search-bar" id="search-bar">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>


      <div class="signup-container">
        <div class="signup-box">
            <h2>Sign Up</h2>
            <form id="signup-form">
                <input type="text" id="first-name" placeholder="First Name" required>
                <input type="text" id="last-name" placeholder="Last Name" required>
                <input type="email" id="email" placeholder="Email" required>
                <input type="password" id="password" placeholder="Password" required>
                <button type="submit" id="signup-button">Sign Up</button>
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </form>
        </div>
    </div>

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
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Privacy Policy</a></li>
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







         // Change button appearance on input
        const inputs = document.querySelectorAll('#signup-form input');
        const signupButton = document.getElementById('signup-button');

        function toggleSignupButtonState() {
            const allFieldsFilled = Array.from(inputs).every(input => input.value.trim() !== "");
            if (allFieldsFilled) {
                signupButton.classList.add('active');
            } else {
                signupButton.classList.remove('active');
            }
        }

        inputs.forEach(input => input.addEventListener('input', toggleSignupButtonState));
    </script>
    </script>
</body>
</html>