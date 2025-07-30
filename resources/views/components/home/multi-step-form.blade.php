@push('styles')
    <style>
        .form-container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 30px;
            width: 100%;
            max-width: 80%;
            margin: 0 auto;
            margin-top: 20px;
            margin-bottom: 20px;
            overflow: hidden;
            /* Hide overflowing steps */
        }

        .form-step {
            display: none;
            /* Hidden by default */
        }

        .form-step.active {
            display: block;
            /* Show active step */
        }

        .progress-bar-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10%;
            position: relative;
            padding-bottom: 10px;
        }

        .progress-bar-container::before {
            content: '';
            position: absolute;
            height: 4px;
            width: 100%;
            background-color: #cce9f2;
            /* Lighter background for progress line */
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            z-index: 0;
        }

        .progress-step {
            width: 30px;
            height: 30px;
            background-color: #cce9f2;
            /* Lighter background for inactive step circles */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #4a5568;
            /* Darker text for inactive step circles */
            font-weight: 600;
            z-index: 1;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .progress-step.active {
            background-color: #145D76;
            /* Main blue from the image for active */
            color: #ffffff;
            transform: scale(1.1);
        }

        .progress-step.completed {
            background-color: #00a8e0;
            /* Slightly lighter blue for completed */
            color: #ffffff;
        }

        .progress-text {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 5px;
            font-size: 0.875rem;
            color: #145D76;
            white-space: nowrap;
        }

        .progress-step-wrapper {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            /* Distribute steps evenly */
        }

        input,
        textarea {
            padding: 7px 10px;
            border: 0.5px solid #5b6475;
            border-radius: 5px;
            margin-bottom: 2px;
        }

        .error-message {
            color: #e53e3e;
            font-size: 0.875rem;
            margin-top: 4px;
        }

        .form-field-group {
            @apply mb-6;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-field-group label {
            @apply block text-sm font-medium text-gray-700 mb-2;
        }

        .form-field-group input[type="text"],
        .form-field-group input[type="email"],
        .form-field-group input[type="tel"],
        .form-field-group textarea,
        .form-field-group select,
        .form-field-group input[type="number"] {
            @apply block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-[#0087b8] focus:border-[#0087b8] sm:text-sm;
            /* Updated focus color */
        }

        .form-field-group input[type="radio"] {
            @apply mr-2;
        }

        .form-field-group .radio-group {
            @apply mt-2 space-y-2;
        }

        .form-field-group .radio-group label {
            @apply inline-flex items-center text-gray-700;
        }

        .grid-options {
            @apply grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 mt-4;
        }

        .grid-option-item {
            @apply flex flex-col items-center p-4 border border-gray-200 rounded-lg cursor-pointer hover:border-[#0087b8] transition-colors duration-200;
            /* Updated hover border */
        }

        .grid-option-item.selected {
            @apply bg-[#e0f2f7] border-[#0087b8];
            /* Updated selected background and border */
        }

        .grid-option-item input[type="checkbox"] {
            @apply sr-only;
            /* Hide actual checkbox */
        }

        .grid-option-item .icon {
            @apply text-4xl mb-2 text-gray-600;
        }

        .grid-option-item.selected .icon {
            @apply text-[#0087b8];
            /* Updated selected icon color */
        }

        .error-message {
            @apply text-red-600 text-sm mt-1;
        }

        /* Button styles for the new theme */
        .btn-next {
            background-color: #0087b8;
            /* Main blue */
            color: #ffffff;
            transition: background-color 0.2s ease-in-out;
        }

        .btn-next:hover {
            background-color: #006b91;
            /* Darker blue on hover */
        }

        .btn-prev {
            background-color: #f0f2f5;
            /* Light gray from screenshot */
            color: #4a5568;
            /* Darker text */
            border: 1px solid #d1d5db;
            /* Light border */
            transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        .btn-prev:hover {
            background-color: #e5e7eb;
            border-color: #9ca3af;
        }

        .bg-green-600 {
            /* For the final submit button */
            background-color: #0087b8;
            /* Reusing the primary blue for consistency */
        }

        .hover\:bg-green-700:hover {
            /* For the final submit button hover */
            background-color: #006b91;
            /* Reusing the primary blue hover for consistency */
        }

        @media (max-width: 768px) {
            .progress-bar-container {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }

            .progress-bar-container::before {
                width: 2px;
                height: 100%;
                left: 50%;
                top: 0;
                transform: translateX(-50%);
            }
        }
    </style>
@endpush

<div class="bg-[#124E65] py-5 md:py-10">
    <div class="form-container">
        <h2
            class="text-xl text-[#124E65] md:text-2xl lg:text-3xl xl:text-4xl font-semibold text-center m-5 my-10 md:mb-16 w-full md:w-[90%] mx-auto font-serif">
            Your Stand Request</h2>
            <div class="progress-step-wrapper">
                <div class="progress-step active" data-step="1">1</div>
                <span class="progress-text">Basic Info</span>
            </div>
            <div class="progress-step-wrapper">
                <div class="progress-step" data-step="2">2</div>
                <span class="progress-text">Features</span>
            </div>
            <div class="progress-step-wrapper">
                <div class="progress-step" data-step="3">3</div>
                <span class="progress-text">Contact Info</span>
            </div>
            {{-- <div class="progress-step-wrapper">
                <div class="progress-step" data-step="4">4</div>
                <span class="progress-text">Price Range</span>
            </div> --}}
                <span class="progress-text">Confirmation</span>
            </div>
        </div>

            <!-- Step 1: Basic Information -->
            <div class="form-step active" data-step="1">
                <h3 class="text-2xl font-semibold text-gray-700 mb-6">What do you need?</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-field-group">
                        <label for="needs">What do you need? <span class="text-red-600">*</span></label>
                        <select id="needs" name="needs"
                            class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-[#0087b8] focus:border-[#0087b8] sm:text-sm">
                            <option value="">Select an option</option>
                            <option value="stands">Stands</option>
                            <option value="hostesses">Hostesses</option>
                            <option value="stand_with_hostesses">Stands with Hostesses</option>
                        </select>
                        <p class="error-message" id="needs-error"></p>
                    </div>
                    <div class="form-field-group">
                        <label for="city">Where do you need it? (City Name) <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="city" name="city" placeholder="City" autocomplete="off"
                            class="relative">
                        <div id="city-suggestions"
                            class="absolute z-10 bg-white border border-gray-200 rounded shadow-md mt-1 w-full hidden">
                        </div>
                        <p class="error-message" id="city-error"></p>
                    </div>
                    <script>
                        // Static city autocomplete
                        const cityInput = document.getElementById('city');
                        const suggestionsBox = document.getElementById('city-suggestions');

                        // Dynamically fetch cities from API and select city ID
                        let cities_form = [];
                        let cities_map = {}; // { "Berlin, Germany": 123, ... }

                        // Fetch cities from API on page load
                        fetch("{{ route('api.get-cities') }}")
                            .then(response => response.json())
                            .then(data => {
                                // Assuming API returns [{id: 1, name: "Berlin", country: "Germany"}, ...]
                                cities_form = data.map(city => `${city.name}`);
                                cities_map = {};
                                data.forEach(city => {
                                    cities_map[`${city.name}`] = city.id;
                                });
                            });

                        // Store selected city ID in a hidden input
                        let cityIdInput = document.getElementById('city_id');
                        if (!cityIdInput) {
                            cityIdInput = document.createElement('input');
                            cityIdInput.type = 'hidden';
                            cityIdInput.id = 'city_id';
                            cityIdInput.name = 'city_id';
                            cityInput.parentNode.appendChild(cityIdInput);
                        }

                        let debounceTimeout = null;

                        cityInput.addEventListener('input', function() {
                            const query = this.value.trim().toLowerCase();
                            suggestionsBox.innerHTML = '';
                            suggestionsBox.classList.add('hidden');
                            if (debounceTimeout) clearTimeout(debounceTimeout);
                            if (query.length < 2) return;

                            debounceTimeout = setTimeout(() => {
                                const filtered = cities_form.filter(city =>
                                    city.toLowerCase().includes(query)
                                ).slice(0, 5);

                                if (filtered.length > 0) {
                                    suggestionsBox.innerHTML = filtered.map(city =>
                                        `<div class="px-4 py-2 cursor-pointer hover:bg-[#e0f2f7]" data-city="${city.split(',')[0]}">${city}</div>`
                                    ).join('');
                                    suggestionsBox.classList.remove('hidden');
                                }
                            }, 200);
                        });

                        suggestionsBox.addEventListener('click', function(e) {
                            if (e.target && e.target.dataset.city) {
                                cityInput.value = e.target.dataset.city;
                                suggestionsBox.innerHTML = '';
                                suggestionsBox.classList.add('hidden');
                            }
                        });

                        // Hide suggestions when clicking outside
                        document.addEventListener('click', function(e) {
                            if (!cityInput.contains(e.target) && !suggestionsBox.contains(e.target)) {
                                suggestionsBox.innerHTML = '';
                                suggestionsBox.classList.add('hidden');
                            }
                        });
                    </script>
                </div>
                <div class="flex justify-end mt-8">
                    <button type="button" class="btn-next px-6 py-3 rounded-md font-semibold">Next &rarr;</button>
                </div>
            </div>

            <!-- Step 2: Stand Request Features -->
            <div class="form-step" data-step="2">
                <h3 class="text-2xl font-semibold text-gray-700 mb-6">Stand Request Features</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-field-group">
                        <label for="stand_size">Stand size (m²) <span class="text-red-600">*</span></label>

                        <p class="error-message" id="stand_size-error"></p>
                    </div>

                    <div class="form-field-group">
                        <label for="budget">Budget <span class="text-red-600">*</span></label>
                        <input type="text" id="budget" name="budget" placeholder="e.g., 50 dollars" required>
                        <p class="error-message" id="budget-error"></p>
                    </div>
                </div>
                <div class="form-field-group" style="position: relative;">
                    <label for="trade_show_event">In which trade show do you exhibit? <span
                            class="text-red-600">*</span></label>
                    <input type="text" id="trade_show_event" name="trade_show_event"
                        placeholder="Select an event" required autocomplete="off">
                    <div id="trade-show-suggestions"
                        class="absolute z-10 bg-white border border-gray-200 rounded shadow-md mt-1 w-full hidden">
                    </div>
                    <p class="error-message" id="trade_show_event-error"></p>
                </div>
                <script>
                    // Static trade show autocomplete
                    const tradeShowInput = document.getElementById('trade_show_event');
                    const tradeShowSuggestions = document.getElementById('trade-show-suggestions');

                    // Fetch trade shows from API and store as array of { id, name }
                    let tradeShows = [];
                    let tradeShowsMap = {}; // { "IFA Berlin": 123, ... }

                    fetch("{{ route('api.get-shows') }}")
                        .then(response => response.json())
                        .then(data => {
                            // Assuming API returns [{id: 1, name: "IFA Berlin"}, ...]
                            tradeShows = data.map(show => show.title);
                            tradeShowsMap = {};
                            data.forEach(show => {
                                tradeShowsMap[show.title] = show.id;
                            });
                        });
                    console.log(tradeShows);

                    // Store selected trade show ID in a hidden input
                    let tradeShowIdInput = document.getElementById('trade_show_id');
                    if (!tradeShowIdInput) {
                        tradeShowIdInput = document.createElement('input');
                        tradeShowIdInput.type = 'hidden';
                        tradeShowIdInput.id = 'trade_show_id';
                        tradeShowIdInput.name = 'trade_show_id';
                        tradeShowInput.parentNode.appendChild(tradeShowIdInput);
                    }

                    let tradeShowDebounce = null;

                    tradeShowInput.addEventListener('input', function() {
                        const query = this.value.trim().toLowerCase();
                        tradeShowSuggestions.innerHTML = '';
                        tradeShowSuggestions.classList.add('hidden');
                        if (tradeShowDebounce) clearTimeout(tradeShowDebounce);
                        if (query.length < 2) return;

                        tradeShowDebounce = setTimeout(() => {
                            const filtered = tradeShows.filter(show =>
                                show.toLowerCase().includes(query)
                            ).slice(0, 5);

                            if (filtered.length > 0) {
                                tradeShowSuggestions.innerHTML = filtered.map(show =>
                                    `<div class="px-4 py-2 cursor-pointer hover:bg-[#e0f2f7]" data-show="${show}">${show}</div>`
                                ).join('');
                                tradeShowSuggestions.classList.remove('hidden');
                            }
                        }, 200);
                    });

                    tradeShowSuggestions.addEventListener('click', function(e) {
                        if (e.target && e.target.dataset.show) {
                            tradeShowInput.value = e.target.dataset.show;
                            tradeShowSuggestions.innerHTML = '';
                            tradeShowSuggestions.classList.add('hidden');
                        }
                    });

                    // Hide suggestions when clicking outside
                    document.addEventListener('click', function(e) {
                        if (!tradeShowInput.contains(e.target) && !tradeShowSuggestions.contains(e.target)) {
                            tradeShowSuggestions.innerHTML = '';
                            tradeShowSuggestions.classList.add('hidden');
                        }
                    });
                </script>
                <div class="flex justify-between mt-8">
                    <button type="button" class="btn-prev px-6 py-3 rounded-md font-semibold">&larr;
                        Previous</button>
                    <button type="button" class="btn-next px-6 py-3 rounded-md font-semibold">Next &rarr;</button>
                </div>
            </div>


                    </div>

                    <div class="form-field-group">
                        <label class="inline-flex items-center">
                            <input type="checkbox" id="privacy_policy" name="privacy_policy" class="form-checkbox">
                            <span class="ml-2 text-gray-700 text-sm">I have read and accept the <a
                                    href="{{ route('privacy-policy') }}" target="_blank"
                                    class="text-[#0087b8] hover:underline">Privacy Policy</a></span>
                        </label>
                        <p class="error-message" id="privacy_policy-error"></p>
                    </div>

            <script>
                // Email filter for public domains
                document.getElementById('email').addEventListener('input', function() {
                    const emailInput = this.value.trim();
                    const errorElement = document.getElementById('email-error');
                    // List of common public email domains
                    const publicDomains = [
                        'gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com', 'aol.com', 'icloud.com',
                        'rediffmail.com', 'protonmail.com', 'zoho.com', 'mail.com', 'gmx.com', 'yandex.com',
                        'msn.com', 'live.com', 'ymail.com', 'rocketmail.com', 'inbox.com', 'fastmail.com'
                    ];
                    errorElement.textContent = '';
                    if (emailInput.length > 0) {
                        const domain = emailInput.split('@')[1]?.toLowerCase();
                        if (publicDomains.includes(domain)) {
                            errorElement.textContent =
                                'Please use your company or custom email address, not a public provider.';
                        }
                    }
                });

                // Prevent public domain emails on validation
                const originalValidateStep = window.validateStep;
                window.validateStep = function(stepIndex) {
                    let isValid = originalValidateStep(stepIndex);
                    if (stepIndex === 2) {
                        const emailInput = document.getElementById('email');
                        const errorElement = document.getElementById('email-error');
                        const publicDomains = [
                            'gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com', 'aol.com', 'icloud.com',
                            'rediffmail.com', 'protonmail.com', 'zoho.com', 'mail.com', 'gmx.com', 'yandex.com',
                            'msn.com', 'live.com', 'ymail.com', 'rocketmail.com', 'inbox.com', 'fastmail.com'
                        ];
                        const value = emailInput.value.trim();
                        const domain = value.split('@')[1]?.toLowerCase();
                        if (value.length > 0 && publicDomains.includes(domain)) {
                            errorElement.textContent =
                                'Please use your company or custom email address, not a public provider.';
                            isValid = false;
                        }
                    }
                    return isValid;
                };
            </script>

            <!-- Step 4: Elements Needed -->
            <div class="form-step" data-step="4">
                <h3 class="text-2xl font-semibold text-gray-700 mb-6">Floor Plan</h3>
                <p class="text-gray-600 mb-6">This would help us to understand better what do you have in mind.</p>
                <div class="form-field-group">
                    <label for="design_upload"
                        class="flex flex-col items-center justify-center p-8 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-[#0087b8] hover:bg-[#e0f2f7] transition-colors duration-200">
                        <svg class="w-12 h-12 text-[#0087b8] mb-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 0115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v8">
                            </path>
                        </svg>
                        <span class="text-lg font-semibold text-gray-700">Upload your own design</span>
                        <span class="text-sm text-gray-500 mt-1">We accept pdf, jpg, cad or zip files (100 MB max per
                            file)</span>
                        <input type="file" id="design_upload" name="design_upload" class="sr-only">
                    </label>
                    <p class="error-message" id="design_upload-error"></p>
                </div>

                <div class="form-field-group">
                    <label for="additional_comments">Additional comments</label>
                    <textarea id="additional_comments" name="additional_comments" rows="4" placeholder="Additional comments"></textarea>
                </div>
                <div class="flex justify-between mt-8">
                    <button type="button" class="btn-prev px-6 py-3 rounded-md font-semibold">&larr;
                        Previous</button>
                    <button type="button" class="btn-next px-6 py-3 rounded-md font-semibold">Next &rarr;</button>
                </div>

                <h3 class="text-2xl font-semibold text-gray-700 mb-6">How many employees will be in the stand during
                    the event?</h3>
                <p class="text-gray-600 mb-6">Specify the number of employees, what position they have, that are going
                    to be in the stand. This information is helpful for designing the stand. Example: manager + 3 sales
                    person + hostesses</p>
                <div class="form-field-group">
                    <textarea id="employees_info" name="employees_info" rows="6"
                        placeholder="e.g., 1 Manager, 3 Sales Persons, 2 Hostesses"></textarea>
                    <p class="error-message" id="employees_info-error"></p>
                </div>
                <div class="flex justify-between mt-8">
                    <button type="button" class="btn-prev px-6 py-3 rounded-md font-semibold">&larr;
                        Previous</button>
                    <button type="button" class="btn-next px-6 py-3 rounded-md font-semibold">Next &rarr;</button>
                </div>
            </div> --}}

            <!-- Step 6: Design Upload -->
            {{-- <div class="form-step" data-step="6">
                <h3 class="text-2xl font-semibold text-gray-700 mb-6">Do you want to attach some design, idea or
                    concept of how your stand should be?</h3>
                <p class="text-gray-600 mb-6">This would help us to understand better what do you have in mind.</p>
                <div class="form-field-group">
                    <label for="design_upload"
                        class="flex flex-col items-center justify-center p-8 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-[#0087b8] hover:bg-[#e0f2f7] transition-colors duration-200">
                        <svg class="w-12 h-12 text-[#0087b8] mb-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 0115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v8">
                            </path>
                        </svg>
                        <span class="text-lg font-semibold text-gray-700">Upload your own design</span>
                        <span class="text-sm text-gray-500 mt-1">We accept pdf, jpg, cad or zip files (100 MB max per
                            file)</span>
                        <input type="file" id="design_upload" name="design_upload" class="sr-only">
                    </label>
                    <p class="error-message" id="design_upload-error"></p>
                </div>
                <div class="flex justify-between mt-8">
                    <button type="button" class="btn-prev px-6 py-3 rounded-md font-semibold">&larr;
                        Previous</button>
                    <button type="submit" class="btn-next px-6 py-3 rounded-md font-semibold">Submit Form</button>
                </div>
            </div> --}}

            <!-- Step 5: Thank You Page -->
            <div class="form-step" data-step="5">
                <div class="text-center py-20">
                    <h3 class="text-4xl font-bold text-gray-800 mb-4">Thank you!</h3>
                    <p class="text-xl text-gray-600">In 48h we will send you a selection of the best proposals</p>
                </div>
            </div>
        </form>
    </div>
</div>


@push('scripts')
    <script>
        const form = document.getElementById('multiStepForm');
        const formSteps = document.querySelectorAll('.form-step');
        const progressSteps = document.querySelectorAll('.progress-step');
        let currentStep = 0; // 0-indexed

        // Function to show a specific step
        function showStep(stepIndex) {
            formSteps.forEach((step, index) => {
                step.classList.toggle('active', index === stepIndex);
            });
            updateProgressBar(stepIndex);
            currentStep = stepIndex;
        }

        // Function to update the progress bar
        function updateProgressBar(stepIndex) {
            progressSteps.forEach((pStep, index) => {
                pStep.classList.remove('active', 'completed');
                if (index < stepIndex) {
                    pStep.classList.add('completed');
                } else if (index === stepIndex) {
                    pStep.classList.add('active');
                }
            });
        }

        // Basic client-side validation
        function validateStep(stepIndex) {
            let isValid = true;
            const currentFormStep = formSteps[stepIndex];
            const inputs = currentFormStep.querySelectorAll('input[required], select[required], textarea[required]');
            const errorMessages = currentFormStep.querySelectorAll('.error-message');

            // Clear previous errors
            errorMessages.forEach(el => el.textContent = '');

            inputs.forEach(input => {
                const id = input.id;
                const errorElement = document.getElementById(`${id}-error`);

                if (input.type === 'checkbox') {
                    if (!input.checked) {
                        isValid = false;
                        if (errorElement) errorElement.textContent = 'This field is required.';
                    }
                } else if (input.type === 'radio') {
                    const radioGroupName = input.name;
                    const radioGroup = document.querySelectorAll(`input[name="${radioGroupName}"]`);
                    const isChecked = Array.from(radioGroup).some(radio => radio.checked);
                    if (!isChecked) {
                        isValid = false;
                        // Only show error for the first radio button of the group
                        if (errorElement && !errorElement.textContent) {
                            errorElement.textContent = 'Please select an option.';
                        }
                    }
                } else if (input.value.trim() === '') {
                    isValid = false;
                    if (errorElement) errorElement.textContent = 'This field is required.';
                } else if (input.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value)) {
                    isValid = false;
                    if (errorElement) errorElement.textContent = 'Please enter a valid email address.';
                } else if (input.type === 'tel' && !/^\+?[0-9\s-()]{7,20}$/.test(input
                        .value)) { // Basic phone number regex
                    isValid = false;
                    if (errorElement) errorElement.textContent = 'Please enter a valid phone number.';
                }
            });

            // Specific validation for step 1
            if (stepIndex === 0) {
                const needsSelect = document.getElementById('needs');
                const cityInput = document.getElementById('city');
                if (needsSelect.value === '') {
                    isValid = false;
                    document.getElementById('needs-error').textContent = 'Please select what you need.';
                }
                if (cityInput.value.trim() === '') {
                    isValid = false;
                    document.getElementById('city-error').textContent = 'Please enter a city.';
                }
            }

            // Specific validation for step 3
            if (stepIndex === 2) {
                const privacyCheckbox = document.getElementById('privacy_policy');
                if (!privacyCheckbox.checked) {
                    isValid = false;
                    document.getElementById('privacy_policy-error').textContent = 'You must accept the privacy policy.';
                }
            }

            return isValid;
        }

        // Event listeners for Next and Previous buttons
        document.querySelectorAll('.btn-next').forEach(button => {
            button.addEventListener('click', () => {
                if (validateStep(currentStep)) {
                    // If current step is valid, proceed to the next step
                    if (currentStep < formSteps.length - 1) {
                        showStep(currentStep + 1);
                    }
                }
            });
        });

        document.querySelectorAll('.btn-prev').forEach(button => {
            button.addEventListener('click', () => {
                if (currentStep > 0) {
                    showStep(currentStep - 1);
                }
            });
        });

        // Handle checkbox styling for grid options
        document.querySelectorAll('.grid-option-item input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', (event) => {
                const parentLabel = event.target.closest('.grid-option-item');
                if (parentLabel) {
                    parentLabel.classList.toggle('selected', event.target.checked);
                }
            });
        });

        // Initialize form by showing the first step
        showStep(0);
    </script>
@endpush
