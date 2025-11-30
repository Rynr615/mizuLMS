<a href="{{ route('dashboard.course.details', $course->slug) }}" class="card">
    <div
        class="course-card flex flex-col rounded-[20px]
            border border-blue-200/60
            hover:border-blue-400
            transition-all duration-300
            bg-white
            shadow-sm hover:shadow-blue-100/60
            overflow-hidden">

        <div class="thumbnail-container p-[10px]">
            <div class="relative w-full h-[150px] rounded-[14px] overflow-hidden bg-blue-50">
                <img src="{{ Storage::url($course->thumbnail) }}" class="w-full h-full object-cover" alt="thumbnail">

                <!-- Rating badge -->
                <p
                    class="absolute top-[10px] right-[10px] z-10
                          flex flex-col items-center gap-0.5
                          bg-white/90 backdrop-blur-sm
                          rounded-[14px] py-[6px] px-[10px]
                          shadow-[0_2px_6px_rgba(59,130,246,0.2)]
                          border border-blue-100">
                    <img src="{{ asset('assets/images/icons/like.svg') }}" class="w-5 h-5" alt="icon">
                    <span class="font-semibold text-xs text-blue-700">4.8</span>
                </p>
            </div>
        </div>

        <div class="flex flex-col p-4 pt-0 gap-[13px]">
            <h3 class="font-bold text-lg line-clamp-2 text-gray-800">
                {{ $course->name }}
            </h3>

            <p class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="flex shrink-0 w-5" alt="icon">
                <span class="text-sm text-gray-500">
                    {{ $course->category->name }}
                </span>
            </p>

            <p class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/menu-board-green.svg') }}" class="flex shrink-0 w-5"
                    alt="icon">
                <span class="text-sm text-gray-500">
                    {{ $course->content_count }} Lessons
                </span>
            </p>

            <p class="flex items-center gap-[6px]">
                <img src="{{ asset('assets/images/icons/briefcase-green.svg') }}" class="flex shrink-0 w-5"
                    alt="icon">
                <span class="text-sm text-gray-500">
                    Ready to Work
                </span>
            </p>
        </div>
    </div>
</a>
