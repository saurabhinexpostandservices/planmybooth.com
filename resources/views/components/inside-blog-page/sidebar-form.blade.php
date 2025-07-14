<div class="max-w-4xl w-full p-6 bg-white rounded shadow font-poppins">

    <form action="{{ route('api.lead.create') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf
        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <!-- Error Message -->
        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif
        <!-- Section 1: Event Details -->
        <div>
            <h2 class="text-xl font-semibold mb-4 bg-[#CBD5E1] p-2">Tell us about your Event</h2>
            <div class="grid grid-cols-1 gap-4 p">
                <!-- Name of Event -->
                <div class="flex flex-col mb-4">
                    <label for="eventName" class="block text-gray-700 font-semibold mb-2">Name of Event <span
                            class="text-red-500 font-bold">*</span></label>
                    <input class="p-2 border rounded w-full bg-white" type="text" id="trade_show_event" name="trade_show_event" placeholder="Select an event"
                        required autocomplete="off">
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
            </div>

            <!-- Section 2: Stand Details -->
            <div class="mt-6">
                <h2 class="text-xl font-semibold mb-4 bg-[#CBD5E1] p-2">Stand Details</h2>
                <div class="grid grid-cols-1 gap-4">

                    <!-- Stand Size -->
                    <div class="flex flex-col">
                        <label for="standSize" class="block font-semibold mb-2">Stand Size <span
                                class="text-red-500 font-bold">*</span></label>

                        <input type="text" id="stand_size" name="stand_size" placeholder="0 msq" required
                            class="p-2 border rounded w-full bg-white" value="{{ old('stand_size') }}">

                        @error('stand_size')
                            <p class="my-1 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Budget -->
                    <div class="flex flex-col">
                        <label for="budget" class="block font-semibold mb-2">Budget </label>

                        <input type="text" id="budget" name="budget" placeholder="Budget"
                            class="p-2 border rounded w-full bg-white" value="{{ old('budget') }}">

                        @error('budget')
                            <p class="my-1 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- File Upload -->
                <div class="flex flex-col pt-3">
                    <label for="fileUpload" class="block text-white font-semibold mb-2">File Upload</label>
                    <label for="design_upload"
                        class="flex flex-col items-center justify-center p-8 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-[#0087b8] bg-white transition-colors duration-200">
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
                </div>
            </div>
        </div>

        <!-- Section 3: Message -->

        <div class="my-6 flex flex-col">
            <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Enter your message..."
                class="mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-200">{{ old('message') }}</textarea>
            @error('message')
                <p class="my-1 text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Section 4: Contact Details -->
        <div>
            <h2 class="text-xl font-semibold mb-4 bg-[#CBD5E1] p-2">Contact Details</h2>
            <div class="grid grid-cols-1 gap-4">
                <!-- Name -->
                <div class="flex flex-col">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Contact Name <span
                            class="text-red-500 font-bold">*</span></label>
                      <input type="text" id="contact_name" name="contact_name" placeholder="contact name" required
                        class="p-2 border rounded" value="{{ old('name') }}">
                    @error('fullname')
                        <p class="my-1 text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="flex flex-col">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email <span
                            class="text-red-500 font-bold">*</span></label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required
                        class="p-2 border rounded" value="{{ old('email') }}">
                    @error('email')
                        <p class="my-1 text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Phone Number -->
                <div class="flex flex-col">
                    <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone Number <span
                            class="text-red-500 font-bold">*</span></label>
                   
                        <input type="tel" id="phone_number" name="phone_number" class="p-2 border rounded" placeholder="phone number">

                    @error('phone')
                        <p class="my-1 text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Company Name -->
                <div class="flex flex-col">
                    <label for="address" class="block text-gray-700 font-semibold mb-2">Company Name</label>
                    <input type="text" id="company_name" name="contact_name" placeholder="company name"
                        class="p-2 border rounded" value="{{ old('company_name') }}">
                    @error('company_name')
                        <p class="my-1 text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center py-5">
                <button type="submit"
                    class="bg-gradient-to-r from-[#314755] via-[#26a0da] to-[#314755] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center uppercase transition-all duration-700 ease-in-out rounded-lg px-11 py-3">Submit
                    Quotation</button>
            </div>
        </div>
    </form>
</div>
