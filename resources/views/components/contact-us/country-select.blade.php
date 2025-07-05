<!-- Select Country with Search & Dropdown -->
<div id="country-select" class="flex flex-col  mb-6 relative">
    <label for="countrySearch" class="block text-white font-bold mb-2">Select Country</label>
    <input type="text" id="countrySearch" name="country" value="{{ $oldCountryValue ?? '' }}"
        class="p-2 border rounded mb-2 bg-white" placeholder="Search country..." onkeyup="filterCountries()">
    <div id="dropdown"
        class="absolute top-full left-0 w-full bg-white border rounded shadow-md hidden max-h-48 overflow-auto z-50">
        <ul id="countryList"></ul>
    </div>
</div>

<script>
    let countries = [];

    async function fetchCountries() {
        try {
            const response = await fetch("https://restcountries.com/v3.1/all");
            const data = await response.json();
            countries = data.map(country => country.name.common).sort();
        } catch (error) {
            console.error("Error fetching country list:", error);
        }
    }

    async function filterCountries() {
        const input = document.getElementById("countrySearch").value.toLowerCase();
        const dropdown = document.getElementById("dropdown");
        const countryList = document.getElementById("countryList");
        countryList.innerHTML = "";

        if (input === "") {
            dropdown.classList.add("hidden");
            return;
        }

        const filteredCountries = countries.filter(country => country.toLowerCase().includes(input));

        if (filteredCountries.length > 0) {
            dropdown.classList.remove("hidden");
            filteredCountries.forEach(country => {
                const li = document.createElement("li");
                li.classList.add("p-2", "cursor-pointer", "hover:bg-gray-200");
                li.textContent = country;
                li.onclick = () => {
                    document.getElementById("countrySearch").value = country;
                    dropdown.classList.add("hidden");
                };
                countryList.appendChild(li);
            });
        } else {
            dropdown.classList.add("hidden");
        }
    }

    document.addEventListener("click", (event) => {
        if (!document.getElementById("countrySearch").contains(event.target)) {
            document.getElementById("dropdown").classList.add("hidden");
        }
    });

    // Fetch countries on page load
    fetchCountries();
</script>
