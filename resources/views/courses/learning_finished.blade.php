@extends('front.layouts.app')
@section('title', 'Course Learning Finished - Mizu')
@section('content')

    <div class="relative flex justify-center">
        <!-- Background -->
        <div id="backgroundImage" class="absolute inset-0">
            <img src="{{ asset('assets/images/backgrounds/learning-finished.png') }}" alt="image"
                class="h-[700px] w-full object-cover object-bottom" />
        </div>

        <!-- Main Card -->
        <main
            class="relative mt-[160px] mb-10 w-[90%] max-w-[560px]
        bg-white border border-mizu-divider rounded-[20px]
        p-6 md:p-8 flex flex-col gap-8 shadow-sm">

            <!-- Icon -->
            <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}" alt="icon" class="size-[60px] mx-auto" />

            <!-- Title & Description -->
            <div class="flex flex-col gap-3 items-center text-center">
                <h1 class="font-bold text-[24px] md:text-[28px] leading-[36px] md:leading-[42px] text-mizu-dark">
                    What a Day! Now<br>You’re Ready to Work
                </h1>
                <p class="text-mizu-text leading-[26px] text-[15px] md:text-base max-w-[460px]">
                    Anda telah menyelesaikan materi kelas dengan baik. Selanjutnya,
                    Anda dapat membuat portfolio dan mengikuti magang.
                </p>
            </div>

            <!-- Course Info Card -->
            <div id="card" class="flex gap-4 items-center border border-mizu-divider rounded-[20px] p-3 md:p-4">

                <!-- Thumbnail -->
                <div class="w-[120px] h-[90px] md:w-[180px] md:h-[130px] overflow-hidden rounded-xl shrink-0">
                    <img src="{{ Storage::url($course->thumbnail) }}" alt="image" class="w-full h-full object-cover" />
                </div>

                <!-- Text -->
                <div class="flex flex-col gap-2">
                    <h2 class="font-bold text-mizu-dark text-base md:text-lg">
                        {{ $course->name }}
                    </h2>

                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="size-5" alt="icon" />
                        <p class="text-sm text-mizu-text">{{ $course->category->name }}</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/menu-board-green.svg') }}" class="size-5" alt="icon" />
                        <p class="text-sm text-mizu-text">{{ $course->content_count }} Lessons</p>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4">
                <a href="#"
                    class="text-center py-3 rounded-full border border-mizu-divider
               font-semibold text-mizu-dark
               hover:border-mizu-primary hover:text-mizu-primary transition-all duration-300">
                    Get My Certificate
                </a>

                <a href="{{ route('dashboard') }}"
                    class="text-center py-3 rounded-full bg-mizu-primary text-white font-semibold
               hover:bg-mizu-primary-dark transition-all duration-300">
                    Explore Courses
                </a>
            </div>

        </main>
    </div>


@endsection
