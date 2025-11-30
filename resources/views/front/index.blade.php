@extends('front.layouts.app')
@section('title', 'Mizu - LMS')
@section('content')
    <x-nav-guest></x-nav-guest>
    <main class="relative flex flex-1 min-h-screen overflow-hidden">

        <!-- Animated Background with Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-500">
            <!-- Animated Mesh Gradient Overlay -->
            <div class="absolute inset-0 opacity-30">
                <div
                    class="absolute top-0 -left-4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob">
                </div>
                <div
                    class="absolute top-0 -right-4 w-96 h-96 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000">
                </div>
                <div
                    class="absolute -bottom-8 left-20 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000">
                </div>
            </div>

            <!-- Floating Elements -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="floating-element absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-lg backdrop-blur-sm"
                    style="animation-delay: 0s;"></div>
                <div class="floating-element absolute top-40 right-20 w-16 h-16 bg-white/10 rounded-full backdrop-blur-sm"
                    style="animation-delay: 1s;"></div>
                <div class="floating-element absolute bottom-32 left-1/4 w-12 h-12 bg-white/10 rounded-lg backdrop-blur-sm"
                    style="animation-delay: 2s;"></div>
                <div class="floating-element absolute bottom-20 right-1/3 w-24 h-24 bg-white/10 rounded-full backdrop-blur-sm"
                    style="animation-delay: 1.5s;"></div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 w-full flex items-center py-12 md:py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto w-full">

                <!-- Center Content Layout -->
                <div class="text-center space-y-8 md:space-y-12">

                    <!-- Badge -->
                    <div class="flex justify-center animate-fade-in-down">
                        <div
                            class="inline-flex items-center gap-2 rounded-full py-2.5 px-5 bg-white/20 backdrop-blur-md border border-white/30 shadow-lg">
                            <div class="w-6 h-6 bg-yellow-400 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-yellow-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <span class="font-bold text-sm text-white">TRUSTED BY 500+ COMPANIES</span>
                        </div>
                    </div>

                    <!-- Main Heading -->
                    <div class="space-y-6 animate-fade-in-up animation-delay-200">
                        <h1
                            class="font-extrabold text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-tight text-white drop-shadow-2xl">
                            Flow Like Water,<br>
                            <span
                                class="bg-gradient-to-r from-yellow-200 via-cyan-200 to-blue-200 bg-clip-text text-transparent">
                                Master Any Skill
                            </span>
                        </h1>
                        <p
                            class="text-lg md:text-xl lg:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed font-light">
                            Join thousands of learners transforming their careers with expert-led courses designed by
                            industry professionals
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div
                        class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up animation-delay-400">
                        <a href="{{ route('register') }}" class="group relative w-full sm:w-auto">
                            <div
                                class="absolute -inset-1 bg-gradient-to-r from-yellow-400 to-pink-500 rounded-full blur opacity-75 group-hover:opacity-100 transition duration-300">
                            </div>
                            <div
                                class="relative flex items-center justify-center gap-2 px-8 py-4 bg-white rounded-full font-bold text-lg text-gray-900 hover:scale-105 transition-transform duration-300">
                                <span>Start Learning</span>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="#"
                            class="w-full sm:w-auto flex items-center justify-center gap-3 px-8 py-4 bg-white/20 backdrop-blur-md border-2 border-white/40 rounded-full font-semibold text-lg text-white hover:bg-white/30 transition-all duration-300 group">
                            <div
                                class="w-10 h-10 bg-white rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z">
                                    </path>
                                </svg>
                            </div>
                            <span>Watch Demo</span>
                        </a>
                    </div>

                    <!-- Stats Cards -->
                    <div
                        class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 max-w-4xl mx-auto mt-16 animate-fade-in-up animation-delay-600">
                        <div
                            class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                            <div class="text-4xl md:text-5xl font-bold text-white mb-2">50K+</div>
                            <div class="text-white/80 font-medium">Active Students</div>
                        </div>
                        <div
                            class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                            <div class="text-4xl md:text-5xl font-bold text-white mb-2">500+</div>
                            <div class="text-white/80 font-medium">Expert Courses</div>
                        </div>
                        <div
                            class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105">
                            <div class="text-4xl md:text-5xl font-bold text-white mb-2">95%</div>
                            <div class="text-white/80 font-medium">Satisfaction Rate</div>
                        </div>
                    </div>

                    <!-- Social Proof Section -->
                    <div class="flex flex-col items-center gap-4 animate-fade-in-up animation-delay-800">
                        <div
                            class="flex items-center gap-4 bg-white/10 backdrop-blur-md rounded-full px-6 py-3 border border-white/20">
                            <div class="flex -space-x-3">
                                <img src="{{ asset('assets/images/photos/5thPerson.png') }}"
                                    class="w-12 h-12 rounded-full border-2 border-white" alt="user">
                            </div>
                            <div class="text-left">
                                <div class="flex items-center gap-1">
                                    <div class="flex">
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="font-bold text-white ml-1">5.0</span>
                                </div>
                                <p class="text-sm text-white/90 font-medium">Loved by millions of learners</p>
                            </div>
                        </div>
                    </div>

                    <!-- Scroll Indicator -->
                    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce hidden lg:block">
                        <div class="w-6 h-10 border-2 border-white/50 rounded-full flex items-start justify-center p-2">
                            <div class="w-1.5 h-3 bg-white rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        /* Blob Animation */
        @keyframes blob {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        /* Floating Elements */
        @keyframes floating {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        .floating-element {
            animation: floating 6s ease-in-out infinite;
        }

        /* Fade In Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fadeInDown 0.8s ease-out forwards;
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
            opacity: 0;
        }

        .animation-delay-400 {
            animation-delay: 0.4s;
            opacity: 0;
        }

        .animation-delay-600 {
            animation-delay: 0.6s;
            opacity: 0;
        }

        .animation-delay-800 {
            animation-delay: 0.8s;
            opacity: 0;
        }
    </style>

@endsection
