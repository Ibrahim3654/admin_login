<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Collection</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('faq.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>
    #notification {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: black;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-family: 'Montserrat', sans-serif;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 9999;
        opacity: 1;
        transition: opacity 0.3s ease-in-out;
    }

    #notification.show {
        opacity: 1;
    }
</style>

<body>
    <!-- Notification for adding to basket -->
    <div id="notification"></div>
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
                <a href="{{route('about-us')}}">ABOUT US</a>
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
    <section>
        <h2 class="title">Frequently Asked Questions</h2>
        

        <div class="faq">
            <div class="question">
                <h3> What is TrendSwap?</h3>
                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="answer">
                <p>TrendSwap is your go-to online store for trendy and affordable clothing and accessories for men, women, and kids. We offer a wide variety of stylish options for all occasions.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>How can I contact customer support?</h3>
                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="answer">
                <p>You can reach us via email at support@trendswap.com or through our contact form feature available on the website during business hours.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>What payment methods do you accept?</h3>
                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="answer">
                <p> We accept all major credit and debit cards, PayPal, Apple Pay, Google Pay, and other secure payment option</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3> Can I modify or cancel my order?</h3>
                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="answer">
                <p> Orders can be modified or canceled within 24 hours of placing them. Please contact our customer support team as soon as possible.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>Do you offer international shipping?</h3>
                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="answer">
                <p> Yes, TrendSwap ships worldwide. Shipping rates and delivery times vary depending on your location.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>How long will it take to receive my order?</h3>
                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="answer">
                <p>Orders within the UK. typically arrive within 5-7 business days. International orders may take 7-14 business days, depending on the destination.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3> What is your return policy?</h3>
                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="answer">
                <p>We accept returns within 30 days of delivery for unused, unworn items with original tags. Visit our Returns & Refunds page for detailed instructions.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3> How long dose it take to precess my refund?</h3>
                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="answer">
                <p>Refunds are processed within 7-10 business days after receiving your returned items. You can get the refund back in the original payment</p>
            </div>
        </div>


    </section>
    <script src="faq.js"></script>

   
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

    <script src="{{ asset('js/faq.js') }}"></script>
</body>

</html>