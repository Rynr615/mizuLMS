@extends('front.layouts.app')
@section('title', 'Login - Mizu')
@section('content')
    <x-nav-guest></x-nav-guest>
    <main class="relative flex flex-1 min-h-screen overflow-hidden bg-gradient-to-br from-blue-500 via-cyan-500 to-blue-600">

        <x-bubbles-effect></x-bubbles-effect>

        <!-- Main Content Container -->
        <div class="relative z-10 w-full flex items-center justify-center px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
            <div class="w-full max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

                    <!-- Left Side - Branding & Info -->
                    <div class="hidden lg:flex flex-col gap-8 text-white">
                        <!-- Logo & Title -->
                        <div class="space-y-4">
                            <div
                                class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-md rounded-2xl px-6 py-3 border border-white/20">
                                <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center">
                                    <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h1 class="text-2xl font-bold">Mizu LMS</h1>
                                    <p class="text-sm text-white/80">Learning Management System</p>
                                </div>
                            </div>

                            <h2 class="text-4xl xl:text-5xl font-bold leading-tight">
                                Welcome Back,<br>
                                Continue Learning
                            </h2>
                            <p class="text-lg text-white/90 leading-relaxed">
                                Sign in to access your courses, track your progress, and continue your journey to mastery.
                            </p>
                        </div>

                        <!-- Features -->
                        <div class="grid gap-4">
                            <div
                                class="flex items-start gap-4 bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20 hover:bg-white/15 transition-all duration-300">
                                <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Your Learning Dashboard</h3>
                                    <p class="text-sm text-white/80">Access all your courses in one place</p>
                                </div>
                            </div>

                            <div
                                class="flex items-start gap-4 bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20 hover:bg-white/15 transition-all duration-300">
                                <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Track Your Progress</h3>
                                    <p class="text-sm text-white/80">Monitor your learning journey</p>
                                </div>
                            </div>

                            <div
                                class="flex items-start gap-4 bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20 hover:bg-white/15 transition-all duration-300">
                                <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Learn Anytime</h3>
                                    <p class="text-sm text-white/80">Flexible learning on your schedule</p>
                                </div>
                            </div>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-4">
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-1">50K+</div>
                                <div class="text-sm text-white/80">Active Learners</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-1">500+</div>
                                <div class="text-sm text-white/80">Courses</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-1">95%</div>
                                <div class="text-sm text-white/80">Satisfaction</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side - Login Form -->
                    <div class="w-full">
                        <div
                            class="bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl shadow-black/20 p-6 sm:p-8 lg:p-10 border border-white/50">

                            <!-- Mobile Logo -->
                            <div class="lg:hidden text-center mb-6">
                                <div class="inline-flex items-center gap-2 mb-3">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h1
                                        class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">
                                        Mizu LMS
                                    </h1>
                                </div>
                                <h2 class="text-xl font-bold text-gray-800 mb-2">Welcome Back!</h2>
                                <p class="text-sm text-gray-600">Sign in to continue learning</p>
                            </div>

                            <!-- Desktop Header -->
                            <div class="hidden lg:block text-center mb-8">
                                <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back!</h2>
                                <p class="text-gray-600">Sign in to access your account</p>
                            </div>

                            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                                @csrf

                                <!-- Email Address -->
                                <div class="space-y-2">
                                    <label class="block text-sm font-semibold text-gray-700">
                                        Email Address <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative group">
                                        <input name="email" type="email"
                                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-50 outline-none transition-all duration-300 text-sm font-medium placeholder:text-gray-400 placeholder:font-normal"
                                            placeholder="your.email@example.com">
                                        <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                            </path>
                                        </svg>
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                                </div>

                                <!-- Password -->
                                <div class="space-y-2">
                                    <label class="block text-sm font-semibold text-gray-700">
                                        Password <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative group">
                                        <input name="password" type="password"
                                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-50 outline-none transition-all duration-300 text-sm font-medium placeholder:text-gray-400 placeholder:font-normal"
                                            placeholder="Enter your password">
                                        <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                                </div>

                                <!-- Remember Me & Forgot Password -->
                                <div class="flex items-center justify-between pt-2">
                                    <label class="flex items-center gap-2 cursor-pointer group">
                                        <input type="checkbox"
                                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                                        <span
                                            class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors">Remember
                                            me</span>
                                    </label>
                                    <a href="#"
                                        class="text-sm font-semibold text-blue-600 hover:text-cyan-600 transition-colors">
                                        Forgot Password?
                                    </a>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit"
                                    class="w-full flex items-center justify-center gap-2 py-4 rounded-xl bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 font-semibold text-white shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:-translate-y-0.5 transition-all duration-300 group mt-6">
                                    <span>Sign In to My Account</span>
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </button>

                                <!-- Sign Up Link -->
                                <p class="text-center text-sm text-gray-600 pt-4 border-t border-gray-100">
                                    Don't have an account?
                                    <a href="{{ route('register') }}"
                                        class="font-semibold text-blue-600 hover:text-cyan-600 transition-colors duration-300 inline-flex items-center gap-1">
                                        Sign Up Now
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
