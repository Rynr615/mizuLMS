@extends('front.layouts.app')
@section('title', 'My Courses - Mizu')
@section('content')
    <x-navigation-auth></x-navigation-auth>
    <x-nav-bottom></x-nav-bottom>

    <main class="flex flex-col gap-10 pb-10 mt-[50px]">

        <!-- SEARCH HEADER -->
        <div class="flex flex-col items-center gap-[10px] max-w-[500px] w-full mx-auto px-4">
            <p class="flex items-center gap-[6px] w-fit rounded-full py-2 px-[14px] bg-mizu-light">
                <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="flex shrink-0 w-5" alt="icon">
                <span class="font-bold text-sm text-mizu-dark">GROW CAREER</span>
            </p>

            <h1 class="font-bold text-[28px] leading-[42px] text-center text-mizu-dark">
                Explore Our Greatest Courses
            </h1>

            <!-- SEARCH FORM -->
            <form method="GET" action="{{ route('dashboard.search.courses') }}" class="relative w-full max-w-[550px]">
                <label class="group relative w-full">
                    <input type="text" name="search"
                        class="appearance-none outline-none ring-1 ring-mizu-divider rounded-full w-full py-[14px] px-5 bg-white font-bold placeholder:font-normal placeholder:text-mizu-text text-mizu-dark focus:ring-mizu-primary transition-all duration-300 pr-[50px]"
                        placeholder="Search course by name">

                    <button type="submit"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[52px] w-[52px] flex items-center justify-center">
                        <img src="{{ asset('assets/images/icons/search-normal-green-fill.svg') }}" class="w-10 h-10"
                            alt="search">
                    </button>
                </label>
            </form>
        </div>

        <!-- SEARCH RESULTS -->
        <section id="result" class="flex flex-col w-full max-w-[1280px] px-4 md:px-[75px] gap-5 mx-auto">
            <h2 class="font-bold text-[22px] leading-[33px] text-mizu-dark">
                Search Result: {{ $keyword }}
            </h2>

            <div id="result-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @forelse ($courses as $course)
                    <x-course-card :course="$course"></x-course-card>
                @empty
                    <p class="text-mizu-text">No Courses available for this keyword.</p>
                @endforelse
            </div>
        </section>
    </main>
@endsection

@push('after-scripts')
    {{-- <script src="{{ asset('js/dropdown-navbar.js') }}"></script> --}}
@endpush
