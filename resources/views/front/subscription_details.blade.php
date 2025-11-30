@extends('front.layouts.app')
@section('title', 'Subscription Details - Mizu')
@section('content')

    <x-navigation-auth></x-navigation-auth>

    <div id="path" class="flex w-full bg-white border-b-2 border-mizu-divider py-3 md:py-[14px] overflow-x-auto">
        <div
            class="flex items-center w-full max-w-[1280px] px-4 sm:px-6 lg:px-[75px] mx-auto gap-3 md:gap-5 whitespace-nowrap">
            <a href="{{ route('dashboard') }}"
                class="text-mizu-text hover:text-mizu-primary transition-colors last-of-type:font-semibold last-of-type:text-mizu-dark text-sm md:text-base">Dashboard</a>
            <div class="h-8 md:h-10 w-px bg-mizu-divider"></div>
            <a href="{{ route('dashboard.subscriptions') }}"
                class="text-mizu-text hover:text-mizu-primary transition-colors last-of-type:font-semibold last-of-type:text-mizu-dark text-sm md:text-base">My
                Subscriptions</a>
            <span class="text-mizu-divider text-sm md:text-base">/</span>
            <a href="#"
                class="text-mizu-text hover:text-mizu-primary transition-colors last-of-type:font-semibold last-of-type:text-mizu-dark text-sm md:text-base">Details</a>
        </div>
    </div>

    <main class="flex flex-1 items-start justify-center py-5 md:py-8 lg:py-5 px-4 sm:px-6 lg:px-8">
        <div
            class="flex flex-col lg:flex-row w-full max-w-[1200px] rounded-[20px] border-2 border-mizu-divider gap-6 lg:gap-[40px] bg-white p-4 sm:p-5 shadow-lg">

            <!-- Left Side - Details -->
            <div id="details" class="w-full flex flex-col gap-5">
                <h1 class="font-bold text-xl sm:text-[22px] leading-tight sm:leading-[33px] text-mizu-dark">Details
                    Subscription</h1>

                <!-- Booking TRX Section -->
                <section id="give-access-to" class="flex flex-col gap-2">
                    <div
                        class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 sm:gap-4 rounded-[20px] border-2 border-mizu-divider p-3 sm:p-[14px] bg-gradient-to-r from-mizu-light/30 to-white hover:border-mizu-primary transition-all duration-300">
                        <div class="profile flex items-center gap-3 sm:gap-[14px]">
                            <img src="{{ asset('assets/images/icons/security-user-green-fill.svg') }}" alt="icon"
                                class="size-10 sm:size-[50px] shrink-0" />
                            <div class="desc flex flex-col gap-1 sm:gap-[3px]">
                                <h3 class="text-xs sm:text-sm leading-tight sm:leading-[21px] text-mizu-text">Booking TRX ID
                                </h3>
                                <p class="font-semibold text-sm sm:text-base text-mizu-dark break-all">
                                    {{ $transaction->booking_trx_id }}</p>
                            </div>
                        </div>
                        <div class="status flex items-center gap-[14px]">
                            @if ($transaction->isActive())
                                <span
                                    class="font-bold text-xs text-green-600 badge w-fit rounded-full py-[6px] px-[10px] gap-[6px] bg-green-100 border-2 border-green-200">ACTIVE</span>
                            @else
                                <span
                                    class="font-bold text-xs text-red-600 badge w-fit rounded-full py-[6px] px-[10px] gap-[6px] bg-red-100 border-2 border-red-200">EXPIRED</span>
                            @endif
                        </div>
                    </div>
                </section>

                <!-- Access Given To Section -->
                <section id="access given-to" class="flex flex-col gap-2">
                    <h2 class="font-semibold text-base sm:text-lg text-mizu-dark">Access Given to</h2>
                    <div
                        class="profile flex items-center gap-3 sm:gap-[14px] rounded-[20px] border-2 border-mizu-divider p-3 sm:p-[14px] hover:border-mizu-primary transition-all duration-300 bg-white">
                        <div
                            class="flex justify-center items-center overflow-hidden size-12 sm:size-[50px] rounded-full border-2 border-mizu-divider shrink-0">
                            <img src="{{ Storage::url($transaction->student->photo) }}" alt="image"
                                class="size-full object-cover" />
                        </div>
                        <div class="desc flex flex-col gap-1 sm:gap-[3px]">
                            <h3 class="font-semibold text-sm sm:text-base text-mizu-dark">{{ $transaction->student->name }}
                            </h3>
                            <p class="text-xs sm:text-sm leading-tight sm:leading-[21px] text-mizu-text">
                                {{ $transaction->student->occupation }}</p>
                        </div>
                    </div>
                </section>

                <!-- Transaction Details Section -->
                <section id="transaction-details" class="flex flex-col gap-3 sm:gap-[12px]">
                    <h2 class="font-semibold text-base sm:text-lg text-mizu-dark">Transaction Details</h2>
                    <div
                        class="flex flex-col gap-3 sm:gap-[12px] bg-mizu-light/30 rounded-[20px] p-4 sm:p-5 border-2 border-mizu-divider">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-4 sm:size-5 shrink-0" />
                                <p class="text-sm sm:text-base text-mizu-text">Subscription Package</p>
                            </div>
                            <strong class="font-semibold text-sm sm:text-base text-mizu-dark">Rp
                                {{ number_format($transaction->sub_total_amount, 0, '', '.') }}</strong>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-4 sm:size-5 shrink-0" />
                                <p class="text-sm sm:text-base text-mizu-text">Access Duration</p>
                            </div>
                            <strong
                                class="font-semibold text-sm sm:text-base text-mizu-dark">{{ $transaction->pricing->duration }}
                                Months</strong>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-4 sm:size-5 shrink-0" />
                                <p class="text-sm sm:text-base text-mizu-text">Started At</p>
                            </div>
                            <strong
                                class="font-semibold text-sm sm:text-base text-mizu-dark">{{ $transaction->started_at->format('d M, Y') }}</strong>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-4 sm:size-5 shrink-0" />
                                <p class="text-sm sm:text-base text-mizu-text">Ended At</p>
                            </div>
                            <strong
                                class="font-semibold text-sm sm:text-base text-mizu-dark">{{ $transaction->ended_at->format('d M, Y') }}</strong>
                        </div>
                        <div class="h-px bg-mizu-divider my-2"></div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-4 sm:size-5 shrink-0" />
                                <p class="text-sm sm:text-base text-mizu-text">PPN 12%</p>
                            </div>
                            <strong class="font-semibold text-sm sm:text-base text-mizu-dark">Rp
                                {{ number_format($transaction->total_tax_amount, 0, '', '.') }}</strong>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-gradient-to-r from-mizu-primary/10 to-mizu-light rounded-xl p-3 border-2 border-mizu-primary/30">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-4 sm:size-5 shrink-0" />
                                <p class="whitespace-nowrap font-semibold text-sm sm:text-base text-mizu-dark">Grand Total
                                </p>
                            </div>
                            <strong
                                class="font-bold text-mizu-primary text-lg sm:text-[22px] leading-tight sm:leading-[33px]">
                                Rp {{ number_format($transaction->grand_total_amount, 0, '', '.') }} </strong>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
