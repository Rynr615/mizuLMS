<nav id="nav-guest" class="w-full bg-gradient-to-r from-blue-50 to-cyan-50 border-b-2 border-blue-200/50 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-[75px]">
        <div class="flex items-center justify-between h-20">
            <!-- Logo & Desktop Menu -->
            <div class="flex items-center gap-8 lg:gap-[50px]">
                <a href="index.html" class="flex shrink-0 transition-transform hover:scale-105 duration-300">
                    <img src="{{ asset('assets/images/logos/logo.svg') }}" class="h-10 w-auto" alt="Mizu LMS logo">
                </a>

                <!-- Desktop Navigation -->
                <ul class="hidden lg:flex items-center gap-8 xl:gap-10">
                    <li class="{{ request()->routeIs('front.index') ? 'font-bold text-blue-600' : 'text-gray-700'}} hover:text-blue-600 hover:font-semibold transition-all duration-300 relative group">
                        <a href="{{ route('front.index') }}" class="flex items-center gap-1">
                            Home
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('front.pricing') ? 'font-bold text-blue-600' : 'text-gray-700'}} hover:text-blue-600 hover:font-semibold transition-all duration-300 relative group">
                        <a href="{{ route('front.pricing') }}" class="flex items-center gap-1">
                            Pricing
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li class="text-gray-700 hover:text-blue-600 hover:font-semibold transition-all duration-300 relative group">
                        <a href="#" class="flex items-center gap-1">
                            Features
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li class="text-gray-700 hover:text-blue-600 hover:font-semibold transition-all duration-300 relative group">
                        <a href="#" class="flex items-center gap-1">
                            Testimonials
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Desktop Actions -->
            <div class="hidden lg:flex items-center gap-5">
                <a href="#" class="flex shrink-0 p-2 hover:bg-blue-100 rounded-full transition-all duration-300 group">
                    <img src="{{ asset('assets/images/icons/device-message.svg') }}" class="w-6 h-6 group-hover:scale-110 transition-transform" alt="message icon">
                </a>
                <div class="h-8 w-px bg-gradient-to-b from-blue-200 via-cyan-300 to-blue-200"></div>
                <div class="flex items-center gap-3">
                    <a href="{{ route('register') }}"
                        class="rounded-full border-2 border-blue-300 py-2.5 px-6 bg-white/80 backdrop-blur-sm hover:bg-blue-50 hover:border-blue-500 hover:shadow-lg hover:shadow-blue-200/50 transition-all duration-300 group">
                        <span class="font-semibold text-gray-700 group-hover:text-blue-600">Sign Up</span>
                    </a>
                    <a href="{{ route('login') }}"
                        class="rounded-full py-2.5 px-6 bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 hover:shadow-xl hover:shadow-blue-300/50 hover:-translate-y-0.5 transition-all duration-300">
                        <span class="font-semibold text-white">My Account</span>
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg hover:bg-blue-100 transition-colors duration-300">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden border-t-2 border-blue-200/50 bg-white/95 backdrop-blur-md">
        <div class="px-4 py-6 space-y-4">
            <!-- Mobile Navigation Links -->
            <ul class="space-y-3">
                <li>
                    <a href="{{ route('front.index') }}"
                        class="{{ request()->routeIs('front.index') ? 'bg-gradient-to-r from-blue-500 to-cyan-500 text-white' : 'text-gray-700 hover:bg-blue-50'}} block px-4 py-3 rounded-xl font-medium transition-all duration-300">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('front.pricing') }}"
                        class="{{ request()->routeIs('front.pricing') ? 'bg-gradient-to-r from-blue-500 to-cyan-500 text-white' : 'text-gray-700 hover:bg-blue-50'}} block px-4 py-3 rounded-xl font-medium transition-all duration-300">
                        Pricing
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-3 rounded-xl font-medium text-gray-700 hover:bg-blue-50 transition-all duration-300">
                        Features
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-3 rounded-xl font-medium text-gray-700 hover:bg-blue-50 transition-all duration-300">
                        Testimonials
                    </a>
                </li>
            </ul>

            <!-- Mobile Actions -->
            <div class="pt-4 space-y-3 border-t-2 border-blue-100">
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-blue-50 transition-all duration-300">
                    <img src="{{ asset('assets/images/icons/device-message.svg') }}" class="w-6 h-6" alt="message icon">
                    <span class="font-medium text-gray-700">Messages</span>
                </a>
                <a href="{{ route('register') }}"
                    class="block text-center rounded-xl border-2 border-blue-300 py-3 px-6 bg-white hover:bg-blue-50 hover:border-blue-500 transition-all duration-300">
                    <span class="font-semibold text-gray-700">Sign Up</span>
                </a>
                <a href="{{ route('login') }}"
                    class="block text-center rounded-xl py-3 px-6 bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 transition-all duration-300">
                    <span class="font-semibold text-white">My Account</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
</script>
