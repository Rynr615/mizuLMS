<nav id="nav-auth" class="flex w-full bg-white/80 backdrop-blur-md border-b border-sky-200">
    <div class="flex w-full max-w-[1280px] px-4 sm:px-6 lg:px-[75px] py-4 items-center justify-between mx-auto">

        <!-- LEFT SIDE -->
        <div class="flex items-center gap-4">
            <!-- Logo -->
            <a href="{{ route('front.index') }}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="logo" class="w-auto h-8">
            </a>

            <!-- Desktop Search -->
            <form method="GET" action="{{ route('dashboard.search.courses') }}" class="relative hidden lg:block">
                <label class="group block">
                    <input type="text" name="search"
                        class="appearance-none outline-none ring-1 ring-sky-200 rounded-full w-[330px] xl:w-[400px] py-[12px] px-5 bg-white font-bold placeholder:font-normal group-focus-within:ring-sky-400 transition-all duration-300 pr-[50px]"
                        placeholder="Search course by name">
                    <button type="submit"
                        class="absolute right-0 top-0 h-full w-[48px] flex items-center justify-center">
                        <img src="{{ asset('assets/images/icons/search-normal-green-fill.svg') }}" class="w-8 h-8"
                            alt="">
                    </button>
                </label>
            </form>
        </div>

        <!-- RIGHT SIDE DESKTOP -->
        <div class="hidden lg:flex items-center gap-5">

            <a href="#">
                <img src="{{ asset('assets/images/icons/device-message.svg') }}" class="w-6 h-6" alt="icon">
            </a>
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('assets/images/icons/category.svg') }}" class="w-6 h-6" alt="icon">
            </a>
            <a href="#">
                <img src="{{ asset('assets/images/icons/notification.svg') }}" class="w-6 h-6" alt="icon">
            </a>

            <div class="h-[50px] w-px bg-sky-200"></div>

            <!-- Profile -->
            <div class="relative flex items-center gap-3">
                <div class="w-[50px] h-[50px] rounded-full overflow-hidden">
                    <img src="{{ Storage::url($user->photo) }}" class="w-full h-full object-cover">
                </div>

                <div>
                    <p class="font-semibold text-lg text-sky-900">{{ $user->name }}</p>
                    <p class="text-sm text-sky-600">{{ $user->occupation }}</p>
                </div>

                <button id="dropdown-opener" class="w-6 h-6">
                    <img src="{{ asset('assets/images/icons/arrow-circle-down.svg') }}">
                </button>

                <!-- Dropdown -->
                <div id="dropdown"
                    class="absolute top-full right-0 mt-2 w-[170px] bg-white rounded-xl border border-sky-200 py-4 px-5 shadow-[0px_10px_30px_0px_rgba(14,165,233,0.2)] hidden">
                    <ul class="flex flex-col gap-3">
                        <li class="hover:text-sky-500"><a href="{{ route('dashboard') }}">My Courses</a></li>
                        <li class="hover:text-sky-500"><a href="#">Certificates</a></li>
                        <li class="hover:text-sky-500"><a
                                href="{{ route('dashboard.subscriptions') }}">Subscriptions</a></li>
                        <li class="hover:text-sky-500"><a href="#">Settings</a></li>
                        <li class="hover:text-sky-500">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- MOBILE HAMBURGER BUTTON -->
        <button id="hamburger-btn" class="lg:hidden w-9 h-9 flex items-center justify-center">
            <img src="{{ asset('assets/images/icons/category.svg') }}" class="w-7 h-7">
        </button>
    </div>
</nav>



<!-- MOBILE SIDEMENU / DRAWER -->
<div id="mobile-menu"
    class="fixed top-0 right-0 w-[80%] max-w-[320px] h-full bg-white shadow-xl z-[999] translate-x-full transition-transform duration-300 flex flex-col">

    <div class="flex justify-between items-center px-5 py-4 border-b border-sky-200">
        <p class="text-lg font-semibold text-sky-900">Menu</p>
        <button id="close-menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-sky-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div class="p-5 space-y-6 overflow-y-auto">

        <!-- SEARCH BAR MOBILE -->
        <form method="GET" action="{{ route('dashboard.search.courses') }}" class="relative">
            <label class="group block">
                <input type="text" name="search"
                    class="appearance-none outline-none ring-1 ring-sky-200 rounded-full w-full py-[12px] px-5 bg-white font-bold placeholder:font-normal group-focus-within:ring-sky-400 transition-all duration-300 pr-[50px]"
                    placeholder="Search course by name">
                <button type="submit" class="absolute right-0 top-0 h-full w-[48px] flex items-center justify-center">
                    <img src="{{ asset('assets/images/icons/search-normal-green-fill.svg') }}" class="w-8 h-8">
                </button>
            </label>
        </form>

        <!-- ICONS -->
        <div class="flex items-center gap-4">
            <a href="#"><img src="{{ asset('assets/images/icons/device-message.svg') }}" class="w-6 h-6"></a>
            <a href="#"><img src="{{ asset('assets/images/icons/category.svg') }}" class="w-6 h-6"></a>
            <a href="#"><img src="{{ asset('assets/images/icons/notification.svg') }}" class="w-6 h-6"></a>
        </div>

        <hr class="border-sky-200">

        <!-- PROFILE -->
        <div class="flex items-center gap-3">
            <div class="w-[48px] h-[48px] rounded-full overflow-hidden">
                <img src="{{ Storage::url($user->photo) }}" class="w-full h-full object-cover">
            </div>
            <div>
                <p class="font-semibold text-sky-900">{{ $user->name }}</p>
                <p class="text-sm text-sky-600">{{ $user->occupation }}</p>
            </div>
        </div>

        <!-- MENU LINKS -->
        <ul class="flex flex-col gap-4 pt-3">
            <li><a href="{{ route('dashboard') }}" class="text-sky-800 hover:text-sky-500">My Courses</a></li>
            <li><a href="#" class="text-sky-800 hover:text-sky-500">Certificates</a></li>
            <li><a href="{{ route('dashboard.subscriptions') }}"
                    class="text-sky-800 hover:text-sky-500">Subscriptions</a></li>
            <li><a href="#" class="text-sky-800 hover:text-sky-500">Settings</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"
                        class="text-red-500">
                        Logout
                    </a>
                </form>
            </li>
        </ul>

    </div>
</div>


<!-- JS TOGGLE -->
<script>
    const menu = document.getElementById('mobile-menu');
    document.getElementById('hamburger-btn').onclick = () => menu.classList.remove('translate-x-full');
    document.getElementById('close-menu').onclick = () => menu.classList.add('translate-x-full');
</script>
