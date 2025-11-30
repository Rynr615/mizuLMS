@extends('front.layouts.app')
@section('title', 'Checkout - Mizu')
@section('content')

    <x-navigation-auth></x-navigation-auth>
    <div id="path" class="flex w-full bg-white border-b-2 border-mizu-divider py-3 md:py-[14px] overflow-x-auto">
        <div
            class="flex items-center w-full max-w-[1280px] px-4 sm:px-6 lg:px-[75px] mx-auto gap-3 md:gap-5 whitespace-nowrap">
            <a href="{{ route('front.index') }}"
                class="text-mizu-text hover:text-mizu-primary transition-colors last-of-type:font-semibold last-of-type:text-mizu-dark text-sm md:text-base">Home</a>
            <div class="h-8 md:h-10 w-px bg-mizu-divider"></div>
            <a href="{{ route('front.pricing') }}"
                class="text-mizu-text hover:text-mizu-primary transition-colors last-of-type:font-semibold last-of-type:text-mizu-dark text-sm md:text-base">Pricing
                Packages</a>
            <span class="text-mizu-divider text-sm md:text-base">/</span>
            <a href=""
                class="text-mizu-text hover:text-mizu-primary transition-colors last-of-type:font-semibold last-of-type:text-mizu-dark text-sm md:text-base">Checkout</a>
        </div>
    </div>

    <main class="flex flex-1 justify-center py-5 md:py-8 items-start px-4 sm:px-6 lg:px-8">
        <div
            class="flex flex-col lg:flex-row w-full max-w-[1200px] rounded-[20px] border-2 border-mizu-divider gap-6 lg:gap-[40px] bg-white p-4 sm:p-5 shadow-lg">

            <!-- Left Side - Checkout Form -->
            <form id="checkout-details" method="POST" class="w-full flex flex-col gap-5">
                @csrf
                <input type="text" hidden name="payment_method" value="Midtrans">

                <h1 class="font-bold text-xl sm:text-[22px] leading-tight sm:leading-[33px] text-mizu-dark">Checkout Pro
                </h1>

                <!-- Give Access To Section -->
                <section id="give-access-to" class="flex flex-col gap-2">
                    <h2 class="font-semibold text-base sm:text-lg text-mizu-dark">Give Access to</h2>
                    <div
                        class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 sm:gap-4 rounded-[20px] border-2 border-mizu-divider p-3 sm:p-[14px] hover:border-mizu-primary transition-all duration-300">
                        <div class="profile flex items-center gap-3 sm:gap-[14px]">
                            <div
                                class="flex justify-center items-center overflow-hidden size-12 sm:size-[50px] rounded-full border-2 border-mizu-divider shrink-0">
                                <img src="{{ Storage::url($user->photo) }}" alt="image" class="size-full object-cover" />
                            </div>
                            <div class="desc flex flex-col gap-1 sm:gap-[3px]">
                                <h3 class="font-semibold text-sm sm:text-base text-mizu-dark">{{ $user->name }}</h3>
                                <p class="text-xs sm:text-sm leading-tight sm:leading-[21px] text-mizu-text">
                                    {{ $user->occupation }}</p>
                            </div>
                        </div>
                        <a href="#" class="text-right sm:text-left">
                            <p
                                class="text-xs sm:text-sm leading-tight sm:leading-[21px] hover:underline text-mizu-primary font-semibold">
                                Change Account</p>
                        </a>
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
                                {{ number_format($pricing->price, 0, '', '.') }}</strong>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-4 sm:size-5 shrink-0" />
                                <p class="text-sm sm:text-base text-mizu-text">Access Duration</p>
                            </div>
                            <strong class="font-semibold text-sm sm:text-base text-mizu-dark">{{ $pricing->duration }}
                                Months</strong>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-4 sm:size-5 shrink-0" />
                                <p class="text-sm sm:text-base text-mizu-text">Started At</p>
                            </div>
                            <strong
                                class="font-semibold text-sm sm:text-base text-mizu-dark">{{ $started_at->format('d M, Y') }}</strong>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-4 sm:size-5 shrink-0" />
                                <p class="text-sm sm:text-base text-mizu-text">Ended At</p>
                            </div>
                            <strong
                                class="font-semibold text-sm sm:text-base text-mizu-dark">{{ $ended_at->format('d M, Y') }}</strong>
                        </div>
                        <div class="h-px bg-mizu-divider my-2"></div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                    class="size-4 sm:size-5 shrink-0" />
                                <p class="text-sm sm:text-base text-mizu-text">PPN 12%</p>
                            </div>
                            <strong class="font-semibold text-sm sm:text-base text-mizu-dark">Rp
                                {{ number_format($total_tax_amount, 0, '', '.') }}</strong>
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
                                class="font-bold text-lg sm:text-[22px] leading-tight sm:leading-[33px] text-mizu-primary">Rp
                                {{ number_format($grand_total_amount, 0, '', '.') }}</strong>
                        </div>
                    </div>
                </section>

                <!-- Action Buttons -->
                <div class="grid grid-cols-2 gap-3 sm:gap-[14px]">
                    <a href="pricing.html">
                        <div
                            class="flex border-2 border-mizu-divider rounded-full items-center justify-center py-2.5 sm:py-[10px] hover:border-mizu-primary hover:bg-mizu-light transition-all duration-300">
                            <p class="font-semibold text-sm sm:text-base text-mizu-dark">Cancel</p>
                        </div>
                    </a>
                    <button id="pay-button" type="submit"
                        class="flex text-white bg-gradient-to-r from-mizu-primary to-mizu-primary-dark hover:from-mizu-primary-dark hover:to-mizu-primary rounded-full items-center justify-center py-2.5 sm:py-[10px] shadow-lg shadow-mizu-primary/30 hover:shadow-xl hover:shadow-mizu-primary/40 hover:-translate-y-0.5 transition-all duration-300">
                        <p class="font-semibold text-sm sm:text-base">Pay Now</p>
                    </button>
                </div>

                <hr class="border-mizu-divider" />

                <p
                    class="text-xs sm:text-sm leading-tight sm:leading-[21px] text-center hover:underline text-mizu-text cursor-pointer">
                    Pahami Terms & Conditions Platform Kami</p>
            </form>

            <!-- Right Side - Benefits -->
            <div id="benefits"
                class="bg-mizu-light/50 rounded-[20px] overflow-hidden w-full lg:w-[420px] shrink-0 border-2 border-mizu-divider">
                <section id="thumbnails"
                    class="relative flex justify-center h-[200px] sm:h-[250px] items-center overflow-hidden rounded-t-[14px] w-full">
                    <img src="{{ asset('assets/images/thumbnails/checkout.png') }}" alt="image"
                        class="size-full object-cover" />
                </section>
                <section id="points" class="pt-[61px] relative flex flex-col gap-3 sm:gap-4 px-4 sm:px-5 pb-4 sm:pb-5">
                    <div
                        class="card absolute -top-[47px] left-[20px] right-[20px] sm:left-[30px] sm:right-[30px] flex items-center p-3 sm:p-4 gap-3 sm:gap-[14px] border-2 border-mizu-divider rounded-[20px] bg-white shadow-lg shadow-mizu-primary/10">
                        <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}" alt="icon"
                            class="size-10 sm:size-[50px] shrink-0" />
                        <div>
                            <h3 class="font-bold text-base sm:text-[18px] leading-tight sm:leading-[27px] text-mizu-dark">
                                {{ $pricing->name }}</h3>
                            <p class="text-xs sm:text-sm text-mizu-text">{{ $pricing->duration }} months duration</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" alt="icon"
                            class="size-5 sm:size-6 shrink-0" />
                        <p class="font-semibold text-sm sm:text-base text-mizu-dark">Access 1500+ Online Courses</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" alt="icon"
                            class="size-5 sm:size-6 shrink-0" />
                        <p class="font-semibold text-sm sm:text-base text-mizu-dark">Get Premium Certifications</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" alt="icon"
                            class="size-5 sm:size-6 shrink-0" />
                        <p class="font-semibold text-sm sm:text-base text-mizu-dark">High Quality Work Portfolio</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" alt="icon"
                            class="size-5 sm:size-6 shrink-0" />
                        <p class="font-semibold text-sm sm:text-base text-mizu-dark">Career Consultation 2025</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/icons/tick-circle-green-fill.svg') }}" alt="icon"
                            class="size-5 sm:size-6 shrink-0" />
                        <p class="font-semibold text-sm sm:text-base text-mizu-dark">Support learning 24/7</p>
                    </div>
                </section>
            </div>
        </div>
    </main>


@endsection
@push('after-scripts')
    {{-- <script src="{{ asset('js/dropdown-navbar.js') }}"></script> --}}
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.clientKey') }}"></script>

    <script type="text/javascript">
        const payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();

            fetch('{{ route('front.payment_store_midtrans') }}', {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                        // "Accept": "application/json"
                    },
                    body: JSON.stringify({

                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    if (data.snap_token) {
                        snap.pay(data.snap_token, {
                            onSuccess: function(result) {
                                window.location.href = "{{ route('front.checkout.success') }}";
                            },
                            onPending: function(result) {
                                alert('Payment pending!');
                                window.location.href = "{{ route('front.index') }}";
                            },
                            onError: function(result) {
                                alert('Payment failed: ' + result.status_message);
                                window.location.href = "{{ route('front.index') }}";
                            },
                            onClose: function() {
                                alert('Payment popup closed.');
                                window.location.href = "{{ route('front.index') }}";
                            }
                        });
                    } else {
                        alert('Error: ' + data.error);
                    }
                })
                .catch(error => {
                    console.error('Error: ', error);
                })
        });
    </script>
@endpush
