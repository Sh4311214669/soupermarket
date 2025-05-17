<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <i class="fas fa-shopping-basket text-green-600 text-2xl"></i>
            <span class="text-xl font-bold text-green-600">FreshMart</span>
        </div>

        <div class="hidden md:flex flex-1 mx-8">
            <div class="relative w-full max-w-xl">
                <input type="text" placeholder="Search for groceries..."
                    class="search-bar w-full px-4 py-2 rounded-full border border-gray-300 focus:border-green-500 transition">
                <button class="absolute right-0 top-0 h-full px-4 text-gray-500 hover:text-green-600">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="flex items-center space-x-4">
            <button class="p-2 text-gray-600 hover:text-green-600">
                <i class="fas fa-map-marker-alt text-xl"></i>
                <span class="text-xs">Store Locator</span>
            </button>
            <button class="p-2 text-gray-600 hover:text-green-600 relative">
                <i class="fas fa-user text-xl"></i>
            </button>
            <button id="cart-btn" class="p-2 text-gray-600 hover:text-green-600 relative">
                <i class="fas fa-shopping-cart text-xl"></i>
                <span id="cart-count"
                    class="absolute -top-1 -right-1 bg-green-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
            </button>
            <button class="md:hidden p-2 text-gray-600 hover:text-green-600">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </div>
</header>