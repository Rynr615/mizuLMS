@extends('front.layouts.app')
@section('title', 'Success Joined - Mizu')
@section('content')

    <div class="relative flex justify-center">
        <!-- Background -->
        <div id="backgroundImage" class="absolute inset-0 -z-10">
            <img src="{{ asset('assets/images/backgrounds/success-join.png') }}"
                class="min-h-screen w-full object-cover object-bottom" alt="image">
        </div>

        <main
            class="relative mt-24 w-full max-w-[560px] rounded-2xl border border-mizu-divider bg-white
               p-6 sm:p-8 shadow-sm flex flex-col gap-7 mx-4">

            <!-- Icon -->
            <img src="{{ asset('assets/images/icons/raising-hands.png') }}" class="size-[50px] sm:size-[60px] mx-auto"
                alt="icon">

            <!-- Heading -->
            <div class="mx-auto flex w-full sm:w-[500px] flex-col gap-2 text-center">
                <h1 class="text-[22px] sm:text-[28px] font-bold leading-[32px] sm:leading-[42px] text-mizu-dark">
                    Welcome to Class,<br class="hidden sm:block">Upgrade Your New Skills
                </h1>
                <p class="text-sm sm:text-base leading-[22px] sm:leading-[28px] text-mizu-text">
                    Mari kita belajar meningkatkan skills terbaru bersama mentor berpengalaman demi masa depan yang lebih
                    baik
                </p>
            </div>

            <!-- Course Card -->
            <div
                class="flex flex-col sm:flex-row items-center sm:items-start gap-4 rounded-2xl border border-mizu-divider p-4">

                <div class="w-full sm:w-[180px] h-[150px] sm:h-[130px] rounded-xl overflow-hidden shrink-0">
                    <img src="{{ Storage::url($course->thumbnail) }}" class="w-full h-full object-cover" alt="thumbnail">
                </div>

                <div class="flex flex-col gap-2 w-full text-center sm:text-left">
                    <h2 class="font-bold text-mizu-dark text-base sm:text-lg">{{ $course->name }}</h2>

                    <div class="flex justify-center sm:justify-start items-center gap-2 text-mizu-text text-sm">
                        <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="size-5" alt="">
                        <span>{{ $course->category->name }}</span>
                    </div>

                    <div class="flex justify-center sm:justify-start items-center gap-2 text-mizu-text text-sm">
                        <img src="{{ asset('assets/images/icons/menu-board-green.svg') }}" class="size-5" alt="">
                        <span>{{ $course->content_count }} Lessons</span>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <a href="#"
                    class="rounded-full border border-mizu-divider py-3 flex justify-center font-semibold
                      hover:border-mizu-primary hover:text-mizu-primary transition-all">
                    Get Guidelines
                </a>

                <a href="{{ route('dashboard.course.learning', [
                    'course' => $course->slug,
                    'courseSection' => $firstSectionId,
                    'sectionContent' => $firstContentId,
                ]) }}"
                    class="rounded-full bg-mizu-primary text-white py-3 flex justify-center font-semibold
                      hover:bg-mizu-primary-dark transition-all">
                    Start Learning
                </a>
            </div>
        </main>
    </div>


@endsection
