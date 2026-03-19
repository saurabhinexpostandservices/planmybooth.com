<div class="relative mt-[-80px] bg-[#F6F6F7] bg-cover bg-center font-[Poppins] overflow-hidden"
    style="background-image: url('/assets/banner/home_banner.webp')">

    <div class="min-h-screen flex items-center 
        bg-gradient-to-b md:bg-gradient-to-r from-black/85 via-black/60 to-transparent px-5 py-24">

        <div class="w-full max-w-6xl mx-auto flex flex-col gap-8">

            <div class="text-white text-center md:text-left animate-slideUpDown">
                <h1 class="text-3xl sm:text-4xl md:text-3xl lg:text-4xl font-extrabold leading-tight drop-shadow-2xl">
                    Searching for Top <br class="hidden md:block"/> Exhibition Stand Builders?
                </h1>
                <p class="text-base md:text-xl mt-4 text-white/90 max-w-2xl mx-auto md:mx-0 font-light">
                    Get custom proposals right away from proven and verified suppliers worldwide.
                </p>
            </div>

            <div class="flex flex-col items-center md:items-start gap-6">
                
                <div class="w-full max-w-lg relative z-[100]">
                    <form class="animate-fadeIn" style="animation-delay: 0.2s" method="GET" onsubmit="return redirectToCityOrCountry(event)">
                        <div class="relative group">
                            <input type="text" id="default-search" name="query"
                                class="shadow-2xl block w-full h-[3.4rem] md:h-[3.8rem] text-sm md:text-base text-gray-900 rounded-full bg-white
                                focus:ring-4 focus:ring-[#176B87]/50 outline-none px-6 pr-14 border-none transition-all shadow-black/40"
                                placeholder="Search city (e.g. Dubai, Berlin)" required onkeyup="showSuggestions(this.value)" autocomplete="off"
                                onblur="handelOnSearchBlur()" />

                            <button type="submit"
                                class="absolute w-10 h-10 md:w-12 md:h-12 bg-[#176B87] hover:bg-[#0f4c5c] text-white rounded-full top-1.5 right-1.5 flex items-center justify-center transition-all shadow-lg">
                                <i class="fas fa-search text-base"></i>
                            </button>
                        </div>

                        <ul id="suggestion-box"
                            class="absolute top-full mt-2 left-0 w-full bg-white border border-gray-100 rounded-2xl shadow-2xl z-[110] 
                            max-h-60 overflow-auto hidden divide-y divide-gray-100">
                        </ul>
                    </form>
                </div>

                <div class="flex flex-wrap justify-center md:justify-start gap-3 animate-fadeIn" style="animation-delay: 0.4s">
                    
                    <div class="flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 pl-1 pr-4 py-1 rounded-full shadow-lg">
                        <div class="bg-[#176B87] w-7 h-7 rounded-full flex items-center justify-center">
                            <i class="fas fa-check text-[10px] text-white"></i>
                        </div>
                        <span class="text-xs md:text-sm font-medium text-white whitespace-nowrap">500+ Verified Builders</span>
                    </div>

                    <div class="flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 pl-1 pr-4 py-1 rounded-full shadow-lg">
                        <div class="bg-yellow-500 w-7 h-7 rounded-full flex items-center justify-center">
                            <i class="fas fa-star text-[10px] text-white"></i>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs md:text-sm font-bold text-white leading-none">4.9/5</span>
                            <span class="text-[10px] md:text-xs text-white/70 font-medium whitespace-nowrap">(1k+ Reviews)</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        .min-h-screen { min-height: 100vh; min-height: -webkit-fill-available; }
        
        @keyframes slideUpDown {
            0% { transform: translateY(30px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(15px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-slideUpDown { animation: slideUpDown 0.8s ease-out forwards; }
        .animate-fadeIn { opacity: 0; animation: fadeIn 0.8s ease-out forwards; }

        #suggestion-box::-webkit-scrollbar { width: 4px; }
        #suggestion-box::-webkit-scrollbar-thumb { background: #176B87; border-radius: 10px; }
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
            if (!value) {
                suggestionBox.classList.add('hidden');
                return;
            }
            suggestionBox.innerHTML = '';
            let matches = cities.filter(city => city?.city?.toLowerCase()?.includes(value.toLowerCase()));

            if (matches.length > 0) {
                suggestionBox.classList.remove('hidden');
                matches.forEach(city => {
                    let li = document.createElement('li');
                    li.className = "p-3 hover:bg-gray-50 cursor-pointer flex items-center gap-3 transition-all";
                    li.innerHTML = `<i class="fas fa-map-marker-alt text-gray-400 text-xs"></i>
                                   <span class="text-gray-800 font-medium text-sm">${city.city}</span>`;
                    
                    li.addEventListener("mousedown", () => {
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
            setTimeout(() => { suggestionBox.classList.add('hidden'); }, 300);
        }

        function redirectToCityOrCountry(event) {
            event.preventDefault();
            let query = searchInput.value.trim().toLowerCase();
            let matchedCity = cities.find(city => city.city.toLowerCase() === query);
            if (matchedCity) {
                window.location.href = `/city/${matchedCity.slug}`;
            } else {
                alert("Location not found.");
            }
            return false;
        }
    </script>
    @endpush
</div>