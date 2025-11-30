@extends('front.layouts.app')
@section('title', 'Pricing - Mizu')
@section('content')
    <x-nav-guest></x-nav-guest>

    <main class="flex flex-col flex-1 justify-center">
        <section id="pricing" class="flex pb-10 md:pb-16 lg:pb-20 flex-col items-center gap-10 mt-[50px] px-5">

            <!-- Heading -->
            <div class="flex flex-col items-center gap-3 max-w-[500px] text-center">
                <p class="flex items-center gap-2 w-fit rounded-full py-2 px-4 bg-mizu-light">
                    <img src="{{ asset('assets/images/icons/crown-green.svg') }}" class="w-5" alt="icon">
                    <span class="font-bold text-sm text-mizu-dark">UNLOCK PRO JOURNEY</span>
                </p>

                <h1 class="font-bold text-[28px] leading-[42px] text-mizu-dark">Pricing For Everyone</h1>
                <p class="leading-[28px] text-mizu-text">Harga murah, kualitas mentor tetap internasional.</p>
            </div>

            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-[1100px]">

                <!-- SCHOLARSHIP CARD -->
                <div
                    class="price-card flex flex-col rounded-2xl p-6 border bg-white shadow-sm
                        hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('assets/images/icons/award-black-fill.svg') }}" class="w-[60px]" alt="icon">
                        <h2 class="font-bold text-[22px] text-mizu-dark">Beasiswa</h2>
                    </div>

                    <div class="price mt-4">
                        <p class="font-bold text-[32px] text-mizu-dark">Rp 0</p>
                        <p class="text-mizu-text mt-1">3 months duration</p>
                    </div>

                    <hr class="my-4 border-mizu-divider">

                    <div class="flex flex-col gap-3">
                        <p class="flex gap-2"><img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                class="w-5">Access 100+ Online Courses</p>
                        <p class="flex gap-2"><img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                class="w-5">Get Premium Certifications</p>
                    </div>

                    <hr class="my-4 border-mizu-divider">

                    <a class="w-full h-11 rounded-full bg-mizu-divider text-center flex items-center justify-center">
                        <span class="font-semibold text-mizu-text">Sold Out</span>
                    </a>
                </div>

                <!-- MOST POPULAR CARD -->
                @foreach ($pricing_packages as $package)
                    <div
                        class="popular-card flex flex-col rounded-2xl border-2 border-mizu-primary shadow-lg
                        hover:shadow-xl transition-all duration-300 overflow-hidden
                        lg:scale-[1.08] lg:-mt-4 bg-white">

                        <p class="text-center font-semibold text-white py-2 bg-mizu-primary">Most Popular Package</p>

                        <div class="flex flex-col gap-5 p-6">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}" class="w-[60px]"
                                    alt="icon">
                                <h2 class="font-bold text-[22px] text-mizu-dark">{{ $package->name }}</h2>
                            </div>

                            <div class="price">
                                <p class="font-bold text-[32px]">
                                    {{ number_format($package->price, 0, '', '.') }}</p>
                                <p class="text-mizu-text mt-1">{{ $package->duration }} months duration</p>
                            </div>

                            <hr class="border-mizu-divider">

                            <div class="flex flex-col gap-3">
                                <p class="flex gap-2"><img
                                        src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                        class="w-5">Access 1500+ Online Courses</p>
                                <p class="flex gap-2"><img
                                        src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                        class="w-5">Get Premium Certifications</p>
                                <p class="flex gap-2"><img
                                        src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                        class="w-5">High Quality Work Portfolio</p>
                                <p class="flex gap-2"><img
                                        src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                        class="w-5">Career Consultation</p>
                                <p class="flex gap-2"><img
                                        src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}"
                                        class="w-5">Support learning 24/7</p>
                            </div>

                            <hr class="border-mizu-divider">

                            @if ($user && $package->isSubscribedByUser($user->id))
                                <a class="w-full h-11 rounded-full bg-mizu-primary flex justify-center items-center">
                                    <span class="font-semibold text-white">You've Subscribed</span>
                                </a>
                            @else
                                <a href="{{ route('front.checkout', $package) }}"
                                    class="w-full h-11 rounded-full bg-mizu-primary hover:bg-mizu-primary-dark flex justify-center items-center transition-all">
                                    <span class="font-semibold text-white">Get Pro</span>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach

                <!-- BUSINESS CARD -->
                <div
                    class="price-card flex flex-col rounded-2xl p-6 border bg-white shadow-sm hover:shadow-lg transition-all">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('assets/images/icons/buildings-green-fill.svg') }}" class="w-[60px]"
                            alt="icon">
                        <h2 class="font-bold text-[22px] text-mizu-dark">Business</h2>
                    </div>

                    <hr class="my-4 border-mizu-divider">

                    <p class="font-bold leading-[27px] text-mizu-dark">
                        Customizing easily without paying too much money
                    </p>

                    <p class="mt-3 leading-7 text-mizu-text">
                        Kami bantu siapkan materi ajar sesuai kebutuhan perusahaan anda.
                    </p>

                    <hr class="my-4 border-mizu-divider">

                    <a
                        class="w-full h-11 rounded-full border border-mizu-divider hover:border-mizu-primary
                           flex justify-center items-center transition-all bg-white">
                        <span class="font-semibold text-mizu-dark">Contact Sales</span>
                    </a>
                </div>

            </div>
        </section>
    </main>


@endsection
