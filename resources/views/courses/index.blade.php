@extends('front.layouts.app')
@section('title', 'My Courses - Mizu')
@section('content')

    <x-navigation-auth></x-navigation-auth>
    <x-nav-bottom></x-nav-bottom>
    <main class="flex flex-col gap-10 pb-10 mt-[30px]">
        <section id="roadmap" class="flex flex-col w-full max-w-[1280px] px-5 md:px-[75px] gap-4 mx-auto py-8">

            <!-- Header -->
            <div class="flex items-center justify-between">
                <h2 class="font-bold text-[20px] md:text-[22px] leading-[33px] text-mizu-dark">
                    Popular Courses
                </h2>

                <!-- Navigation Buttons (Desktop) -->
                <div class="hidden md:flex items-center gap-3">
                    <button id="prev-popular"
                        class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-mizu-divider hover:border-mizu-primary hover:bg-mizu-light transition-all duration-300">
                        <svg class="w-5 h-5 text-mizu-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>
                    <button id="next-popular"
                        class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-mizu-divider hover:border-mizu-primary hover:bg-mizu-light transition-all duration-300">
                        <svg class="w-5 h-5 text-mizu-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Carousel Container -->
            <div class="relative overflow-hidden">
                <div id="popular-carousel" class="flex transition-transform duration-500 ease-in-out gap-5">

                    @foreach ($coursesByCategory as $category => $courses)
                        @forelse ($courses as $course)
                            @if ($course->is_popular)
                                <a href="{{ route('dashboard.course.details', $course->slug) }}"
                                    class="flex-shrink-0 w-full sm:w-[calc(50%-10px)] lg:w-[calc(50%-10px)]">
                                    <div
                                        class="roadmap-card flex flex-col sm:flex-row items-center rounded-[20px] border-2 border-mizu-divider p-[10px] pr-4 gap-4 bg-white hover:border-mizu-primary hover:shadow-lg transition-all duration-300 h-full">

                                        <!-- Thumbnail -->
                                        <div
                                            class="relative flex shrink-0 w-full sm:w-[240px] h-[150px] rounded-[14px] overflow-hidden bg-mizu-light">
                                            <img src="{{ Storage::url($course->thumbnail) }}"
                                                class="w-full h-full object-cover" alt="{{ $course->name }}">

                                            <!-- Featured Badge -->
                                            <p
                                                class="absolute flex m-[10px] bottom-0 w-[calc(100%-20px)] items-center gap-1 bg-white/95 backdrop-blur-sm rounded-[14px] py-[6px] px-2 shadow-sm border border-mizu-divider">
                                                <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <span class="font-semibold text-xs leading-[18px] text-mizu-dark">Popular
                                                    Course</span>
                                            </p>
                                        </div>

                                        <!-- Content -->
                                        <div class="flex flex-col gap-3 w-full">
                                            <h3 class="font-bold text-base md:text-lg line-clamp-2 text-mizu-dark">
                                                {{ $course->name }}
                                            </h3>

                                            <!-- Category -->
                                            @if ($course->category)
                                                <p class="flex items-center gap-[6px]">
                                                    <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="flex shrink-0 w-5" alt="icon">
                                                    <span
                                                        class="text-sm text-mizu-text">{{ $course->category->name }}</span>
                                                </p>
                                                <p class="flex items-center gap-[6px]">
                                                    <img src="{{ asset('assets/images/icons/menu-board-green.svg') }}"
                                                        class="flex shrink-0 w-5" alt="icon">
                                                    <span class="text-sm text-gray-500">
                                                        {{ $course->content_count }} Lessons
                                                    </span>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @empty
                            <p>Tidak ada kelas</p>
                        @endforelse
                    @endforeach

                </div>
            </div>


            <div id="carousel-indicators" class="flex justify-center gap-2 mt-4 md:hidden">

            </div>

            <div class="flex md:hidden items-center justify-center gap-3 mt-4">
                <button id="prev-popular-mobile"
                    class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-mizu-divider hover:border-mizu-primary hover:bg-mizu-light transition-all duration-300">
                    <svg class="w-5 h-5 text-mizu-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="next-popular-mobile"
                    class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-mizu-divider hover:border-mizu-primary hover:bg-mizu-light transition-all duration-300">
                    <svg class="w-5 h-5 text-mizu-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </section>
        <section id="catalog" class="flex flex-col w-full max-w-[1280px] px-5 md:px-[75px] gap-4 mx-auto">

            <h1 class="font-bold text-[20px] md:text-[22px] leading-[33px] text-mizu-blue">
                Course Catalog
            </h1>
            <div id="tabs-container" class="flex items-center gap-3 overflow-x-auto no-scrollbar py-2">

                @foreach ($coursesByCategory as $category => $courses)
                    <button type="button"
                        class="tab-btn flex-shrink-0
                   {{ $loop->first ? 'active' : '' }}"
                        data-target="{{ Str::slug($category) }}-content">

                        <p
                            class="
                tab-pill
                rounded-full border border-mizu-light py-2 px-4 bg-white
                transition-all duration-300
            ">
                            <span class="tab-text">{{ $category }}</span>
                        </p>
                    </button>
                @endforeach
            </div>

            <div id="tabs-content-container" class="mt-1">
                @foreach ($coursesByCategory as $category => $courses)
                    <div id="{{ Str::slug($category) }}-content"
                        class="tab-content grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5
                            {{ $loop->first ? '' : 'hidden' }}">

                        @forelse ($courses as $course)
                            <x-course-card :course="$course"></x-course-card>
                        @empty
                            <p>Belum ada kelas pada kategori ini.</p>
                        @endforelse

                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection






