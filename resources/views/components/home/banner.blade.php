<div class="relative mt-[-100px] bg-[#F6F6F7] bg-cover bg-center font-[Poppins] overflow-visible"
    style="background-image: url('/assets/banner/home_banner.webp')">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-black/60 to-black/40"></div>

    <div class="min-h-screen flex items-center justify-center px-5 py-24 pt-48 relative z-10">
        <div class="w-full max-w-4xl mx-auto flex flex-col items-center text-center gap-8">

            <!-- Heading (UNCHANGED TEXT) -->
            <div class="text-white animate-slideUpDown">
                <h1 class="text-3xl  sm:text-4xl md:text-3xl lg:text-4xl font-extrabold leading-tight drop-shadow-2xl">
                    Searching for Top <br class="hidden md:block" /> Exhibition Stand Builders?
                </h1>
                <p class="text-base md:text-[17px] mt-4 text-white/90 max-w-2xl font-light">
                    Get custom proposals right away from proven and verified suppliers worldwide.
                </p>
            </div>

            <!-- Badges -->
            <div class="flex justify-center gap-4 animate-fadeIn" style="animation-delay: 0.4s">

                <div
                    class="flex items-center gap-3 bg-white/10 backdrop-blur-lg border border-white/20 px-4 py-2 rounded-full shadow-md">
                    <div class="bg-[#176B87] w-8 h-8 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-[11px] text-white"></i>
                    </div>
                    <span class="text-xs md:text-sm font-medium text-white">500+ Verified Builders</span>
                </div>

                <div
                    class="flex items-center gap-3 bg-white/10 backdrop-blur-lg border border-white/20 px-4 py-2 rounded-full shadow-md">
                    <div class="bg-yellow-500 w-8 h-8 rounded-full flex items-center justify-center">
                        <i class="fas fa-star text-[11px] text-white"></i>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="text-sm font-bold text-white">4.9</span>
                        <span class="text-xs text-white/70">(1k+ Reviews)</span>
                    </div>
                </div>

            </div>

            <!-- Search -->
            <div class="w-full max-w-xl relative z-[50]">
                <form class="animate-fadeIn relative" style="animation-delay: 0.2s" method="GET"
                    onsubmit="return redirectToCityOrCountry(event)">

                    <div class="relative group">
                        <!-- Glass Container -->
                        <div
                            class="flex items-center bg-white/95 backdrop-blur-xl rounded-full shadow-[0_15px_40px_rgba(0,0,0,0.35)] border border-white/40 overflow-hidden transition-all group-focus-within:ring-4 group-focus-within:ring-[#176B87]/40">

                            <!-- Icon -->
                            <div class="pl-5 pr-2 text-gray-400">
                                <i class="fas fa-search text-sm"></i>
                            </div>

                            <!-- Input -->
                            <input type="text" id="default-search" name="query"
                                class="w-full h-[3.4rem] md:h-[3.8rem] text-sm md:text-base text-gray-800 bg-transparent outline-none pr-4"
                                placeholder="Search city (e.g. Dubai, Berlin)" required
                                onkeyup="showSuggestions(this.value)" onfocus="showSuggestions(this.value)"
                                autocomplete="off" onblur="handelOnSearchBlur()" />

                            <!-- Button -->
                            <button type="submit"
                                class="mr-2 px-6 h-[2.6rem] md:h-[3rem] bg-[#176B87] hover:bg-[#0f4c5c] text-white text-sm md:text-base rounded-full flex items-center justify-center transition-all shadow-md">
                                Search
                            </button>
                        </div>
                    </div>

                    <!-- Suggestions -->
                    <ul id="suggestion-box"
                        class="absolute left-0 right-0 top-[110%] w-full bg-white border border-gray-200 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.3)] z-[9999] 
                        max-h-64 overflow-y-auto hidden divide-y divide-gray-100">
                    </ul>
                </form>
            </div>

        </div>
    </div>

    <style>
        .min-h-screen {
            min-height: 100vh;
            min-height: -webkit-fill-available;
        }

        @keyframes slideUpDown {
            0% {
                transform: translateY(30px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(15px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slideUpDown {
            animation: slideUpDown 0.8s ease-out forwards;
        }

        .animate-fadeIn {
            opacity: 0;
            animation: fadeIn 0.8s ease-out forwards;
        }

        #suggestion-box::-webkit-scrollbar {
            width: 6px;
        }

        #suggestion-box::-webkit-scrollbar-thumb {
            background: #176B87;
            border-radius: 10px;
        }

        #suggestion-box {
            margin-top: 8px;
        }
    </style>

    @push('scripts')
        <script>
            let cities = [];
            const suggestionBox = document.getElementById("suggestion-box");
            const searchInput = document.getElementById("default-search");

            const fetchCities = async () => {
                try {
                    const response = await fetch('{{ route('api.search') }}');
                    cities = await response.json();
                } catch (error) {
                    console.error("Error fetching cities:", error);
                }
            };
            fetchCities();

            function showSuggestions(value) {
                suggestionBox.innerHTML = '';

                let matches = value ?
                    cities.filter(city => city?.city?.toLowerCase()?.includes(value.toLowerCase())) :
                    cities;

                if (matches.length > 0) {
                    suggestionBox.classList.remove('hidden');
                    matches.forEach(city => {
                        let li = document.createElement('li');
                        li.className = "p-4 hover:bg-gray-100 cursor-pointer flex items-center gap-3 transition-all";
                        li.innerHTML = `<i class="fas fa-map-marker-alt text-[#176B87] text-sm"></i>
                                       <span class="text-gray-900 font-semibold text-sm">${city.city}</span>`;

                        li.addEventListener("mousedown", (e) => {
                            e.preventDefault();
                            searchInput.value = city.city;
                            window.location.href = `/city/${city.slug}`;
                        });
                        suggestionBox.appendChild(li);
                    });
                } else {
                    suggestionBox.classList.add('hidden');
                }
            }

            function handelOnSearchBlur() {
                setTimeout(() => {
                    suggestionBox.classList.add('hidden');
                }, 250);
            }

            function redirectToCityOrCountry(event) {
                event.preventDefault();
                let query = searchInput.value.trim().toLowerCase();
                let matchedCity = cities.find(city => city.city.toLowerCase() === query);
                if (matchedCity) {
                    window.location.href = `/city/${matchedCity.slug}`;
                }
                return false;
            }
        </script>
    @endpush
</div>
