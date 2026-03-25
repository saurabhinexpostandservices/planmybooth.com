<!-- resources/views/header.blade.php -->
<div class="w-full font-poppins" aria-label="navbar-top">
    <!-- Desktop Navbar -->

    <!-- Bottom-Bar -->
    <div class="bg-[#145D76] transition-colors duration-300 text-white w-full p-2">
        <div class="flex items-center justify-between md:grid md:grid-cols-7">
            <!-- Logo -->
            <div class="flex items-center pl-5">
                <a href="/">
                    <img src="{{ asset('./assets/images/logo.svg') }}" alt="planmybooth-header-logo" width="110"
                        height="100" />
                </a>
            </div>

            <!-- Main Website Links -->
            <div class="hidden md:flex justify-center items-center col-span-4 ">
                <ul class="flex justify-center items-center gap-2 lg:gap-5 font-poppins">
                    <li class="text-[15px] hover:text-white font-semibold">
                        <a href="mailto:enquiry@planmybooth.com"
                            class="flex gap-2 items-center justify-start pl-10 md:pl-5 xl:pl-16 hover:text-[#DAE7EB]">
                            <i class="fas fa-envelope text-2xl"></i>
                            <span>enquiry@planmybooth.com</span>
                        </a>
                    </li>
                    {{-- <li class="text-[15px] hover:text-white font-semibold">
                        <a href="{{ route('stand-builders') }}">Custom Exhibition Stand</a>
                    </li>
                    <li class="text-[15px] hover:text-white font-semibold">
                        <a href="{{ route('shows') }}">Trade Shows</a>
                    </li>
                    <li class="text-[15px] hover:text-white font-semibold">
                        <a href="{{ route('blogs') }}">Blogs</a>
                    </li> --}}
                    <li class="text-[15px] hover:text-white font-semibold">
                        <a href={{ route('contact-us') }} id="create-account"
                            class="bg-white font-semibold text-[#145D76] text-center uppercase transition-all duration-700 ease-in-out rounded-lg p-2">
                           Get A Free Quote
                        </a>
                    </li>
                </ul>
            </div>

            <nav role="navigation" class=" items-center justify-center gap-5 col-span-2">
                <!-- Log In Button -->
                <div class="flex justify-end items-center py-2 text-sm">
                    <a href="#">
                        @if (Auth::check())
                            <!-- Profile Dropdown Start -->
                            <div class="relative inline-block text-left">
                                <!-- Profile Button -->
                                <button onclick="toggleDropdown()" id="profileButton"
                                    class="flex items-center gap-2 px-4 py-2 rounded-full bg-white shadow hover:bg-gray-100 transition">
                                    <div
                                        class="w-8 h-8 rounded-full bg-[#64CCC5] flex items-center justify-center text-sm font-semibold text-white">
                                        {{ strtoupper(Auth::user()->name[0]) }}

                                    </div>
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <!-- Dropdown Menu -->
                                <div id="dropdownMenu"
                                    class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 z-50">

                                    <a href="{{ route('profile.request') }}"
                                        class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m-4-4v8" />
                                        </svg>
                                        My Requests
                                    </a>
                                    <a href="{{ route('profile') }}"
                                        class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5.121 17.804A8.966 8.966 0 0112 15c2.21 0 4.21.805 5.879 2.132M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        My Profile
                                    </a>
                                    <a href="{{ route('auth.logout') }}"
                                        class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 11-4 0v-1m0-8V7a2 2 0 114 0v1" />
                                        </svg>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="hidden md:flex justify-center items-center">
                                <a href="https://account.planmybooth.com/auth/login"
                                    class="bg-white font-semibold mr-2 text-[#145D76] text-center uppercase transition-all duration-700 ease-in-out rounded-lg p-2">
                                    Vendors
                                </a>

                                <a href={{ route('login') }} id="create-account"
                                    class="bg-white font-semibold text-[#145D76] text-center uppercase transition-all duration-700 ease-in-out rounded-lg p-2">
                                    Exhibitors
                                </a>

                            </div>
                        @endif
                        <a class="absolute right-15 md:relative md:right-0  md:mx-5 hover:scale-110 duration-500" rel="nofollow" href="https://api.whatsapp.com/send?phone=48790896679"><img
                                src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/whatsapp-white-icon.png"
                                alt="whatsapp" width="32" height="32" decoding="async" loading="lazy"></a>
                    </a>
                </div>

                <script>
                    function toggleDropdown() {
                        const menu = document.getElementById('dropdownMenu');
                        menu.classList.toggle('hidden');
                    }

                    // Optional: Close the dropdown when clicking outside
                    window.addEventListener('click', function(e) {
                        const button = document.getElementById('profileButton');
                        const menu = document.getElementById('dropdownMenu');
                        if (!button.contains(e.target) && !menu.contains(e.target)) {
                            menu.classList.add('hidden');
                        }
                    });
                </script>
                <!-- Profile Dropdown End -->

            </nav>

            <!-- Open Menu Button -->
            <button class="text-2xl top-4 right-4 z-50 text-white md:hidden px-5" onclick="openMobileMenu()"
                aria-label="Open Mobile Menu">
                &#9776; <!-- Hamburger icon -->
            </button>
        </div>
    </div>

    <!-- Mobile Navbar -->
    <div id="mobile-menu"
        class="fixed top-0 left-0 h-full w-full bg-white shadow-lg transform -translate-x-full transition-transform duration-500 z-50">

        <div class="flex items-center bg-[#145D76] h-[80px]">
            <a href="/">
                <img src="{{ asset('./assets/images/logo.svg') }}" alt="planmybooth-header-logo" width="100"
                    height="100" class="text-3xl absolute top-0 left-0 p-4" />
            </a>

            <button class="text-3xl absolute top-4 right-4 text-white" onclick="closeMobileMenu()"
                aria-label="Close Mobile Menu">
                &times;
            </button>
        </div>

        <nav role="navigation" class="mt-10 p-4">
            <ul class="flex flex-col gap-4">

                <li class="text-lg hover:text-sky-600">
                    <a href="/" onclick="closeMobileMenu()">Home</a>
                </li>

                <li class="text-lg hover:text-sky-600">
                    <a href="{{ route('stand-builders') }}" onclick="closeMobileMenu()">
                        Custom Exhibition Stand
                    </a>
                </li>

                <li class="text-lg hover:text-sky-600">
                    <a href="{{ route('shows') }}" onclick="closeMobileMenu()">
                        Trade Shows
                    </a>
                </li>

                <li class="text-lg hover:text-sky-600">
                    <a href="{{ route('blogs') }}" onclick="closeMobileMenu()">Blogs</a>
                </li>

                <li class="text-lg hover:text-sky-600">
                    <a href="{{ route('vendor-registration') }}" onclick="closeMobileMenu()">Vendor Registration</a>
                </li>

                <li>
                    @if (Auth::check())
                        <!-- Profile Dropdown for Mobile -->
                        <div class="relative">
                            <button onclick="toggleMobileDropdown()" id="mobileProfileButton"
                                class="flex items-center gap-2 px-4 py-2 rounded-full bg-[#64CCC5] shadow text-white font-semibold w-full">
                                <span
                                    class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-[#145D76] text-sm font-bold">
                                    {{ strtoupper(Auth::user()->name[0]) }}
                                </span>
                                <span class="ml-2">{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4 text-white ml-auto" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div id="mobileDropdownMenu"
                                class="hidden mt-2 w-full bg-white rounded-xl shadow-lg py-2 z-50">
                                <a href="{{ route('profile.request') }}"
                                    class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m-4-4v8" />
                                    </svg>
                                    My Requests
                                </a>
                                <a href="{{ route('profile') }}"
                                    class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.121 17.804A8.966 8.966 0 0112 15c2.21 0 4.21.805 5.879 2.132M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    My Profile
                                </a>
                                <a href="{{ route('auth.logout') }}"
                                    class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 11-4 0v-1m0-8V7a2 2 0 114 0v1" />
                                    </svg>
                                    Logout
                                </a>
                            </div>
                        </div>
                        <script>
                            function toggleMobileDropdown() {
                                const menu = document.getElementById('mobileDropdownMenu');
                                menu.classList.toggle('hidden');
                            }
                            // Optional: Close the dropdown when clicking outside
                            window.addEventListener('click', function(e) {
                                const button = document.getElementById('mobileProfileButton');
                                const menu = document.getElementById('mobileDropdownMenu');
                                if (button && menu && !button.contains(e.target) && !menu.contains(e.target)) {
                                    menu.classList.add('hidden');
                                }
                            });
                        </script>
                    @else
                        <a href="{{ route('login') }}" onclick="closeMobileMenu()">
                            <button
                                class="bg-[#145D76] font-semibold text-white text-center uppercase transition-all duration-700 ease-in-out rounded-lg px-5 py-3 w-full">
                                Log In
                            </button>
                        </a>
                    @endif
                </li>

            </ul>
        </nav>
    </div>

</div>

@push('scripts')
    <script>
        // header dropdown effect 
        function updateHeaderBg() {
            const header = document.getElementById('main-header');
            if (!header) return;
            if (window.scrollY > 50) {
                header.classList.remove('bg-transparent');
                header.classList.add('bg-[#145D76]'); // Change 'bg-white' to your original background color class
            } else {
                header.classList.remove('bg-[#145D76]');
                header.classList.add('bg-transparent');
            }
        }
        window.addEventListener('scroll', updateHeaderBg);
        window.addEventListener('DOMContentLoaded', updateHeaderBg);


        // Mobile Menu 
        // Function to open the mobile menu
        function openMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.style.transform = 'translateX(100%)';
        }

        // Function to close the mobile menu
        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.style.transform = 'translateX(-100%)';
        }

        // Optional: Close the menu when clicking outside of it
        document.addEventListener('click', (event) => {
            const mobileMenu = document.getElementById('mobile-menu');
            if (!mobileMenu.contains(event.target) && mobileMenu.style.transform === 'translateX(0)') {
                closeMobileMenu();
            }
        });
    </script>
@endpush
