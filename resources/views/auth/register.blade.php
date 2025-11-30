@extends('front.layouts.app')
@section('title', 'Register - Mizu')
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
                                Flow Like Water,<br>
                                Learn Without Limits
                            </h2>
                            <p class="text-lg text-white/90 leading-relaxed">
                                Join thousands of learners who are upgrading their skills and transforming their careers
                                with Mizu LMS.
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
                                    <h3 class="font-semibold text-lg mb-1">Expert-Led Courses</h3>
                                    <p class="text-sm text-white/80">Learn from industry professionals</p>
                                </div>
                            </div>

                            <div
                                class="flex items-start gap-4 bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20 hover:bg-white/15 transition-all duration-300">
                                <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Verified Certificates</h3>
                                    <p class="text-sm text-white/80">Earn recognized credentials</p>
                                </div>
                            </div>

                            <div
                                class="flex items-start gap-4 bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20 hover:bg-white/15 transition-all duration-300">
                                <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Lifetime Access</h3>
                                    <p class="text-sm text-white/80">Learn at your own pace, anytime</p>
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

                    <!-- Right Side - Registration Form -->
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
                                <h2 class="text-xl font-bold text-gray-800 mb-2">Create Your Account</h2>
                                <p class="text-sm text-gray-600">Start your learning journey today</p>
                            </div>

                            <!-- Desktop Header -->
                            <div class="hidden lg:block text-center mb-8">
                                <h2 class="text-3xl font-bold text-gray-800 mb-2">Create Your Account</h2>
                                <p class="text-gray-600">Join our community of learners</p>
                            </div>

                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                                class="space-y-5">
                                @csrf

                                <!-- Photo Upload - Modern Centered Design -->
                                <div class="flex flex-col items-center gap-3 pb-4 border-b border-gray-100">
                                    <label for="hidden-input"
                                        class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-2xl overflow-hidden border-2 border-dashed border-blue-300 hover:border-blue-500 focus-within:ring-4 focus-within:ring-blue-100 transition-all duration-300 bg-gradient-to-br from-blue-50 to-cyan-50 group cursor-pointer">
                                        <span id="upload-placeholder"
                                            class="absolute inset-0 flex flex-col items-center justify-center gap-1 text-center group-hover:scale-110 transition-transform pointer-events-none">
                                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <span class="font-semibold text-xs text-gray-600">Upload Photo</span>
                                        </span>
                                        <img id="photo-preview" src=""
                                            class="w-full h-full object-cover hidden pointer-events-none" alt="photo">
                                    </label>
                                    <button id="delete-photo" type="button"
                                        class="rounded-full py-2 px-4 bg-red-50 hover:bg-red-100 font-semibold text-xs text-red-600 hidden transition-colors duration-300 border border-red-200">
                                        Remove Photo
                                    </button>
                                    <input id="hidden-input" name="photo" type="file" accept="image/*"
                                        class="sr-only">
                                    <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                                </div>

                                <!-- Two Column Layout for Name & Occupation -->
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <!-- Complete Name -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Complete Name <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative group">
                                            <input name="name" type="text"
                                                class="w-full pl-11 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-50 outline-none transition-all duration-300 text-sm font-medium placeholder:text-gray-400 placeholder:font-normal"
                                                placeholder="Your Name">
                                            <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                </path>
                                            </svg>
                                        </div>
                                        <x-input-error :messages="$errors->get('name')" class="mt-1" />
                                    </div>

                                    <!-- Occupation -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Occupation <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative group">
                                            <input name="occupation" type="text"
                                                class="w-full pl-11 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-50 outline-none transition-all duration-300 text-sm font-medium placeholder:text-gray-400 placeholder:font-normal"
                                                placeholder="Software Engineer">
                                            <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <x-input-error :messages="$errors->get('occupation')" class="mt-1" />
                                    </div>
                                </div>

                                <!-- Email Address -->
                                <div class="space-y-2">
                                    <label class="block text-sm font-semibold text-gray-700">
                                        Email Address <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative group">
                                        <input name="email" type="email"
                                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-50 outline-none transition-all duration-300 text-sm font-medium placeholder:text-gray-400 placeholder:font-normal"
                                            placeholder="john@example.com">
                                        <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                            </path>
                                        </svg>
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                                </div>

                                <!-- Password Fields -->
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <!-- Password -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Password <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative group">
                                            <input name="password" type="password"
                                                class="w-full pl-11 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-50 outline-none transition-all duration-300 text-sm font-medium placeholder:text-gray-400 placeholder:font-normal"
                                                placeholder="••••••••">
                                            <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                                </path>
                                            </svg>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-1" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-700">
                                            Confirm Password <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative group">
                                            <input name="password_confirmation" type="password"
                                                class="w-full pl-11 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-50 outline-none transition-all duration-300 text-sm font-medium placeholder:text-gray-400 placeholder:font-normal"
                                                placeholder="••••••••">
                                            <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                                </path>
                                            </svg>
                                        </div>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit"
                                    class="w-full flex items-center justify-center gap-2 py-4 rounded-xl bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 font-semibold text-white shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:-translate-y-0.5 transition-all duration-300 group mt-6">
                                    <span>Create My Account</span>
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </button>

                                <!-- Sign In Link -->
                                <p class="text-center text-sm text-gray-600 pt-4 border-t border-gray-100">
                                    Already have an account?
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-blue-600 hover:text-cyan-600 transition-colors duration-300 inline-flex items-center gap-1">
                                        Sign In
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

    <script>
        // Photo Upload Preview - Simplified version without double click issue
        document.addEventListener('DOMContentLoaded', function() {
            const hiddenInput = document.getElementById('hidden-input');
            const photoPreview = document.getElementById('photo-preview');
            const deleteBtn = document.getElementById('delete-photo');
            const uploadPlaceholder = document.getElementById('upload-placeholder');

            // Handle file selection
            hiddenInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        photoPreview.src = e.target.result;
                        photoPreview.classList.remove('hidden');
                        uploadPlaceholder.classList.add('hidden');
                        deleteBtn.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Handle delete photo
            deleteBtn.addEventListener('click', function(e) {
                e.preventDefault();
                hiddenInput.value = '';
                photoPreview.src = '';
                photoPreview.classList.add('hidden');
                uploadPlaceholder.classList.remove('hidden');
                deleteBtn.classList.add('hidden');
            });
        });
    </script>

@endsection

@push('after-scripts')
    {{-- <script src="{{ asset('js/dropdown-navbar.js') }}"></script> --}}
    <script src="{{ asset('js/photo-upload.js') }}"></script>
@endpush
