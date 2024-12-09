<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>About Us</title>
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
                <a href="{{route('about-us')}}" class="active">ABOUT US</a>
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
            <div class="search-bar" id="search-bar">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>

    <div class="about-container">
        <h1>About TrendSwap</h1>
        <p>
            Welcome to TrendSwap! We are a clothing company that specializes in men's, women's, and children's clothing,
            accessories, and more. TrendSwap is the perfect platform to explore the latest fashion without the hassle.
        </p>
        <h2>Our Mission</h2>
        <p>
            Our mission is to provide a sustainable, convenient, and innovative shopping experience. At TrendSwap, we
            believe in promoting eco-friendly practices while helping people discover new styles. We make it easy for
            you to swap, buy, and sell fashion items, giving everyone access to high-quality, affordable clothing.
        </p>
        <h2>Our Team</h2>
        <p>
            Our team is passionate about fashion, technology, and creating an amazing customer experience. From
            experienced designers to customer support specialists, we work hard to bring you the best service possible.
            We are continuously working on expanding our platform to make it even easier for you to participate in the
            TrendSwap community.
        </p>
        <h2>Contact Us</h2>
        <p>If you have any questions or need support, feel free to reach out to us:</p>
        <ul>
            <li>Email: support@trendswap.com</li>
            <li>Phone: 07123456789</li>
            <li>Address: Aston Uni</li>
        </ul>
    </div>

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

    <script>
        const searchIcon = document.getElementById('search-icon');
        const searchBar = document.getElementById('search-bar');
        let isSearchOpen = false;

        searchIcon.addEventListener('click', (event) => {
            event.stopPropagation();
            if (isSearchOpen) {
                searchBar.style.width = '0';
                searchBar.classList.remove('open');
            } else {
                searchBar.style.width = '200px';
                searchBar.classList.add('open');
            }
            isSearchOpen = !isSearchOpen;
        });

        document.addEventListener('click', (event) => {
            if (!searchBar.contains(event.target) && !searchIcon.contains(event.target)) {
                searchBar.style.width = '0';
                searchBar.classList.remove('open');
                isSearchOpen = false;
            }
        });
    </script>
</body>

</html>