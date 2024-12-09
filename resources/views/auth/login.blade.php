<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
        }

        .delivery-info {
            background-color: #f9f9f9;
            padding: 10px 0;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
        }

        /* Navbar Styles */
        .navbar {
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .navbar-left {
            display: flex;
            align-items: center;
        }

        .navbar-logo img {
            height: 40px;
            margin-right: 20px;
        }

        .navbar-links a {
            color: black;
            text-decoration: none;
            margin: 0 10px;
        }

        .navbar-links a:hover {
            color: gray;
        }

        .navbar-right {
            display: flex;
            align-items: center;
        }

        .search-icon img {
            width: 24px;
            cursor: pointer;
        }

        .bag-icon img {
            width: 24px;
            cursor: pointer;
        }

        .person-icon a {
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 8px 12px;
            border-radius: 4px;
            margin-left: 10px;
        }

        .search-bar {
            display: none;
            width: 0;
            transition: width 0.3s ease;
        }

        .search-bar.open {
            display: block;
            width: 200px;
        }

        /* Login Page Styles */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            background-color: #f9f9f9;
        }

        .login-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        .login-box h2 {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .login-box input {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 0; /* Sharp corners */
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
        }

        .login-box button {
            width: 95%;
            padding: 10px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            border: 2px solid black;
            background: white;
            color: black;
            cursor: pointer;
            transition: background 0.3s ease, color 0.3s ease;
            border-radius: 0;
        }

        .login-box button.active {
            background: black;
            color: white;
        }

        .login-box p {
            font-size: 14px;
            margin-top: 15px;
        }

        .login-box p a {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        .login-box p a:hover {
            color: gray;
        }

        /* Footer Styles */
        footer {
            background-color: #333;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-section {
            width: 30%;
            margin-bottom: 20px;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer-section p {
            font-size: 14px;
        }

        .footer-section .social-icons a {
            margin-right: 10px;
        }

        .footer-bottom {
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- Delivery Info -->
    <div class="delivery-info">
        Free Delivery Available | Find out more
    </div>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="Images/Logo.jpg" alt="Logo">
            </div>
            <div class="navbar-links">
                <a href="{{ route('home.index') }}">HOME</a>
                <a href="{{ route('men') }}">MEN</a>
                <a href="{{ route('women') }}">WOMEN</a>
                <a href="{{ route('kid') }}">KIDS</a>
                <a href="{{ route('accessory') }}">ACCESSORIES</a>
                <a href="{{ route('baby') }}">BABIES</a>
                <a href="{{ route('about-us') }}">ABOUT US</a>
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
                @if (Auth::check())
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="logout-button" style="background-color:#f44336; color:white; border:none; padding: 8px 12px; border-radius:4px; cursor:pointer;">
                            Login
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" style="text-decoration: none; color: white; background-color: #007bff; padding: 8px 12px; border-radius: 4px;">
                        Logout
                    </a>
                @endif
            </div>
            <!-- Hidden Search Bar -->
            <div class="search-bar" id="search-bar">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>

    <!-- Login Form -->
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <input type="email" placeholder="Email" id="email" name="email" required>
                <input type="password" placeholder="Password" id="password" name="password" required>
                <button type="submit">Log in</button>
                <p>Don't have an account? <a href="{{ route('sign-up') }}">Sign Up</a></p>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h3>About Us</h3>
                <p>
                    We are a leading online store providing the latest fashion trends for men, women, and kids. Our
                    mission is to deliver quality products at affordable prices.
                </p>
            </div>
            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="{{ route('about-us') }}">About</a></li>
                    <li><a href="{{ route('contact-us') }}">Contact</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h3>Contact Us</h3>
                <p>Email: info@trendswap.com</p>
                <p>Phone: +44 7392 284916</p>
                <div class="social-icons">
                    <a href="#"><img src="Images/FacebookW
