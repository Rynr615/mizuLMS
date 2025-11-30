@extends('front.layouts.app')
@section('title', 'Success Checkout - Mizu')
@section('content')

    <x-navigation-auth></x-navigation-auth>
    <x-nav-bottom></x-nav-bottom>
    <main class="flex justify-center py-8 md:py-12 flex-1 items-center px-4 sm:px-6">
        <div class="w-full max-w-[500px] flex flex-col gap-6 md:gap-[30px]">

            <!-- Header Section -->
            <div class="flex flex-col gap-3 md:gap-[10px]">
                <div
                    class="rounded-full !w-fit mx-auto py-2 px-4 md:px-[14px] bg-green-100 border-2 border-green-200 flex items-center gap-2 md:gap-[6px]">
                    <img src="{{ asset('assets/images/icons/crown-green.svg') }}" alt="icon"
                        class="size-5 md:size-[20px] shrink-0" />
                    <p class="font-bold text-xs md:text-sm leading-tight md:leading-[21px] text-green-600">PRO UNLOCKED</p>
                </div>
                <h1 class="font-bold text-2xl sm:text-[28px] leading-tight sm:leading-[42px] text-center text-mizu-dark">
                    Payment Successful</h1>
                <p class="text-center text-sm sm:text-base leading-relaxed sm:leading-[28px] text-mizu-text px-4">
                    Anda telah memiliki akses kelas materi terbaru sebagai persiapan bekerja di era digital industri saat
                    ini, yay!
                </p>
            </div>

            <!-- Card Section -->
            <section id="card"
                class="relative rounded-[20px] border-2 border-mizu-divider p-3 md:p-[10px] flex flex-col sm:flex-row items-center gap-4 bg-white hover:border-mizu-primary transition-all duration-300 shadow-lg">
                <div
                    class="flex items-center justify-center rounded-[14px] overflow-hidden w-full sm:w-[180px] h-[130px] sm:h-[130px] shrink-0">
                    <img src="{{ asset('assets/images/thumbnails/succes-checkout.png') }}" alt="image"
                        class="w-full h-full object-cover" />
                </div>
                <div class="flex flex-col gap-2 md:gap-[10px] w-full sm:w-auto text-center sm:text-left">
                    <h2 class="font-bold text-base sm:text-lg text-mizu-dark">
                        Subscription Active: <br />
                        {{ $pricing->name }}
                    </h2>
                    <div class="flex items-center justify-center sm:justify-start gap-2 md:gap-[6px]">
                        <img src="{{ asset('assets/images/icons/calendar-green.svg') }}" alt="icon"
                            class="size-5 md:size-[20px] shrink-0" />
                        <p class="text-mizu-text text-xs sm:text-sm leading-tight md:leading-[21px]">
                            {{ $pricing->duration }} Months Access</p>
                    </div>
                    <div class="flex items-center justify-center sm:justify-start gap-2 md:gap-[6px]">
                        <img src="{{ asset('assets/images/icons/briefcase-green.svg') }}" alt="icon"
                            class="size-5 md:size-[20px] shrink-0" />
                        <p class="text-mizu-text text-xs sm:text-sm leading-tight md:leading-[21px]">Job-Ready Skills</p>
                    </div>
                </div>
                <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}" alt="icon"
                    class="absolute top-1/2 right-0 size-10 md:size-[50px] shrink-0 -translate-y-1/2 translate-x-1/2" />
            </section>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center gap-3 md:gap-[14px] mx-auto w-full sm:w-auto">
                <a href="{{ route('dashboard.subscriptions') }}" class="w-full sm:w-auto">
                    <div
                        class="flex items-center px-5 md:px-6 justify-center border-2 border-mizu-divider rounded-full py-3 md:py-[10px] bg-white hover:border-mizu-primary hover:bg-mizu-light transition-all duration-300">
                        <p class="font-semibold text-sm md:text-base text-mizu-dark">My Transactions</p>
                    </div>
                </a>
                <a href="{{ route('dashboard') }}" class="w-full sm:w-auto">
                    <div
                        class="flex items-center px-5 md:px-6 justify-center text-white rounded-full py-3 md:py-[10px] bg-gradient-to-r from-mizu-primary to-mizu-primary-dark hover:from-mizu-primary-dark hover:to-mizu-primary shadow-lg shadow-mizu-primary/30 hover:shadow-xl hover:shadow-mizu-primary/40 hover:-translate-y-0.5 transition-all duration-300">
                        <p class="font-semibold text-sm md:text-base">Start Learning</p>
                    </div>
                </a>
            </div>
        </div>
    </main>

@endsection
@push('after-scripts')
    {{-- <script src="{{ asset('js/dropdown-navbar.js') }}"></script> --}}
@endpush
