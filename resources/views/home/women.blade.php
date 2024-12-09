
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Collection</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>
/* Product Grid Actions */
.product-actions {
    display: flex;
    justify-content: center; /* Centers content horizontally */
    align-items: center;    /* Centers content vertically */
    margin-top: 10px;
    width: 100%;
}

.selectors {
    display: flex;
    gap: 10px;
    width: 50%;
}

.size-dropdown, .quantity-input {
    width: 48%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 0px;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
}

.quantity-input {
    text-align: center;
}

.add-to-cart {
    width: 95%;
    background-color: #333;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 0px;
    cursor: pointer;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 14px;
    text-transform: uppercase;
    text-align: center;
    transition: background 0.3s ease, transform 0.3s ease;
    align-items: center;
}

.add-to-cart:hover {
    background-color: #555;
    transform: scale(1.05);
}

/* Adjusting Responsiveness */
@media screen and (max-width: 768px) {
    .product-actions {
        flex-wrap: wrap;
    }

    .selectors, .add-to-cart {
        width: 100%;
    }

    .selectors {
        margin-bottom: 10px;
    }
}

</style>

<body>
    <!-- Delivery Info -->
    <div class="delivery-info">
        Free Delivery Available | Find out more
    </div>

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="Images/Logo.jpg" alt="Logo">
            </div>
            <div class="navbar-links">
                <a href="{{route('home.index')}}">HOME</a>
                <a href="{{route('men')}}">MEN</a>
                <a href="{{route('women')}}" class="active">WOMEN</a>
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
                <img src="Images/Person.png" alt="Person" id="person-icon">
            </div>
            <div class="search-bar" id="search-bar">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <img src="Images/womendress1.avif" alt="Elegant Dresses">
        <div class="caption">
            <h2>Style Redefined</h2>
            <p>Explore our curated collection of women’s fashion, blending timeless elegance with modern trends for every occasion.</p>
        </div>
    </section>

    <section class="hero-section">
        <div class="caption">
            <h2>Chic and Comfortable</h2>
            <p>From casual wear to evening gowns, find the perfect outfit to express your style effortlessly.</p>
        </div>
        <img src="{{ asset('images/womencoat1.avif') }}" alt="Chic Women's Outfit">
    </section>

    <!-- Product Grid -->
    <section class="product-grid">
        <div class="product">
            <img src="{{ asset('images/womenpuffer2.avif') }}" alt="Elegant Evening Gown">
            <h3>ELIE SAAB</h3>
            <p>Elegant Evening Gown</p>
            <p>£1,250.00</p>
            <div class="product-actions">
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="{{ asset('images/womendress1.avif') }}" alt="Designer Heels">
            <h3>CHRISTIAN LOUBOUTIN</h3>
            <p>Designer Heels</p>
            <p>£895.00</p>
            <div class="product-actions">
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="{{ asset('images/womensweater1.avif') }}" alt="Trench Coat">   
            <h3>BURBERRY</h3>
            <p>Classic Trench Coat</p>
            <p>£1,695.00</p>
            <div class="product-actions">
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="{{ asset('images/womencoat2.avif') }}" alt="Luxury Handbag">
            <h3>GUCCI</h3>
            <p>Luxury Handbag</p>
            <p>£2,200.00</p>
            <div class="product-actions">
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="{{ asset('images/womensweater3.avif') }}" alt="Casual Jacket">
            <h3>MONCLER</h3>
            <p>Down Jacket</p>
            <p>£1,350.00</p>
            <div class="product-actions">
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="{{ asset('images/womenpuffer3.avif') }}" alt="Pleated Skirt">
            <h3>MIU MIU</h3>
            <p>Pleated Midi Skirt</p>
            <p>£695.00</p>
            <div class="product-actions">
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
