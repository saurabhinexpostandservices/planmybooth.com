<form id="regForm" class="w-full max-w-xl mx-auto bg-[#363F52] text-white p-6 shadow-md rounded-md font-lato"
    action="">
    <h1 class="text-xl font-bold text-center mb-4">Request for Free Design and Booth Construction</h1>

    <!-- Tabs -->

    {{-- step-1 --}}
    <div class="tab hidden">
        <h2 class="text-lg font-semibold mb-5 text-red-500 uppercase">Project Info</h2>
        <div class="flex flex-col gap-3">
            <label for="exhibitionName">
                Exhibition Name <span class="text-red-500 font-bold">*</span>
                <input id="exhibitionName" name="event_name" type="text" required
                    class="w-full p-2 border placeholder:text-black text-black bg-white border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"
                    placeholder="Exhibition Name..."
                 />
            </label>
            <label for="cityDropdown">
                Select City <span class="text-red-500 font-bold">*</span>
                <select id="cityDropdown" name="city" required
                    class="w-full p-2 border text-black placeholder:text-gray-300 border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
                    <option value="" disabled selected>Choose a City...</option>
                </select>
            </label>
        </div>
    </div>

    {{-- Step-2 --}}
    <div class="tab hidden">
        <h2 class="text-lg font-medium mb-3 text-red-500 uppercase"> Size & Budget Info</h2>
        <div class="space-y-3">
            <label for="standSize"> Stand Size <span class="text-red-500 font-bold">*</span>
                <div class="flex items-center gap-2">
                    <input id="standSize" name="standSize" type="number" required
                        class="w-3/4 p-2 border text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"
                        placeholder="Stand Size..." />
                    <select id="standSizeUnit" name="standSizeUnit"
                        class="w-1/4 p-2 border text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="SQMT">SQMT</option>
                        <option value="SQFT">SQFT</option>
                    </select>
                </div>
            </label>
            <label for="budget">Budget
                <div class="flex items-center gap-2">
                    <input id="budget" name="budget" type="number"
                        class="w-3/4 p-2 border text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"
                        placeholder="Budget (if any)..." />
                    <select id="currency" name="currency"
                        class="w-1/4 p-2 border text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="USD">Dollar ($)</option>
                        <option value="EUR">Euro (€)</option>
                        <option value="AED">AED (AED)</option>
                    </select>
                </div>
            </label>
            <label for="fileUpload">Upload File
                <input id="fileUpload" name="fileUpload" type="file"
                    class="w-full p-2 border bg-white text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" />
            </label>
            <label for="message">Message
                <textarea id="message" name="message" rows="4"
                    class="w-full p-2 border text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"
                    placeholder="Your message..."></textarea>
            </label>
        </div>
    </div>

    {{-- Step-3 --}}
    <div class="tab hidden">
        <h2 class="text-lg font-medium mb-3 text-red-500 uppercase">Contact Details</h2>
        <div class="space-y-3">
            <label for="contactName"> Contact Name <span class="text-red-500 font-bold">*</span>
                <input id="contactName" name="contactName" type="text" required
                    class="w-full p-2 border text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"
                    placeholder="Contact Name..." />
            </label>
            <label for="email"> Email ID <span class="text-red-500 font-bold">*</span>
                <input id="email" name="email" type="email" required
                    class="w-full p-2 border text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"
                    placeholder="Email ID..." />
            </label>
            <label for="phone"> Phone No <span class="text-red-500 font-bold">*</span>
                <input id="phone" name="phone" type="tel" required
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"
                    placeholder="Phone No..." />
            </label>
            <label for="companyName"> Company Name <span class="text-red-500 font-bold">*</span>
                <input id="companyName" name="companyName" type="text" required
                    class="w-full p-2 border text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"
                    placeholder="Company Name..." />
            </label>
            <label for="companyWebsite"> Company Website <span class="text-red-500 font-bold">*</span>
                <input id="companyWebsite" name="companyWebsite" type="url" required
                    class="w-full p-2 border text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"
                    placeholder="Company Website..." />
            </label>
            <label for="country"> Your Country <span class="text-red-500 font-bold">*</span>
                <select id="country" name="country" required
                    class="w-full p-2 border text-black border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
                    <option value="" disabled selected>Select your country...</option>
                    <option value="USA">United States</option>
                    <option value="CAN">Canada</option>
                    <option value="GBR">United Kingdom</option>
                    <option value="AUS">Australia</option>
                    <option value="IND">India</option>
                    <option value="CHN">China</option>
                    <option value="DEU">Germany</option>
                    <option value="FRA">France</option>
                    <option value="BRA">Brazil</option>
                    <option value="ZAF">South Africa</option>
                    <option value="UAE">United Arab Emirates</option>
                    <option value="Other">Other</option>
                </select>
            </label>
        </div>
    </div>


    <!-- Navigation Buttons -->
    <div class="flex justify-end mt-4">
        <button type="button" id="prevBtn" class="bg-gray-200 text-gray-600 px-4 py-2 rounded-md hidden"
            onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" class="bg-red-500 text-white px-6 py-2 rounded-md ml-2"
            onclick="nextPrev(1)">Next</button>
    </div>

    <!-- Circles for steps -->
    {{-- <div class="flex justify-center space-x-2 mt-6">
        <span class="step w-3 h-3 bg-gray-300 rounded-full"></span>
        <span class="step w-3 h-3 bg-gray-300 rounded-full"></span>
        <span class="step w-3 h-3 bg-gray-300 rounded-full"></span>
    </div> --}}
