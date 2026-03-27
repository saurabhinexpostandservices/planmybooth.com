<div id="main-header" class="w-full font-poppins transition-all duration-300" aria-label="navbar-top">
    <div class="bg-[#145D76] border-b border-white/10 text-white w-full p-2 shadow-xl">
        <div class="max-w-[1440px] mx-auto flex items-center justify-between md:grid md:grid-cols-7">

            <div class="flex items-center pl-5 md:col-span-1">
                <a href="/" class="transition-transform duration-300 hover:scale-105 active:scale-95 block">
                    <img src="{{ asset('./assets/images/logo.svg') }}" alt="planmybooth-header-logo" width="110"
                        height="100" class="drop-shadow-md" />
                </a>
            </div>

            <div class="hidden md:flex justify-center items-center col-span-4">
                <ul class="flex justify-center items-center gap-3 lg:gap-6">
                    <li class="group">
                        <a href="mailto:enquiry@planmybooth.com"
                            class="flex gap-3 items-center px-4 py-2 rounded-full hover:bg-white/10 transition-all duration-300">
                            <div class="bg-white/20 p-2 rounded-full group-hover:bg-[#64CCC5] transition-colors">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <span class="text-[14px] font-medium tracking-wide">enquiry@planmybooth.com</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('register') }}" id="create-account"
                            class="relative overflow-hidden group bg-white px-6 py-2.5 rounded-xl transition-all duration-500 shadow-[0_4px_15px_rgba(255,255,255,0.2)] hover:shadow-[0_8px_25px_rgba(100,204,197,0.4)]">
                            <span
                                class="relative z-10 font-bold  text-[13px] uppercase tracking-wider text-[#145D76] transition-colors duration-300">
                                Get A Free Quote
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex items-center justify-end gap-2 pr-4 md:col-span-2">

                <nav role="navigation" class="hidden md:flex items-center">
                    @if (Auth::check())
                        <div class="relative inline-block text-left">
                            <button onclick="toggleDropdown()" id="profileButton"
                                class="group flex items-center gap-3 px-2 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 transition-all shadow-inner">
                                <div
                                    class="w-9 h-9 rounded-full bg-gradient-to-tr from-[#64CCC5] to-[#4facfe] flex items-center justify-center text-sm font-bold text-white shadow-lg group-hover:ring-2 ring-white/50 transition-all">
                                    {{ strtoupper(Auth::user()->name[0]) }}
                                </div>
                                <span
                                    class="hidden lg:block text-xs font-bold uppercase tracking-widest opacity-80 group-hover:opacity-100">Profile</span>
                                <svg class="w-4 h-4 text-white/70 group-hover:translate-y-0.5 transition-transform"
                                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div id="dropdownMenu"
                                class="hidden absolute right-0 mt-3 w-56 bg-white rounded-2xl shadow-[0_10px_40px_rgba(0,0,0,0.2)] py-3 z-50 ring-1 ring-black/5 animate-in fade-in zoom-in duration-200">
                                <div class="px-4 py-2 mb-2 border-b border-gray-50">
                                    <p class="text-[10px] uppercase font-black text-gray-400 tracking-widest">Dashboard</p>
                                </div>
                                <a href="{{ route('profile.request') }}"
                                    class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-[#F0F7F9] hover:text-[#145D76] transition-all group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center mr-3 group-hover:bg-white shadow-sm">
                                        <i class="fas fa-list-ul text-[#145D76]/70"></i>
                                    </div>
                                    <span class="font-semibold">My Requests</span>
                                </a>
                                <a href="{{ route('profile') }}"
                                    class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-[#F0F7F9] hover:text-[#145D76] transition-all group">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center mr-3 group-hover:bg-white shadow-sm">
                                        <i class="fas fa-user-circle text-[#145D76]/70"></i>
                                    </div>
                                    <span class="font-semibold">My Profile</span>
                                </a>
                                <div class="mx-4 my-2 border-t border-gray-100"></div>
                                <a href="{{ route('auth.logout') }}"
                                    class="flex items-center px-4 py-2.5 text-sm text-red-500 hover:bg-red-50 transition-all font-bold">
                                    <i class="fas fa-sign-out-alt mr-3 ml-1"></i> Logout
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center bg-black/10 rounded-xl p-1 border border-white/10">
                            <a href="https://account.planmybooth.com/auth/login"
                                class="px-4 py-1.5 text-[11px] font-black uppercase tracking-widest hover:text-[#64CCC5] transition-colors">Stand
                                Builder</a>
                            <div class="w-[1px] h-4 bg-white/20 mx-1"></div>
                            <a href="{{ route('login') }}"
                                class="px-4 py-1.5 text-[11px] font-black uppercase tracking-widest hover:text-[#64CCC5] transition-colors">Exhibitors</a>
                        </div>
                    @endif
                </nav>

                <a class="p-2 bg-green-500 rounded-full hover:bg-green-400 hover:rotate-[360deg] hover:scale-110 transition-all duration-500 shadow-lg shrink-0"
                    rel="nofollow" href="https://api.whatsapp.com/send?phone=48790896679">
                    <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/whatsapp-white-icon.png"
                        alt="whatsapp" width="20" height="20">
                </a>

                <button class="md:hidden p-2 text-white transition-transform active:scale-75"
                    onclick="openMobileMenu()">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu"
        class="fixed inset-0 h-screen w-full bg-white z-[100] transform -translate-x-full transition-transform duration-500 ease-in-out">
        <div class="flex items-center justify-between bg-[#145D76] h-[85px] px-6 shadow-2xl">
            <img src="{{ asset('./assets/images/logo.svg') }}" alt="logo" width="100" />
            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 text-white text-3xl"
                onclick="closeMobileMenu()">&times;</button>
        </div>

        <nav class="p-8 h-full bg-gradient-to-b from-white to-gray-50 overflow-y-auto">
            <ul class="flex flex-col gap-4">
                @php
                    $navItems = [
                        ['Home', '/'],
                        ['Custom Exhibition Stand', route('stand-builders')],
                        ['Trade Shows', route('shows')],
                        ['Blogs', route('blogs')],
                        ['Vendor Registration', route('vendor-registration')],
                    ];
                @endphp

                @foreach($navItems as $item)
                    <li>
                        <a href="{{ $item[1] }}"
                            class="group flex items-center justify-between py-4 border-b border-gray-100"
                            onclick="closeMobileMenu()">
                            <span
                                class="text-lg font-bold text-gray-800 group-hover:text-[#145D76] transition-colors">{{ $item[0] }}</span>
                            <i
                                class="fas fa-chevron-right text-xs text-gray-300 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </li>
                @endforeach

                <li class="mt-8">
                    @if (Auth::check())
                        <div class="bg-white rounded-3xl p-6 shadow-[0_15px_50px_rgba(0,0,0,0.1)] border border-gray-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#145D76] to-[#64CCC5] flex items-center justify-center text-white text-xl font-black">
                                    {{ strtoupper(Auth::user()->name[0]) }}
                                </div>
                                <div>
                                    <p class="text-xs font-black text-[#64CCC5] uppercase tracking-widest">Welcome back</p>
                                    <p class="text-xl font-bold text-gray-900">{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <a href="{{ route('profile.request') }}"
                                    class="bg-gray-50 p-4 rounded-2xl text-center text-sm font-bold text-gray-700">Requests</a>
                                <a href="{{ route('profile') }}"
                                    class="bg-gray-50 p-4 rounded-2xl text-center text-sm font-bold text-gray-700">Profile</a>
                                <a href="{{ route('auth.logout') }}"
                                    class="col-span-2 bg-red-50 p-4 rounded-2xl text-center text-sm font-black text-red-500 uppercase tracking-widest">Logout</a>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col gap-4">
                            <a href="{{ route('login') }}"
                                class="w-full bg-[#145D76] text-white text-center py-5 rounded-2xl font-black uppercase tracking-[2px] shadow-xl active:scale-95 transition-transform">
                                Exhibitor Login
                            </a>
                            <a href="https://account.planmybooth.com/auth/login"
                                class="w-full border-2 border-dashed border-[#145D76] text-[#145D76] text-center py-4 rounded-2xl font-bold uppercase tracking-wider">
                                Vendor Access
                            </a>
                        </div>
                    @endif
                </li>
            </ul>
        </nav>
    </div>
</div>

@push('scripts')
    <script>
        function toggleDropdown() {
            const menu = document.getElementById('dropdownMenu');
            menu.classList.toggle('hidden');
        }

        window.addEventListener('click', function (e) {
            const btn = document.getElementById('profileButton');
            const menu = document.getElementById('dropdownMenu');
            if (btn && !btn.contains(e.target) && menu && !menu.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });

        function openMobileMenu() {
            document.getElementById('mobile-menu').classList.remove('-translate-x-full');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            document.getElementById('mobile-menu').classList.add('-translate-x-full');
            document.body.style.overflow = 'auto';
        }
    </script>
@endpush