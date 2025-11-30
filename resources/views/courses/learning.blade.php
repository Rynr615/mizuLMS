@extends('front.layouts.app')
@section('title', 'Course Learning - Mizu')
@section('content')

    <div class="flex h-screen overflow-hidden">
        <!-- MOBILE TOP BAR -->
        <header
            class="md:hidden w-full flex items-center justify-between px-4 py-3 border-b border-mizu-divider bg-white shadow-sm fixed top-0 left-0 z-40">
            <h1 class="font-semibold text-mizu-dark">{{ $course->name }}</h1>
            <button id="mobile-menu-toggle" class="p-2 rounded-lg border border-mizu-divider bg-white">
                <img src="{{ asset('assets/images/icons/category.svg') }}" class="w-6 h-6" alt="icon">
            </button>
        </header>

        <!-- MOBILE SIDEBAR OVERLAY -->
        <div id="mobile-overlay" class="fixed inset-0 bg-black/40 z-40 hidden"></div>

        <!-- SIDEBAR -->
        <aside id="sidebar"
            class="flex flex-col bg-white border-r border-mizu-divider
        w-[260px] h-full fixed md:static top-0 left-0 z-50
        -translate-x-full md:translate-x-0 transition-transform duration-300">

            <!-- TOP SECTION -->
            <div class="pb-5 pt-5 px-5 flex flex-col gap-5 mt-14 md:mt-0">

                <!-- Back to Dashboard -->
                <ul>
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <div
                                class="flex items-center gap-2 py-2.5 px-4 rounded-full border border-mizu-divider
                            bg-white hover:border-mizu-primary hover:text-mizu-primary transition-all duration-300">
                                <img src="{{ asset('assets/images/icons/home-trend-up.svg') }}" class="size-5"
                                    alt="icon">
                                <p class="font-medium text-sm">Back to Dashboard</p>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Course Header -->
                <header class="flex flex-col gap-3">
                    <div class="w-full h-[100px] overflow-hidden rounded-xl">
                        <img src="{{ Storage::url($course->thumbnail) }}" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </div>
                    <h1 class="font-bold text-mizu-dark text-base">{{ $course->name }}</h1>
                </header>

                <hr class="border-mizu-divider" />
            </div>

            <!-- LESSON LIST -->
            <div id="lessons-container"
                class="h-full overflow-y-auto w-full max-w-[260px] [&::-webkit-scrollbar]:hidden px-5 pb-24 md:pb-8">

                <nav class="flex flex-col gap-5">
                    @foreach ($course->courseSections as $section)
                        <div class="lesson accordion flex flex-col gap-4">

                            <!-- Section Toggle -->
                            <button type="button" data-expand="{{ $section->id }}"
                                class="flex items-center justify-between">
                                <h2 class="font-semibold text-mizu-dark text-sm">{{ $section->name }}</h2>
                                <img src="{{ asset('assets/images/icons/arrow-circle-down.svg') }}"
                                    class="size-5 transition-all duration-300" />
                            </button>

                            <!-- Section Content -->
                            <div id="{{ $section->id }}"
                                class="
        {{ $currentSection ? ($currentSection->id == $section->id ? '' : 'hidden') : ($loop->first ? '' : 'hidden') }}
    ">

                                <ul class="flex flex-col gap-3">
                                    @foreach ($section->sectionContents as $content)
                                        <li
                                            class="group {{ $currentSection && $section->id == $currentSection->id && $currentContent->id == $content->id ? 'active' : '' }}">
                                            <a
                                                href="{{ route('dashboard.course.learning', ['course' => $course->slug, 'courseSection' => $section->id, 'sectionContent' => $content->id]) }}">
                                                <div
                                                    class="px-4 py-2.5 rounded-full border border-mizu-divider
                                        text-sm transition-all duration-300
                                        group-hover:border-mizu-primary group-hover:bg-mizu-primary group-hover:text-white
                                        group-[&.active]:bg-mizu-primary group-[&.active]:text-white group-[&.active]:border-mizu-primary">
                                                    <h3 class="font-semibold">{{ $content->name }}</h3>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        <hr class="border-mizu-divider" />
                    @endforeach
                </nav>
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <div class="flex-grow overflow-y-auto pt-16 md:pt-0">
            <main class="pt-8 pb-40 px-5 md:pl-10 lg:pl-14 max-w-[900px]">
                <article class="content-ebook">

                    <h1 class="mb-5 font-bold text-2xl text-mizu-dark">{{ $currentContent->name }}</h1>

                    <div
                        class="prose max-w-none text-mizu-text leading-7
                    prose-img:rounded-xl prose-img:shadow
                    prose-h2:text-mizu-dark prose-h3:text-mizu-dark
                    prose-a:text-mizu-primary prose-a:no-underline prose-a:hover:underline
                    prose-ul:list-disc prose-ul:pl-6
                    prose-ol:list-decimal prose-ol:pl-6">
                        {!! $currentContent->content !!}
                    </div>
                </article>
            </main>

            <!-- BOTTOM NAVIGATION -->
            <nav
                class="fixed bottom-0 right-0 z-30 w-full md:w-[calc(100%-260px)] bg-white border-t border-mizu-divider px-5 py-4">
                <div
                    class="border border-mizu-divider rounded-[20px] bg-white p-4 flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-mizu-text text-sm">Pelajari materi dengan baik. Jika bingung, tanya mentor kelas.</p>

                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <a href="#"
                            class="w-full md:w-auto text-center rounded-full border border-mizu-divider px-5 py-2.5 font-semibold text-mizu-dark hover:border-mizu-primary hover:text-mizu-primary transition-all duration-300">Ask
                            Mentor</a>

                        @if (!$isFinished)
                            <a href="{{ route('dashboard.course.learning', ['course' => $course->slug, 'courseSection' => $nextContent->course_section_id, 'sectionContent' => $nextContent->id]) }}"
                                class="w-full md:w-auto text-center rounded-full bg-mizu-primary text-white px-5 py-2.5 font-semibold hover:bg-mizu-primary-dark transition-all duration-300">Next
                                Lesson</a>
                        @else
                            <a href="{{ route('dashboard.course.learning.finished', $course->slug) }}"
                                class="w-full md:w-auto text-center rounded-full bg-mizu-primary text-white px-5 py-2.5 font-semibold hover:bg-mizu-primary-dark transition-all duration-300">Finish
                                Learning</a>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>
@endsection
@push('after-styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/default.min.css">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    </link>
@endpush
@push('after-scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/highlight.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('pre').forEach(pre => {
                pre.classList.add('theme-tokyo-night-dark');

                if (!pre.querySelector('code')) {
                    const code = document.createElement('code');
                    code.className = '';
                    code.textContent = pre.textContent.trim();
                    pre.innerHTML = '';
                    pre.appendChild(code);
                }
            });
            hljs.highlightAll();
        });
    </script>
    <script>
        const mobileToggle = document.getElementById('mobile-menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('mobile-overlay');

        mobileToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });
    </script>
@endpush
