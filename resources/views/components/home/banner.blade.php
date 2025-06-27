<div class="relative mt-[-80px] bg-[#F6F6F7] bg-cover bg-center font-poppins"
    style="background-image: url('/assets/banner/home_banner.webp')">
    <!-- Container for centering the text -->
    <div
        class="flex flex-col items-center justify-center gap-5 md:gap-10 min-h-120 md:min-h-160 text-center bg-[#176B87]/70 duration-300">
        <div class="text-white px-5">
            <h1 class="w-full md:w-[80%] mx-auto text-2xl md:text-3xl lg:text-4xl xl:text-5xl [text-shadow:4px_4px_black] font-serif font-bold">
                Searching for Top Exhibition Stand Builders ?
            </h1>
            <p class="text-xl md:text-2xl pt-5 text-white">
                Get proposals right away from proven and verified suppliers
            </p>
        </div>

        <!-- Search Form -->
        <form class="max-w-md mx-auto" method="GET" onsubmit="return redirectToCityOrCountry(event)">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative flex justify-center">
                <div
                    class="absolute top-1 md:top-2 left-0 text-xl flex justify-center items-center p-3 pointer-events-none">
                    <i class="fas fa-location-dot w-4 h-10 text-gray-500 dark:text-gray-400"></i>
                </div>

                <!-- Search Input -->
                <input type="text" id="default-search" name="query"
                    class="shadow-lg shadow-black hover:shadow-lg hover:shadow-white duration-500 block md:w-[25rem] w-[15rem] py-4 md:py-5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search city" required onkeyup="showSuggestions(this.value)" autocomplete="off"
                    onblur="handelOnSearchBlur()" />

                <!-- Dropdown List -->
                <ul id="suggestion-box"
                    class="absolute top-full left-0 w-full bg-white border border-gray-300 rounded-md shadow-lg z-50  max-h-48 overflow-auto px-3 hidden">
                </ul>

                <button type="submit"
                    class="absolute w-10 h-10 md:w-14 md:h-14 border-none cursor-pointer text-white rounded-[74%] bg-[#748C92] transition-all ease-in-out duration-300 hover:text-white top-2 md:top-1 end-1 font-medium text-sm ">
                    <li
                        class="fas fa-search-location w-2 h-2 md:w-6 md:h-6 text-3xl absolute top-1 md:top-3 right-6 md:right-4">
                    </li>
                </button>
            </div>
        </form>

    </div>



    {{-- @push('scripts')
        <script>
            let cities = [];
            const suggestionBox = document.getElementById("suggestion-box");
            const searchInput = document.getElementById("default-search");

            const fetchCities = async () => {
                try {
                    const res = await fetch("{{ route('api.get-cities') }}").then(res => res.json());
                    cities = res;
                } catch (error) {
                    console.error("Error fetching cities:", error);
                }
            };
            fetchCities();

            function showSuggestions(value) {
                suggestionBox.classList.remove('hidden');
                suggestionBox.innerHTML = ''; // Clear previous suggestions

                if (!value) {
                    suggestionBox.classList.add('hidden');
                    return;
                }

                let matches = cities.filter(city => city?.city?.toLowerCase()?.includes(value.toLowerCase()));

                if (matches.length > 0) {
                    matches.forEach(city => {
                        let li = document.createElement('li');
                        li.classList.add("py-2", "px-3", "hover:bg-gray-300", "cursor-pointer");

                        let a = document.createElement('a');
                        a.href = `/${city.slug}`;
                        a.innerText = city.city;
                        li.append(a);
                        li.addEventListener("click", function() {
                            searchInput.value = city.city;
                            window.location.href = `/${city.slug}`;
                        });

                        suggestionBox.append(li);
                    });
                } else {
                    suggestionBox.classList.add('hidden');
                }
            }

            function handelOnSearchBlur() {
                setTimeout(() => {
                    suggestionBox.classList.add('hidden');
                }, 200);
            }

            function redirectToCityOrCountry(event) {
                event.preventDefault();
                let query = searchInput.value.trim().toLowerCase();

                let matchedCity = cities.find(city => city.city.toLowerCase() === query);
                if (matchedCity) {
                    window.location.href = `/${matchedCity.slug}`;
                } else {
                    alert("City or country not found!"); // You can change this to a fallback page
                }
                return false;
            }
        </script>
    @endpush --}}
</div>
