<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendSwap</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        
        .categories-section {
            display: flex;
            width: 100%;
            height: 130vh; 
        }

        .category {
            flex: 1; 
            position: relative;
            overflow: hidden;
        }

        .category img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease-in-out; 
        }

        .category a {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0); 
            color: white;
            font-size: 2rem;
            font-weight: bold;
            text-decoration: none;
            background: rgba(0, 0, 0, 0.5); 
            padding: 10px 20px;
            border-radius: 5px;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .category:hover img {
            transform: scale(1.1); 
        }

        .category:hover a {
            transform: translate(-50%, -50%) scale(1);
            background: rgba(0, 0, 0, 0.7); 
        }
    </style>
</head>
<body>
    
    <div class="delivery-info">
        Free Delivery Available | Find out more
    </div>

    <div class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="{{ asset('images/Logo.jpg')}}" alt="Logo">   
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
                <img src="{{ asset('images/Search.png')}}" alt="Search" id="search-icon">  
            </div>
            <div class="bag-icon">
                <a href="{{route('check-out')}}">
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
        </div>
    </div>

    <section class="categories-section">
    
        <div class="category">
            <img src="{{ asset('images/banner3.jpg')}}" alt="Men's Fashion">     
            <a href="{{route('men')}}">MEN</a>
        </div>

        >
        <div class="category">
            <img src="{{ asset('images/banner2.jpg')}}" alt="Women's Fashion">   
            <a href="{{route('women')}}">WOMEN</a>   
        </div>

        
        <div class="category">
            <img src="{{ asset('images/banner4.jpg')}}" alt="Kids' Fashion">  "{{ asset('images/kidbanner.png')}}"
            <a href="{{route('kid')}}">KIDS</a>
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
                    <a href="#"><img src= "{{ asset('images/FacebookW.png')}}" alt="Facebook"></a>         
                    <a href="#"><img src="{{ asset('images/InstagramW.png')}}" alt="Instagram"></a>           
                    <a href="#"><img src= "{{ asset('images/XW.png')}}" alt="X"></a>     
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