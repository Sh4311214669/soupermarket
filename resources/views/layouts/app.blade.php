<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshMart - Your Neighborhood Supermarket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="/assets/css/app.css" rel="stylesheet" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


    </style>
</head>
<body class="bg-gray-50">
    <!-- Header/Navigation -->
    {{-- @include('layouts.header') --}}

    <!-- Mobile Search -->
    <div class="md:hidden bg-white py-2 px-4 shadow-sm">
        <div class="relative">
            <input type="text" placeholder="Search for groceries..."
                   class="search-bar w-full px-4 py-2 rounded-full border border-gray-300 focus:border-green-500 transition">
            <button class="absolute right-0 top-0 h-full px-4 text-gray-500 hover:text-green-600">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section text-white">
        <div class="container mx-auto px-4 py-12 md:py-20">
            <div class="max-w-2xl">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">Fresh Groceries Delivered to Your Door</h1>
                <p class="text-lg md:text-xl mb-8 opacity-90">Shop the freshest produce, meats, dairy and pantry staples at supermarket prices.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="px-8 py-3 bg-white text-green-700 rounded-md font-medium hover:bg-gray-100 transition">
                        Shop Now
                    </button>
                    <button class="px-8 py-3 border border-white text-white rounded-md font-medium hover:bg-white hover:bg-opacity-10 transition">
                        Weekly Deals
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Categories -->
    <section class="container mx-auto px-4 py-6">
        <div class="grid grid-cols-4 gap-2 md:gap-4">
            <a href="#" class="category-chip bg-white rounded-lg p-3 text-center shadow-sm cursor-pointer transition hover:shadow-md">
                <div class="bg-green-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-2">
                    <i class="fas fa-apple-alt text-green-600 text-xl"></i>
                </div>
                <span class="text-xs md:text-sm font-medium text-gray-700">Produce</span>
            </a>
            <a href="#" class="category-chip bg-white rounded-lg p-3 text-center shadow-sm cursor-pointer transition hover:shadow-md">
                <div class="bg-blue-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-2">
                    <i class="fas fa-wine-bottle text-blue-600 text-xl"></i>
                </div>
                <span class="text-xs md:text-sm font-medium text-gray-700">Dairy</span>
            </a>
            <a href="#" class="category-chip bg-white rounded-lg p-3 text-center shadow-sm cursor-pointer transition hover:shadow-md">
                <div class="bg-red-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-2">
                    <i class="fas fa-drumstick-bite text-red-600 text-xl"></i>
                </div>
                <span class="text-xs md:text-sm font-medium text-gray-700">Meat</span>
            </a>
            <a href="#" class="category-chip bg-white rounded-lg p-3 text-center shadow-sm cursor-pointer transition hover:shadow-md">
                <div class="bg-yellow-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-2">
                    <i class="fas fa-bread-slice text-yellow-600 text-xl"></i>
                </div>
                <span class="text-xs md:text-sm font-medium text-gray-700">Bakery</span>
            </a>
            <a href="#" class="category-chip bg-white rounded-lg p-3 text-center shadow-sm cursor-pointer transition hover:shadow-md">
                <div class="bg-purple-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-2">
                    <i class="fas fa-wine-glass-alt text-purple-600 text-xl"></i>
                </div>
                <span class="text-xs md:text-sm font-medium text-gray-700">Beverages</span>
            </a>
            <a href="#" class="category-chip bg-white rounded-lg p-3 text-center shadow-sm cursor-pointer transition hover:shadow-md">
                <div class="bg-pink-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-2">
                    <i class="fas fa-ice-cream text-pink-600 text-xl"></i>
                </div>
                <span class="text-xs md:text-sm font-medium text-gray-700">Frozen</span>
            </a>
            <a href="#" class="category-chip bg-white rounded-lg p-3 text-center shadow-sm cursor-pointer transition hover:shadow-md">
                <div class="bg-indigo-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-2">
                    <i class="fas fa-pump-medical text-indigo-600 text-xl"></i>
                </div>
                <span class="text-xs md:text-sm font-medium text-gray-700">Health</span>
            </a>
            <a href="#" class="category-chip bg-white rounded-lg p-3 text-center shadow-sm cursor-pointer transition hover:shadow-md">
                <div class="bg-gray-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-2">
                    <i class="fas fa-home text-gray-600 text-xl"></i>
                </div>
                <span class="text-xs md:text-sm font-medium text-gray-700">Household</span>
            </a>
        </div>
    </section>



    <!-- Fresh Produce -->
    <section class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Fresh Produce</h2>
            <a href="#" class="text-green-600 hover:underline">View All</a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <!-- Product 1 -->
            <div class="product-card bg-white rounded-lg overflow-hidden shadow-sm transition duration-300 relative">
                <div class="fresh-badge">NEW</div>
                <div class="p-4">
                    <img src="https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                         alt="Avocados" class="w-full h-32 object-contain mb-4">
                    <h3 class="font-medium text-gray-800 mb-1">Hass Avocados</h3>
                    <p class="text-gray-500 text-sm mb-2">Each</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-green-600 font-bold">$1.49</span>
                        </div>
                        <button class="add-to-cart p-2 bg-green-100 text-green-600 rounded-full hover:bg-green-200 transition"
                                data-id="201" data-name="Hass Avocados" data-price="1.49">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card bg-white rounded-lg overflow-hidden shadow-sm transition duration-300 relative">
                <div class="p-4">
                    <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                         alt="Bananas" class="w-full h-32 object-contain mb-4">
                    <h3 class="font-medium text-gray-800 mb-1">Bananas</h3>
                    <p class="text-gray-500 text-sm mb-2">per lb</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-green-600 font-bold">$0.69</span>
                        </div>
                        <button class="add-to-cart p-2 bg-green-100 text-green-600 rounded-full hover:bg-green-200 transition"
                                data-id="202" data-name="Bananas" data-price="0.69">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card bg-white rounded-lg overflow-hidden shadow-sm transition duration-300 relative">
                <div class="fresh-badge">ORGANIC</div>
                <div class="p-4">
                    <img src="https://images.unsplash.com/photo-1566842600171-0f2eaedf8687?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                         alt="Carrots" class="w-full h-32 object-contain mb-4">
                    <h3 class="font-medium text-gray-800 mb-1">Organic Carrots</h3>
                    <p class="text-gray-500 text-sm mb-2">1lb bag</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-green-600 font-bold">$2.29</span>
                        </div>
                        <button class="add-to-cart p-2 bg-green-100 text-green-600 rounded-full hover:bg-green-200 transition"
                                data-id="203" data-name="Organic Carrots" data-price="2.29">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card bg-white rounded-lg overflow-hidden shadow-sm transition duration-300 relative">
                <div class="p-4">
                    <img src="https://images.unsplash.com/photo-1601493700631-2b16ec4b4716?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                         alt="Tomatoes" class="w-full h-32 object-contain mb-4">
                    <h3 class="font-medium text-gray-800 mb-1">Vine Tomatoes</h3>
                    <p class="text-gray-500 text-sm mb-2">per lb</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-green-600 font-bold">$2.99</span>
                        </div>
                        <button class="add-to-cart p-2 bg-green-100 text-green-600 rounded-full hover:bg-green-200 transition"
                                data-id="204" data-name="Vine Tomatoes" data-price="2.99">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card bg-white rounded-lg overflow-hidden shadow-sm transition duration-300 relative">
                <div class="fresh-badge">SEASONAL</div>
                <div class="p-4">
                    <img src="https://images.unsplash.com/photo-1550258987-190a2d41a8ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                         alt="Strawberries" class="w-full h-32 object-contain mb-4">
                    <h3 class="font-medium text-gray-800 mb-1">Strawberries</h3>
                    <p class="text-gray-500 text-sm mb-2">1lb container</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-green-600 font-bold">$3.49</span>
                        </div>
                        <button class="add-to-cart p-2 bg-green-100 text-green-600 rounded-full hover:bg-green-200 transition"
                                data-id="205" data-name="Strawberries" data-price="3.49">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    {{-- @include('layouts.footer') --}}


    <!-- Shopping Cart Sidebar -->
    <div id="cart-sidebar" class="fixed top-0 right-0 h-full w-full md:w-96 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50 overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold">Your Cart (<span id="sidebar-cart-count">0</span>)</h2>
                <button id="close-cart" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <div id="cart-items" class="space-y-4 mb-6">
                <!-- Cart items will be added here dynamically -->
                <div class="text-center py-8 text-gray-500">
                    <i class="fas fa-shopping-cart text-4xl mb-2"></i>
                    <p>Your cart is empty</p>
                </div>
            </div>

            <div class="border-t border-gray-200 pt-4 mb-6">
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Subtotal</span>
                    <span id="cart-subtotal" class="font-medium">$0.00</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Tax (7%)</span>
                    <span id="cart-tax" class="font-medium">$0.00</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Delivery</span>
                    <span class="font-medium">$4.99</span>
                </div>
                <div class="flex justify-between text-lg font-bold mt-4">
                    <span>Total</span>
                    <span id="cart-total">$4.99</span>
                </div>
            </div>

            <button class="w-full py-3 bg-green-600 text-white rounded-md font-medium hover:bg-green-700 transition mb-4">
                Proceed to Checkout
            </button>

            <div class="text-center">
                <a href="#" class="text-green-600 text-sm hover:underline">Continue Shopping</a>
            </div>
        </div>
    </div>

    <!-- Cart Overlay -->
    <div id="cart-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

    <!-- Add to Cart Notification -->
    <div id="cart-notification" class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-md shadow-lg hidden items-center cart-notification">
        <i class="fas fa-check-circle mr-2"></i>
        <span>Item added to cart!</span>
    </div>

    <script>
        // Shopping Cart Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const cartBtn = document.getElementById('cart-btn');
            const closeCartBtn = document.getElementById('close-cart');
            const cartSidebar = document.getElementById('cart-sidebar');
            const cartOverlay = document.getElementById('cart-overlay');
            const cartItemsContainer = document.getElementById('cart-items');
            const cartCountElements = document.querySelectorAll('#cart-count, #sidebar-cart-count');
            const cartSubtotal = document.getElementById('cart-subtotal');
            const cartTax = document.getElementById('cart-tax');
            const cartTotal = document.getElementById('cart-total');
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const cartNotification = document.getElementById('cart-notification');

            let cart = [];

            // Toggle Cart Sidebar
            cartBtn.addEventListener('click', () => {
                cartSidebar.classList.remove('translate-x-full');
                cartOverlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });

            closeCartBtn.addEventListener('click', () => {
                cartSidebar.classList.add('translate-x-full');
                cartOverlay.classList.add('hidden');
                document.body.style.overflow = '';
            });

            cartOverlay.addEventListener('click', () => {
                cartSidebar.classList.add('translate-x-full');
                cartOverlay.classList.add('hidden');
                document.body.style.overflow = '';
            });

            // Add to Cart Functionality
            addToCartButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const id = button.getAttribute('data-id');
                    const name = button.getAttribute('data-name');
                    const price = parseFloat(button.getAttribute('data-price'));

                    // Check if item already in cart
                    const existingItem = cart.find(item => item.id === id);

                    if (existingItem) {
                        existingItem.quantity += 1;
                    } else {
                        cart.push({
                            id,
                            name,
                            price,
                            quantity: 1
                        });
                    }

                    updateCart();
                    showNotification();
                });
            });

            // Update Cart UI
            function updateCart() {
                // Update cart count
                const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
                cartCountElements.forEach(el => el.textContent = totalItems);

                // Update cart items list
                if (cart.length === 0) {
                    cartItemsContainer.innerHTML = `
                        <div class="text-center py-8 text-gray-500">
                            <i class="fas fa-shopping-cart text-4xl mb-2"></i>
                            <p>Your cart is empty</p>
                        </div>
                    `;
                } else {
                    cartItemsContainer.innerHTML = cart.map(item => `
                        <div class="flex items-center border-b border-gray-100 pb-4">
                            <div class="flex-1">
                                <h4 class="font-medium">${item.name}</h4>
                                <p class="text-gray-600 text-sm">$${item.price.toFixed(2)}</p>
                            </div>
                            <div class="flex items-center">
                                <button class="quantity-btn px-2 py-1 border border-gray-300 rounded-l-md" data-id="${item.id}" data-action="decrease">
                                    <i class="fas fa-minus text-xs"></i>
                                </button>
                                <span class="px-3 py-1 border-t border-b border-gray-300">${item.quantity}</span>
                                <button class="quantity-btn px-2 py-1 border border-gray-300 rounded-r-md" data-id="${item.id}" data-action="increase">
                                    <i class="fas fa-plus text-xs"></i>
                                </button>
                            </div>
                            <span class="ml-4 font-medium">$${(item.price * item.quantity).toFixed(2)}</span>
                            <button class="ml-4 text-red-500 remove-btn" data-id="${item.id}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    `).join('');

                    // Add event listeners to quantity buttons
                    document.querySelectorAll('.quantity-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            const id = this.getAttribute('data-id');
                            const action = this.getAttribute('data-action');
                            const item = cart.find(item => item.id === id);

                            if (action === 'increase') {
                                item.quantity += 1;
                            } else if (action === 'decrease' && item.quantity > 1) {
                                item.quantity -= 1;
                            }

                            updateCart();
                        });
                    });

                    // Add event listeners to remove buttons
                    document.querySelectorAll('.remove-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            const id = this.getAttribute('data-id');
                            cart = cart.filter(item => item.id !== id);
                            updateCart();
                        });
                    });
                }

                // Update subtotal, tax and total
                const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
                const tax = subtotal * 0.07;
                const deliveryFee = 4.99;
                const total = subtotal + tax + deliveryFee;

                cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
                cartTax.textContent = `$${tax.toFixed(2)}`;
                cartTotal.textContent = `$${total.toFixed(2)}`;
            }

            // Show notification when item is added to cart
            function showNotification() {
                cartNotification.classList.remove('hidden');
                setTimeout(() => {
                    cartNotification.classList.add('hidden');
                }, 3000);
            }
        });
    </script>
</body>
</html>