</form>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Populate city dropdown
        const cities = [{
                code: 'NY',
                name: 'New York'
            },
            {
                code: 'LA',
                name: 'Los Angeles'
            },
            {
                code: 'CHI',
                name: 'Chicago'
            },
            {
                code: 'HOU',
                name: 'Houston'
            },
            {
                code: 'PHX',
                name: 'Phoenix'
            },
            {
                code: 'SF',
                name: 'San Francisco'
            },
            {
                code: 'DC',
                name: 'Washington D.C.'
            },
            {
                code: 'BOS',
                name: 'Boston'
            },
            {
                code: 'MIAMI',
                name: 'Miami'
            },
            {
                code: 'DALLAS',
                name: 'Dallas'
            },
            {
                code: 'MEX',
                name: 'Mexico City'
            },
            {
                code: 'LON',
                name: 'London'
            },
            {
                code: 'PAR',
                name: 'Paris'
            },
            {
                code: 'BER',
                name: 'Berlin'
            },
            {
                code: 'ROM',
                name: 'Rome'
            },
            {
                code: 'TOKYO',
                name: 'Tokyo'
            },
            {
                code: 'SEOUL',
                name: 'Seoul'
            },
            {
                code: 'SYD',
                name: 'Sydney'
            },
            {
                code: 'BKK',
                name: 'Bangkok'
            },
            {
                code: 'DEL',
                name: 'Delhi'
            },
            {
                code: 'HKG',
                name: 'Hong Kong'
            },
            {
                code: 'SHANGHAI',
                name: 'Shanghai'
            },
            {
                code: 'SING',
                name: 'Singapore'
            },
            {
                code: 'IST',
                name: 'Istanbul'
            },
            {
                code: 'MUM',
                name: 'Mumbai'
            },
            {
                code: 'MELB',
                name: 'Melbourne'
            },
            {
                code: 'RIO',
                name: 'Rio de Janeiro'
            },
            {
                code: 'SAO',
                name: 'São Paulo'
            },
            {
                code: 'BANGALORE',
                name: 'Bangalore'
            },
            {
                code: 'CPT',
                name: 'Cape Town'
            },
            {
                code: 'LAGOS',
                name: 'Lagos'
            },
            {
                code: 'Cairo',
                name: 'Cairo'
            },
            {
                code: 'KAR',
                name: 'Karachi'
            },
            {
                code: 'LIS',
                name: 'Lisbon'
            },
            {
                code: 'KUALA',
                name: 'Kuala Lumpur'
            },
            {
                code: 'ZAGREB',
                name: 'Zagreb'
            },
            {
                code: 'VANCOUVER',
                name: 'Vancouver'
            },
            {
                code: 'TORONTO',
                name: 'Toronto'
            },
            {
                code: 'BUDAPEST',
                name: 'Budapest'
            },
            {
                code: 'MONTREAL',
                name: 'Montreal'
            },
            {
                code: 'ABU',
                name: 'Abu Dhabi'
            },
            {
                code: 'DUBAI',
                name: 'Dubai'
            },
            {
                code: 'CAPE',
                name: 'Cape Town'
            },
            {
                code: 'LAG',
                name: 'Lagos'
            },
            {
                code: 'SANTIAGO',
                name: 'Santiago'
            }
        ];
        const cityDropdown = document.getElementById("cityDropdown");
        const fragment = document.createDocumentFragment();

        cities.forEach(city => {
            const option = document.createElement("option");
            option.value = city.code;
            option.textContent = city.name;
            fragment.appendChild(option);
        });

        cityDropdown.appendChild(fragment);

        // Form navigation
        let currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            const tabs = document.querySelectorAll(".tab");
            tabs.forEach(tab => (tab.style.display = "none"));
            tabs[n].style.display = "block";
            document.getElementById("prevBtn").style.display = n === 0 ? "none" : "inline";
            document.getElementById("nextBtn").textContent = n === tabs.length - 1 ? "Submit" : "Next";
        }

        function validateForm() {
            const inputs = document.querySelectorAll(".tab")[currentTab].querySelectorAll(
                "input, select, textarea");
            let valid = true;
            inputs.forEach(input => {
                if (!input.checkValidity()) {
                    input.classList.add("border-red-500");
                    valid = false;
                } else {
                    input.classList.remove("border-red-500");
                }
            });
            return valid;
        }

        window.nextPrev = function(n) {
            if (n === 1 && !validateForm()) return false;
            const tabs = document.querySelectorAll(".tab");
            tabs[currentTab].style.display = "none";
            currentTab += n;
            if (currentTab >= tabs.length) {
                document.getElementById("regForm").submit();
                return false;
            }
            showTab(currentTab);
        };
    });
</script>
