@extends('front.layouts.app')
@section('title', 'Details - Mizu')
@section('content')

    <x-navigation-auth></x-navigation-auth>
    <x-nav-bottom></x-nav-bottom>

    <main class="flex flex-col gap-[30px] pb-10 mt-[30px]">
        {{-- HEADER --}}
        <header
            class="w-full  max-w-[1100px] mx-auto bg-white border border-obito-grey rounded-[24px]
           p-5 sm:p-6 md:p-8 flex flex-col lg:flex-row gap-6 lg:gap-10 shadow-sm">

            <!-- Thumbnail -->
            <div id="thumbnail-container"
                class="relative w-full lg:w-[480px]
               h-[200px] sm:h-[260px] md:h-[300px] lg:h-[340px]
               rounded-[20px] overflow-hidden bg-sky-100">

                <img src="{{ Storage::url($course->thumbnail) }}" class="w-full h-full object-cover" alt="thumbnail">

                <!-- Rating Badge -->
                <p
                    class="absolute top-3 left-3 bg-white/90 backdrop-blur-md rounded-[14px] px-3 py-1
                  flex items-center gap-1 shadow-sm">
                    <img src="{{ asset('assets/images/icons/like.svg') }}" class="w-5 h-5" alt="icon">
                    <span class="font-semibold text-xs">4.8</span>
                </p>

                <!-- Play Button -->
                <button type="button" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                    <img src="{{ asset('assets/images/icons/video-circle-green-fill.svg') }}"
                        class="w-[50px] sm:w-[60px] h-[50px] sm:h-[60px]" alt="icon">
                </button>
            </div>

            <!-- Course Info -->
            <div id="course-info" class="flex flex-col justify-between gap-6 flex-1">

                <div class="flex flex-col gap-3">
                    @if ($course->is_popular)
                        <p id="badge"
                            class="flex items-center gap-2 w-fit bg-gradient-to-r from-sky-400 to-sky-600
                           rounded-full px-3 py-1 shadow-md">
                            <img src="{{ asset('assets/images/icons/cup-white.svg') }}" class="w-5" alt="icon">
                            <span class="text-xs font-semibold text-white">This Course is Popular This Year</span>
                        </p>
                    @endif

                    <h1 class="font-bold text-[22px] sm:text-[26px] md:text-[30px] leading-snug text-sky-900">
                        {{ $course->name }}
                    </h1>
                </div>

                <!-- Course Metadata -->
                <div class="flex flex-col gap-3 text-sky-800">
                    <div class="flex flex-wrap gap-4 items-center">
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="w-6" alt="icon">
                            <span class="font-semibold text-sm">{{ $course->category->name }}</span>
                        </p>

                        <p class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/menu-board-green.svg') }}" class="w-6"
                                alt="icon">
                            <span class="font-semibold text-sm">{{ $course->content_count }} Lessons</span>
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4 items-center">
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/briefcase-green.svg') }}" class="w-6" alt="icon">
                            <span class="font-semibold text-sm">Ready to Work</span>
                        </p>

                        <p class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/briefcase-green.svg') }}" class="w-6"
                                alt="icon">
                            <span class="font-semibold text-sm">Beginner Level</span>
                        </p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex flex-wrap items-center gap-3 pt-2">
                    <a href="{{ route('dashboard.course.join', $course->slug) }}"
                        class="bg-sky-500 hover:bg-sky-600 text-white
                       rounded-full px-6 py-3 font-semibold transition-all
                       shadow-sm hover:shadow-md w-full sm:w-fit text-center">
                        Start Learning Now
                    </a>

                    <a href="#"
                        class="border border-sky-300 text-sky-600
                       rounded-full px-6 py-3 font-semibold bg-white
                       hover:border-sky-500 transition-all
                       w-full sm:w-fit text-center">
                        Add to Bookmark
                    </a>
                </div>
            </div>
        </header>

        <section id="details" class="flex flex-col w-full max-w-[1100px] mx-auto px-5 md:px-6 lg:px-8 gap-6">
            <h2 class="font-bold text-[22px] leading-[33px]">Upgrade Your Skills</h2>

            <div id="contents" class="flex flex-col gap-6">

                <!-- TABS -->
                <div id="tabs-container" class="flex items-center gap-3 overflow-x-auto pb-2 no-scrollbar">

                    <button type="button" class="tab-btn group active" data-target="about-content">
                        <p
                            class="
            rounded-full border border-mizu-divider py-2 px-5 bg-white
            transition-all duration-300
            group-[.active]:bg-mizu-primary
            group-[.active]:border-mizu-primary
        ">
                            <span class="font-semibold group-[.active]:text-white">
                                About
                            </span>
                        </p>
                    </button>

                    <button type="button" class="tab-btn group" data-target="lessons-content">
                        <p
                            class="
            rounded-full border border-mizu-divider py-2 px-5 bg-white
            transition-all duration-300
            group-[.active]:bg-mizu-primary
            group-[.active]:border-mizu-primary
        ">
                            <span class="font-semibold group-[.active]:text-white">
                                Lessons
                            </span>
                        </p>
                    </button>

                    <button type="button" class="tab-btn group" data-target="example">
                        <p
                            class="
            rounded-full border border-mizu-divider py-2 px-5 bg-white
            transition-all duration-300
            group-[.active]:bg-mizu-primary
            group-[.active]:border-mizu-primary
        ">
                            <span class="font-semibold group-[.active]:text-white">
                                Portfolios
                            </span>
                        </p>
                    </button>

                    <button type="button" class="tab-btn group" data-target="example">
                        <p
                            class="
            rounded-full border border-mizu-divider py-2 px-5 bg-white
            transition-all duration-300
            group-[.active]:bg-mizu-primary
            group-[.active]:border-mizu-primary
        ">
                            <span class="font-semibold group-[.active]:text-white">
                                Rewards
                            </span>
                        </p>
                    </button>

                </div>


                <!-- TABS CONTENT -->
                <div id="tabs-content-container">

                    <!-- ABOUT -->
                    <div id="about-content" class="tab-content flex flex-col gap-8">

                        <div id="description" class="flex flex-col gap-4 leading-7 max-w-[900px]">
                            <p>{{ $course->about }}</p>
                        </div>

                        <div id="what-you-learn" class="flex flex-col gap-4">
                            <h3 class="font-semibold text-lg">What Will You Learn</h3>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-6 max-w-[700px]">
                                @foreach ($course->benefits as $benefit)
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                            class="w-6 shrink-0" alt="icon">
                                        <p>{{ $benefit->name }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="instructors"
                            class="flex flex-col border border-obito-grey rounded-[20px] p-6 bg-white shadow-sm gap-5">
                            <h3 class="font-semibold text-lg">Course Instructors</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                @foreach ($course->courseMentors as $mentor)
                                    <div
                                        class="instructors-card flex flex-col border border-obito-grey rounded-[20px] p-5 bg-white shadow-sm gap-4">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-3">
                                                <div class="w-[50px] h-[50px] rounded-full overflow-hidden shrink-0">
                                                    <img src="{{ Storage::url($mentor->mentor->photo) }}" alt="photo"
                                                        class="w-full h-full object-cover">
                                                </div>

                                                <div>
                                                    <p class="font-semibold">{{ $mentor->mentor->name }}</p>
                                                    <p class="text-sm text-obito-text-secondary">
                                                        {{ $mentor->mentor->occupation }}</p>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                        class="w-5 shrink-0" alt="icon">
                                                @endfor
                                            </div>
                                        </div>

                                        <hr class="border-obito-grey">

                                        <p class="leading-7">{{ $mentor->about }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- LESSONS -->
                    <div id="lessons-content" class="tab-content hidden flex flex-col gap-5 max-w-[700px]">
                        @foreach ($course->courseSections as $section)
                            <div
                                class="accordion flex flex-col gap-4 rounded-[20px] border border-obito-grey p-5 bg-white shadow-sm">
                                <button type="button" id="accordion-btn" data-expand="{{ $section->id }}"
                                    class="flex justify-between items-center">
                                    <p class="font-semibold text-lg">{{ $section->name }}</p>
                                    <img src="{{ asset('assets/images/icons/arrow-circle-down.svg') }}" alt="icon"
                                        class="size-6 shrink-0 transition-all duration-300 -rotate-180" />
                                </button>

                                <div id="{{ $section->id }}" class="flex flex-col gap-4">
                                    @foreach ($section->sectionContents as $content)
                                        <div
                                            class="flex items-center gap-3 border border-obito-grey rounded-[50px] py-3 px-4 bg-white">
                                            <img src="{{ asset('assets/images/icons/menu-board.svg') }}" class="size-6"
                                                alt="icon">
                                            <p class="font-semibold">{{ $content->name }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- EXAMPLE -->
                    <div id="example" class="tab-content hidden">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, sapiente?</p>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection

@push('after-scripts')
    {{-- <script src="{{ asset('js/dropdown-navbar.js') }}"></script> --}}
    <script src="{{ asset('js/tabs.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
@endpush
