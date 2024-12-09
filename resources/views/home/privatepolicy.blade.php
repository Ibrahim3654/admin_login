<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendSwap</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        ul {
    list-style-type: disc; 
    margin-left: 20px;
    font-size: 12px;
}
h2, p, h3{
    margin-left: 50px;
    margin-top: 30px;
}
ul{
    margin-left: 100px;
    margin-top: 30px;
}
    </style>
</head>
<body>
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
        </div>
    </div>
    <h2>Privacy and Policy</h2>
    <p>We are a ecomerce store who sells clothing and accessories, When you vist our website you gie us information
        about yourself which we use, <br>on this page we would like to tell you about what information we use, we
        do encourage you to read the whole thing so please take your time. </p>
        <h3>What information do we collect</h3>
        <ul>
            <li>Information about your orders, this includes what item you have purchased
                your saved items, your shopping prefrences and the payment methods you use.
            </li>
            <li>
                We collect information about what products you look at.
            </li>
            <li>
                Your contact details when you check-out and signup for an account with us this includes (name, email adress,
                phone number, date of birth, postal address).
            </li>
            <li>
                Billing information.
            </li>
        </ul>
        <h3>how we store your information</h3>
        <p>At TrendSwap we value your privacy and security, we take this process very seriously, especially
            when storing and managing your personal information.</p>
        <ul>
            <li>
                All the information we collect from you is stored on a secure SQL database,
                we use encryption methods to protect your sensiteve data, such as personal details,
                payment infomration when proceeding with a transaction and signing up for a site.
            </li>
            <li>
                Only authorized personnel have access to your personal information, we only access your data
                when needed and when you have provided us with premision to access it, we make sure access to your
                data is limited and we never access personal banking information.
            </li>
            <li>
                When we process your payment we use trusted payment providers to process your payment,
                this ensures that your payment information is helded safely and processed safely.
            </li>
            <li>
                We keep your personal information for as long as necessary to provide you with our full service
                and fullfill any legal obligation, if you close your account with us we make sure your data is sercurly deleted.
            </li>
        </ul>
        <h3>What you agree to</h3>
        <p>By using TrendSwap you agree to the collection, management and storage of your personal 
            data as described in the privacy policy section, if you do not agree with our terms please refrain from using 
            our services.</p>
        </p>
        <h3>A kind message from our team</h3>
        <p>Thank you for taking your time to read through our privacy and policy page 
            and we process and store your data, we wish you happy shooping.
        </p>
    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h3>About Us</h3>
                <p>
                    We are a leading online store providing the latest fashion trends for men, women, and kids.
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

        searchIcon.addEventListener('click', () => {
            searchBar.classList.toggle('active');
        });
    </script>
</body>
</html>