@push('after-styles')
    <style>
        .tab-btn.active .tab-pill {
            background-color: #3ABFF8 !important;
            border-color: #3ABFF8 !important;
            color: white !important;
        }

        .tab-btn.active .tab-text {
            color: white !important;
            font-weight: 600 !important;
        }

        #popular-carousel {
            scroll-behavior: smooth;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endpush

@push('after-scripts')
    {{-- <script src="{{ asset('js/dropdown-navbar.js') }}"></script> --}}
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('popular-carousel');
            const prevBtn = document.getElementById('prev-popular');
            const nextBtn = document.getElementById('next-popular');
            const prevBtnMobile = document.getElementById('prev-popular-mobile');
            const nextBtnMobile = document.getElementById('next-popular-mobile');
            const indicatorsContainer = document.getElementById('carousel-indicators');

            if (!carousel) return;

            const cards = carousel.querySelectorAll('a');
            const totalCards = cards.length;

            if (totalCards === 0) return;

            let currentIndex = 0;
            let itemsPerView = getItemsPerView();
            let totalPages = Math.ceil(totalCards / itemsPerView);

            function getItemsPerView() {
                if (window.innerWidth >= 640) {
                    return 2;
                }
                return 1;
            }

            function updateCarousel() {
                const cardWidth = cards[0].offsetWidth;
                const gap = 20; // gap-5 = 20px
                const offset = currentIndex * (cardWidth + gap);
                carousel.style.transform = `translateX(-${offset}px)`;

                updateIndicators();
                updateButtons();
            }

            function updateIndicators() {
                indicatorsContainer.innerHTML = '';
                for (let i = 0; i < totalPages; i++) {
                    const indicator = document.createElement('button');
                    indicator.className = `w-2 h-2 rounded-full transition-all duration-300 ${
                i === Math.floor(currentIndex / itemsPerView)
                    ? 'bg-mizu-primary w-8'
                    : 'bg-mizu-divider'
            }`;
                    indicator.addEventListener('click', () => {
                        currentIndex = i * itemsPerView;
                        if (currentIndex >= totalCards) {
                            currentIndex = totalCards - itemsPerView;
                        }
                        updateCarousel();
                    });
                    indicatorsContainer.appendChild(indicator);
                }
            }

            function updateButtons() {
                const isAtStart = currentIndex === 0;
                const isAtEnd = currentIndex >= totalCards - itemsPerView;

                [prevBtn, prevBtnMobile].forEach(btn => {
                    if (btn) {
                        btn.disabled = isAtStart;
                        btn.style.opacity = isAtStart ? '0.5' : '1';
                        btn.style.cursor = isAtStart ? 'not-allowed' : 'pointer';
                    }
                });

                [nextBtn, nextBtnMobile].forEach(btn => {
                    if (btn) {
                        btn.disabled = isAtEnd;
                        btn.style.opacity = isAtEnd ? '0.5' : '1';
                        btn.style.cursor = isAtEnd ? 'not-allowed' : 'pointer';
                    }
                });
            }

            function next() {
                if (currentIndex < totalCards - itemsPerView) {
                    currentIndex += itemsPerView;
                    if (currentIndex > totalCards - itemsPerView) {
                        currentIndex = totalCards - itemsPerView;
                    }
                    updateCarousel();
                }
            }

            function prev() {
                if (currentIndex > 0) {
                    currentIndex -= itemsPerView;
                    if (currentIndex < 0) {
                        currentIndex = 0;
                    }
                    updateCarousel();
                }
            }

            // Event listeners
            if (prevBtn) prevBtn.addEventListener('click', prev);
            if (nextBtn) nextBtn.addEventListener('click', next);
            if (prevBtnMobile) prevBtnMobile.addEventListener('click', prev);
            if (nextBtnMobile) nextBtnMobile.addEventListener('click', next);

            // Handle window resize
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    const newItemsPerView = getItemsPerView();
                    if (newItemsPerView !== itemsPerView) {
                        itemsPerView = newItemsPerView;
                        totalPages = Math.ceil(totalCards / itemsPerView);
                        currentIndex = 0;
                        updateCarousel();
                    }
                }, 250);
            });

            let touchStartX = 0;
            let touchEndX = 0;

            carousel.addEventListener('touchstart', function(e) {
                touchStartX = e.changedTouches[0].screenX;
            });

            carousel.addEventListener('touchend', function(e) {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });

            function handleSwipe() {
                if (touchEndX < touchStartX - 50) {
                    next();
                }
                if (touchEndX > touchStartX + 50) {
                    prev();
                }
            }

            updateCarousel();
        });
    </script>
@endpush
