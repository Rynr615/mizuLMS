@extends('front.layouts.app')
@section('title', 'My Subscription - Mizu')
@section('content')

    <x-navigation-auth></x-navigation-auth>
    <x-nav-bottom></x-nav-bottom>

    <main class="relative flex flex-1 min-h-screen bg-gradient-to-br from-mizu-light/30 via-white to-mizu-light/20">
        <!-- Background Banner -->
        <div id="background-banner" class="hidden lg:block absolute w-1/2 h-full overflow-hidden right-0 opacity-20">
            <img src="{{ asset('assets/images/backgrounds/banner-subscription.png') }}" class="w-full h-full object-cover"
                alt="banner">
        </div>

        <section id="subscriptions-list" class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

            <!-- Header Section -->
            <div class="mb-8 lg:mb-12">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="font-bold text-3xl lg:text-4xl text-mizu-dark mb-2">My Subscriptions</h1>
                        <p class="text-mizu-text">Manage and track your active subscriptions</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="bg-white rounded-xl px-4 py-2 border-2 border-mizu-divider">
                            <span class="text-sm text-mizu-text">Total: </span>
                            <span class="font-bold text-mizu-primary">{{ $transactions->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Subscriptions Grid -->
            <div id="list-container" class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-6 max-w-6xl">
                @forelse ($transactions as $transaction)
                    <div
                        class="subscription-card group bg-white rounded-2xl shadow-sm hover:shadow-xl border-2 border-mizu-divider hover:border-mizu-primary transition-all duration-300 overflow-hidden">

                        <!-- Card Header with Status -->
                        <div
                            class="relative bg-gradient-to-r from-mizu-primary/5 to-mizu-light/50 px-6 py-4 border-b-2 border-mizu-divider">
                            <div class="flex items-start justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-mizu-primary to-mizu-primary-dark rounded-xl flex items-center justify-center shadow-lg shadow-mizu-primary/20 group-hover:scale-110 transition-transform duration-300">
                                        <img src="{{ asset('assets/images/icons/cup-green-fill.svg') }}" class="w-8 h-8"
                                            alt="icon">
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-lg lg:text-xl text-mizu-dark">
                                            {{ $transaction->pricing->name }}</h3>
                                        <p class="text-sm text-mizu-text">{{ $transaction->pricing->duration }} months plan
                                        </p>
                                    </div>
                                </div>

                                <!-- Status Badge -->
                                @if ($transaction->isActive())
                                    <span
                                        class="font-bold text-xs text-green-600 badge rounded-full py-2 px-4 bg-green-100 border-2 border-green-200 whitespace-nowrap">
                                        ● ACTIVE
                                    </span>
                                @else
                                    <span
                                        class="font-bold text-xs text-red-600 badge rounded-full py-2 px-4 bg-red-100 border-2 border-red-200 whitespace-nowrap">
                                        ● EXPIRED
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="px-6 py-5">
                            <div class="grid grid-cols-2 gap-4 mb-5">
                                <!-- Price Info -->
                                <div class="bg-mizu-light/50 rounded-xl p-4 border border-mizu-divider">
                                    <div class="flex items-center gap-2 mb-2">
                                        <svg class="w-5 h-5 text-mizu-primary" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                        <span class="text-xs font-semibold text-mizu-text uppercase">Price</span>
                                    </div>
                                    <p class="font-bold text-lg text-mizu-dark">Rp
                                        {{ number_format($transaction->sub_total_amount, 0, '', '.') }}</p>
                                </div>

                                <!-- Start Date Info -->
                                <div class="bg-mizu-light/50 rounded-xl p-4 border border-mizu-divider">
                                    <div class="flex items-center gap-2 mb-2">
                                        <svg class="w-5 h-5 text-mizu-primary" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <span class="text-xs font-semibold text-mizu-text uppercase">Started</span>
                                    </div>
                                    <p class="font-bold text-lg text-mizu-dark">
                                        {{ $transaction->started_at->format('d M, Y') }}</p>
                                </div>
                            </div>

                            <!-- Action Button -->
                            <a href="{{ route('dashboard.subscription.details', $transaction) }}"
                                class="flex items-center justify-center gap-2 w-full rounded-xl py-3.5 px-6 bg-gradient-to-r from-mizu-primary to-mizu-primary-dark hover:from-mizu-primary-dark hover:to-mizu-primary text-white font-semibold shadow-lg shadow-mizu-primary/30 hover:shadow-xl hover:shadow-mizu-primary/40 hover:-translate-y-0.5 transition-all duration-300 group">
                                <span>View Details</span>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- Decorative Element -->
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-mizu-primary/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                @empty
                    <!-- Empty State -->
                    <div class="col-span-full flex flex-col items-center justify-center py-16 px-4">
                        <div class="w-24 h-24 bg-mizu-light rounded-full flex items-center justify-center mb-6">
                            <svg class="w-12 h-12 text-mizu-primary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-xl text-mizu-dark mb-2">No Subscriptions Yet</h3>
                        <p class="text-mizu-text text-center max-w-md mb-6">You haven't purchased any subscription packages
                            yet. Start learning by choosing a plan!</p>
                        <a href="{{ route('front.pricing') }}"
                            class="px-6 py-3 bg-gradient-to-r from-mizu-primary to-mizu-primary-dark text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-mizu-primary/30 transition-all duration-300">
                            Browse Plans
                        </a>
                    </div>
                @endforelse
            </div>
        </section>
    </main>

@endsection
