<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Product Search</title>
</head>


<style>

html, body {
    height: 100%; 
    margin: 0; 
    display: flex;
    flex-direction: column;
}

body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.main-content {
    flex-grow: 1; 
}

footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}



</style>

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
                <a href="products.html" class="active">PRODUCTS</a>
                <a href="{{route('about-us')}}">ABOUT US</a>
            </div>
        </div>
        <div class="navbar-right">
            <div class="search-icon">
                <img src="Images/Search.png" alt="Search" id="search-icon">
            </div>
            <div class="bag-icon">
                <a href="{{route('check-out')}}">
                    <img src="Images/Bag.png" alt="Bag">
                </a>
            </div>
            <div class="person-icon">
                <a href="signup.html"><img src="Images/Person.png" alt="Person" id="person-icon"></a>
            </div>
            <div class="search-bar" id="search-bar">
            </div>
        </div>
    </div>

    <div class="search-section">
        <h1>Search Our Products</h1>

        <!-- Large Search Bar -->
        <div class="search-bar-container">
            <input type="text" id="search-input" placeholder="Search for products..." />
            <button id="search-btn">Search</button>
        </div>

        <!-- Filters Section -->
        <div class="filters-container">
            <div class="filter-category">
                <label for="category">Category:</label>
                <select id="category-filter">
                    <option value="">All Categories</option>
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="kids">Kids</option>
                    <option value="accessories">Accessories</option>
                    <option value="babies">Babies</option>
                </select>
            </div>
        </div>
    </div>

    <div class="product-grid" id="product-grid">
        <!-- products will appear here -->
    </div>    

    

    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h3>About Us</h3>
                <p>
                    We are a leading online store providing the latest fashion trends for everyone. Our mission is to deliver quality products at affordable prices.
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
    <script src="{{ asset('js/basket.js') }}"></script>    "{{ asset('js/productCatalog.js') }}"
    <script src="{{ asset('js/productCatalog.js') }}"></script>
    <script>
       document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('search-input');
            const searchButton = document.getElementById('search-btn');
            const categoryFilter = document.getElementById('category-filter');
            const productGrid = document.getElementById('product-grid');

            // Function that displays the products as cards
            function displayProducts(products) {
            const productGrid = document.querySelector('.product-grid');
            productGrid.innerHTML = '';  // this will clear the existing products

            if (products.length > 0) {
                products.forEach(product => {
                    const productCard = `
                        <div class="product-card" data-id="${product.id}">
                            <img src="${product.image}" alt="${product.name}">
                            <h3>${product.brand}</h3>
                            <p>${product.name}</p>
                            <p>£${product.price.toFixed(2)}</p>
                            <button class="add-to-cart" data-name="${product.name}" data-price="${product.price}" data-image="${product.image}">Add to Cart</button>
                        </div>
                    `;
                    productGrid.innerHTML += productCard;
                });

               
                const addToCartButtons = document.querySelectorAll('.add-to-cart');
                addToCartButtons.forEach(button => {
                    button.addEventListener('click', (event) => {
                        const name = button.dataset.name;
                        const price = parseFloat(button.dataset.price);
                        const image = button.dataset.image;

                        addToBasket({ name, price: parseFloat(price), image }); //calls add to basket
                    });
                });
            } else {
                productGrid.innerHTML = '<p>No products found</p>';
            }
        }

            // filters and searches
            function searchAndFilter() {
                const query = searchInput.value.trim().toLowerCase();
                const category = categoryFilter.value;

                // will filter based on search query and category
                const filteredProducts = productCatalog.products.filter(product => {
                    const matchesQuery = product.name.toLowerCase().includes(query) || 
                                         product.description.toLowerCase().includes(query);
                    const matchesCategory = category ? product.category === category : true;

                    return matchesQuery && matchesCategory;
                });

                displayProducts(filteredProducts);
            }

            
            searchButton.addEventListener('click', searchAndFilter);
            searchInput.addEventListener('input', searchAndFilter);
            categoryFilter.addEventListener('change', searchAndFilter);

            //load all the products
            displayProducts(productCatalog.products);
        });
    </script>
    
</body>

</html>
