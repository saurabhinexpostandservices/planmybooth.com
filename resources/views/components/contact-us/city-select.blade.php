<!-- Select City with Search & Dropdown -->
<div id="city-select" class="flex flex-col mb-2 relative">
    <label for="citySearch" class="block text-white font-bold mb-2">Select City </label>
    <input type="text" id="citySearch" name="city" value="{{ $oldCityValue ?? '' }}" class="p-2 border rounded mb-2 bg-white"
        placeholder="Search city..." onkeyup="fetchcities2()">
    <div id="cityDropdown"
        class="absolute top-full left-0 w-full bg-white border rounded shadow-md hidden max-h-48 overflow-auto">
        <ul id="cityList"></ul>
    </div>
</div>

<script>
    const cities2 = [
        // Major cities2 from your original list
        "New York", "Los Angeles", "Chicago", "Houston", "Phoenix", "London", "Paris", "Berlin", "Tokyo", "Beijing",
        "Mumbai", "Shanghai", "Delhi", "São Paulo", "Moscow", "Cairo", "Bangkok", "Istanbul", "Dubai", "Sydney",
        "Mexico City", "Toronto", "Buenos Aires", "Jakarta", "Seoul", "Lagos", "Madrid", "Rome", "Kuala Lumpur",
        "Hong Kong", "Singapore", "Johannesburg", "Lima", "Bogotá", "Rio de Janeiro", "Santiago", "Casablanca",
        "Abu Dhabi", "Manila", "Tehran", "Vienna", "Copenhagen", "Dublin", "Oslo", "Stockholm", "Helsinki",
        "Warsaw", "Budapest", "Prague", "Brussels", "Zurich", "Geneva", "Athens", "Lisbon", "Bucharest",
        "Belgrade", "Bratislava", "Ljubljana", "Tallinn", "Riga", "Vilnius", "Havana", "Caracas", "Quito",
        "La Paz", "Asunción", "Montevideo", "San José", "Panama City", "Kingston", "Port-au-Prince", "Nairobi",
        "Addis Ababa", "Accra", "Kampala", "Dar es Salaam", "Kigali", "Dakar", "Lusaka", "Harare", "Yaoundé",
        "Antananarivo", "Baghdad", "Riyadh", "Kuwait City", "Muscat", "Doha", "Amman", "Baku", "Tbilisi",
        "Yerevan", "Ashgabat", "Tashkent", "Almaty", "Astana", "Ulaanbaatar", "Hanoi", "Ho Chi Minh City",
        "Phnom Penh", "Vientiane", "Dhaka", "Colombo", "Kathmandu", "Islamabad", "Lahore", "Karachi",
        "Rangoon", "Port Moresby",

        // Additional major cities2 from the specified countries
        "Frankfurt", "Cologne", "Stuttgart", "Düsseldorf", "Leipzig", "Marseille", "Nice", "Toulouse",
        "Naples", "Turin", "Florence", "Bologna", "Bern", "Basel", "Lugano", "Rotterdam", "The Hague",
        "Seville", "Valencia", "Bilbao", "Antwerp", "Ghent", "Brasilia", "Salvador", "Fortaleza",
        "Bangalore", "Chennai", "Kolkata", "Saint Petersburg", "Busan", "Incheon", "Mecca", "Medina",
        "Ankara", "Izmir", "Bursa", "Melbourne", "Brisbane", "Perth", "Vancouver", "Montreal",
        "Chiang Mai", "Pattaya",

        // More important cities2 worldwide
        "San Francisco", "Miami", "Boston", "Washington D.C.", "Philadelphia", "Dallas", "Atlanta", "Seattle",
        "Barcelona", "Munich", "Hamburg", "Lyon", "Bordeaux", "Venice", "Verona", "Edinburgh", "Glasgow",
        "Manchester", "Birmingham", "Liverpool", "Zurich", "Geneva", "Helsinki", "Stockholm", "Osaka",
        "Nagoya", "Kyoto", "Fukuoka", "Shenzhen", "Guangzhou", "Chengdu", "Wuhan", "Xi'an", "Hangzhou",
        "Nanjing", "Shenyang", "Tianjin", "Taipei", "Tel Aviv", "Jerusalem", "Cape Town", "Durban",
        "Pretoria", "Marrakech", "Alexandria", "Giza", "Lahore", "Multan", "Peshawar", "Rawalpindi",
        "Hyderabad (India)", "Hyderabad (Pakistan)", "Pune", "Ahmedabad", "Surat", "Guwahati",
        "Kanpur", "Lucknow", "Patna", "Coimbatore", "Madurai", "Kochi", "Visakhapatnam", "Bhubaneswar",
        "Varanasi", "Nagpur", "Indore", "Raipur", "Goa", "Thiruvananthapuram", "Vladivostok", "Kazan",
        "Yekaterinburg", "Novosibirsk", "Rostov-on-Don", "Samara", "Krasnoyarsk", "Irkutsk", "Sochi",
        "Dakar", "Freetown", "Banjul", "Bamako", "Ouagadougou", "Lome", "Yaoundé", "Kinshasa",
        "Luanda", "Windhoek", "Gaborone", "Maputo", "Porto", "Funchal", "Recife", "Curitiba",
        "Manaus", "Belém", "Goiânia", "Campinas", "Natal", "João Pessoa", "San Diego", "Phoenix",
        "Las Vegas", "New Orleans", "Detroit", "St. Louis", "Minneapolis", "Denver", "Salt Lake City",
        "Calgary", "Edmonton", "Ottawa", "Quebec City", "Winnipeg", "Halifax", "Adelaide",
        "Hobart", "Canberra", "Gold Coast", "Sunshine Coast", "Wellington", "Auckland", "Christchurch"
    ];


    function fetchcities2() {
        const input = document.getElementById("citySearch").value.trim().toLowerCase();
        const dropdown = document.getElementById("cityDropdown");
        const cityList = document.getElementById("cityList");
        cityList.innerHTML = "";

        if (input.length < 2) { // Show results only when at least 2 characters are entered
            dropdown.classList.add("hidden");
            return;
        }

        const filteredcities2 = cities2.filter(city => city.toLowerCase().includes(input));

        if (filteredcities2.length > 0) {
            dropdown.classList.remove("hidden");
            filteredcities2.forEach(city => {
                const li = document.createElement("li");
                li.classList.add("p-2", "cursor-pointer", "hover:bg-gray-200");
                li.textContent = city;
                li.onclick = () => {
                    document.getElementById("citySearch").value = city;
                    dropdown.classList.add("hidden");
                };
                cityList.appendChild(li);
            });
        } else {
            dropdown.classList.add("hidden");
        }
    }

    // Hide dropdown when clicking outside
    document.addEventListener("click", (event) => {
        const searchInput = document.getElementById("citySearch");
        const dropdown = document.getElementById("cityDropdown");
        if (!searchInput.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add("hidden");
        }
    });
</script>
