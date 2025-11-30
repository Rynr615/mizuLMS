<nav id="bottom-nav" class="w-full bg-white border-t border-sky-200 py-2">
    <ul class="flex w-full max-w-[1280px] mx-auto
               px-3 md:px-[75px]
               justify-between md:justify-start
               md:gap-3">

        <!-- Overview -->
        <li class="group">
            <a href="{{ route('dashboard') }}"
                class="flex flex-col md:flex-row
                       items-center md:items-center
                       gap-1 md:gap-2
                       rounded-xl md:rounded-full
                       border border-sky-300
                       py-2 px-3 md:px-4
                       hover:border-sky-500 hover:bg-sky-50
                       transition-all duration-300
                       group-[.active]:bg-sky-100 group-[.active]:border-sky-400">

                <img src="{{ asset('assets/images/icons/home-trend-up.svg') }}"
                     class="w-4 h-4 md:w-5 md:h-5" alt="icon">

                <span class="text-[10px] md:text-sm text-sky-900 whitespace-nowrap">
                    Overview
                </span>
            </a>
        </li>

        <!-- Courses -->
        <li class="group">
            <a href="{{ route('dashboard') }}"
                class="flex flex-col md:flex-row
                       items-center md:items-center
                       gap-1 md:gap-2
                       rounded-xl md:rounded-full
                       border border-sky-300
                       py-2 px-3 md:px-4
                       hover:border-sky-500 hover:bg-sky-50
                       transition-all duration-300
                       group-[.active]:bg-sky-100 group-[.active]:border-sky-400">

                <img src="{{ asset('assets/images/icons/note-favorite.svg') }}"
                     class="w-4 h-4 md:w-5 md:h-5" alt="icon">

                <span class="text-[10px] md:text-sm text-sky-900 whitespace-nowrap">
                    Courses
                </span>
            </a>
        </li>

        <!-- Quizzess -->
        <li class="group">
            <a href="#"
                class="flex flex-col md:flex-row
                       items-center md:items-center
                       gap-1 md:gap-2
                       rounded-xl md:rounded-full
                       border border-sky-300
                       py-2 px-3 md:px-4
                       hover:border-sky-500 hover:bg-sky-50
                       transition-all duration-300
                       group-[.active]:bg-sky-100 group-[.active]:border-sky-400">

                <img src="{{ asset('assets/images/icons/message-programming.svg') }}"
                     class="w-4 h-4 md:w-5 md:h-5" alt="icon">

                <span class="text-[10px] md:text-sm text-sky-900 whitespace-nowrap">
                    Quizzess
                </span>
            </a>
        </li>

        <!-- Certificates -->
        <li class="group">
            <a href="#"
                class="flex flex-col md:flex-row
                       items-center md:items-center
                       gap-1 md:gap-2
                       rounded-xl md:rounded-full
                       border border-sky-300
                       py-2 px-3 md:px-4
                       hover:border-sky-500 hover:bg-sky-50
                       transition-all duration-300
                       group-[.active]:bg-sky-100 group-[.active]:border-sky-400">

                <img src="{{ asset('assets/images/icons/cup.svg') }}"
                     class="w-4 h-4 md:w-5 md:h-5" alt="icon">

                <span class="text-[10px] md:text-sm text-sky-900 whitespace-nowrap">
                    Certificates
                </span>
            </a>
        </li>

        <!-- Portfolios -->
        <li class="group">
            <a href="#"
                class="flex flex-col md:flex-row
                       items-center md:items-center
                       gap-1 md:gap-2
                       rounded-xl md:rounded-full
                       border border-sky-300
                       py-2 px-3 md:px-4
                       hover:border-sky-500 hover:bg-sky-50
                       transition-all duration-300
                       group-[.active]:bg-sky-100 group-[.active]:border-sky-400">

                <img src="{{ asset('assets/images/icons/ruler&pen.svg') }}"
                     class="w-4 h-4 md:w-5 md:h-5" alt="icon">

                <span class="text-[10px] md:text-sm text-sky-900 whitespace-nowrap">
                    Portfolios
                </span>
            </a>
        </li>

    </ul>
</nav>
