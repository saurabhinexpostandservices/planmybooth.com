<form action="{{ route('api.lead.create') }}" method="POST" enctype="multipart/form-data"
    class="space-y-2 w-full bg-[#1A6D88] p-8 rounded-lg shadow-md ">
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


    <!-- Section 1: Contact Details -->
    <div>
        <h2 class="text-xl font-serif font-semibold mb-4 bg-[#64CCC5] p-2">Contact Details</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Name -->
            <div class="flex flex-col">
                <label for="name" class="block text-white font-semibold mb-2">Your Name <span
                        class="text-red-500 font-bold">*</span></label>
                <input type="text" id="name" name="fullname" placeholder="Enter your full name" required
                    class="p-2 border rounded bg-white" value="{{ old('name') }}">
                @error('fullname')
                    <p class="my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="flex flex-col">
                <label for="email" class="block text-white font-semibold mb-2">Email <span
                        class="text-red-500 font-bold">*</span></label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required
                    class="p-2 border rounded bg-white" value="{{ old('email') }}">
                @error('email')
                    <p class="my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone Number -->
            <div class="flex flex-col">
                <label for="phone" class="block text-white font-semibold mb-2">Phone Number <span
                        class="text-red-500 font-bold">*</span></label>
                <div class="flex">
                    <select name="countryCode" class=" p-2 border rounded bg-white">
                        <option value="+1">+1</option>
                        <option value="+91">+91</option>
                        <option value="+44">+44</option>
                        <option value="+61">+61</option>
                        <option value="+81">+81</option>
                        <option value="+33">+33</option>
                        <option value="+49">+49</option>
                        <option value="+86">+86</option>
                        <option value="+971">+971</option>
                        <option value="+55">+55</option>
                        <option value="+7">+7</option>
                        <option value="+82">+82</option>
                        <option value="+39">+39</option>
                        <option value="+34">+34</option>
                        <option value="+64">+64</option>
                        <option value="+60">+60</option>
                        <option value="+62">+62</option>
                        <option value="+63">+63</option>
                        <option value="+66">+66</option>
                        <option value="+20">+20</option>
                        <option value="+27">+27</option>
                        <option value="+52">+52</option>
                        <option value="+31">+31</option>
                        <option value="+46">+46</option>
                        <option value="+41">+41</option>
                        <option value="+65">+65</option>
                        <option value="+98">+98</option>
                        <option value="+234">+234</option>
                        <option value="+977">+977</option>
                        <option value="+90">+90</option>

                        <!-- Add more country codes -->
                    </select>
                    <input type="tel" id="phone" name="phone" placeholder="Your phone number"
                        class="w-full px-4 p-2 border rounded bg-white" value="{{ old('phone') }}" required />
                </div>

                @error('phone')
                    <p class="my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Company Name -->
            <div class="flex flex-col">
                <label for="address" class="block text-white font-semibold mb-2">Company Name</label>
                <input type="text" id="address" name="company_name" placeholder="Enter company name"
                    class="p-2 border rounded bg-white" value="{{ old('company_name') }}">
                @error('company_name')
                    <p class="my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Company Website -->
            <div class="flex flex-col">
                <label for="country" class="block text-white font-semibold mb-2">Company Website</label>
                <input type="text" id="country" name="website" placeholder="Enter company website"
                    class="p-2 border rounded bg-white" value="{{ old('website') }}">
                @error('website')
                    <p class="my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Select Country -->
            <x-contact-us.country-select />
        </div>
    </div>

    <!-- Section 2: Event Details -->
    <div>
        <h2 class="text-xl font-serif font-semibold mb-4 bg-[#64CCC5] p-2">Tell us about your Event</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Name of Event -->
            <div class="flex flex-col mb-2">
                <label for="eventName" class="block text-white font-semibold mb-2">Name of Event <span
                        class="text-red-500 font-bold">*</span></label>
                <input type="text" id="eventName" name="event_name" placeholder="Enter event name" required
                    class="p-2 border rounded bg-white" value="{{ old('event_name') }}" />
                @error('event_name')
                    <p class="my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Select City -->
            <x-contact-us.city-select />
            @error('city')
                <p class="mt-1 text-red-500">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Section 3: Stand Details -->
    <div class="flex flex-col">
        <h2 class="text-xl font-serif font-semibold mb-4 bg-[#64CCC5] p-2">Stand Details</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Stand Size -->
            <div class="flex flex-col">
                <label for="standSize" class="block text-white font-semibold mb-2">Stand Size <span
                        class="text-red-500 font-bold">*</span></label>
                <div class="flex space-x-2">
                    <input type="number" id="standSize" name="stand_size" placeholder="Stand Size" required
                        class="p-2 border rounded w-full bg-white" value="{{ old('stand_size') }}">
                    <select id="standUnit" name="stand_unit" class="p-2 border rounded bg-white" required>
                        <option value="SQFT" {{ old('stand_unit') == 'SQFT' ? 'selected' : '' }}>SQFT
                        </option>
                        <option value="SQMT" {{ old('stand_unit') == 'SQMT' ? 'selected' : '' }}>SQMT
                        </option>
                    </select>
                </div>
                @error('stand_size')
                    <p class="my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Budget -->
            <div class="flex flex-col">
                <label for="budget" class="block text-white font-semibold mb-2">Budget </label>
                <div class="flex space-x-2">
                    <input type="number" id="budget" name="budget" placeholder="Budget"
                        class="p-2 border rounded w-full bg-white" value="{{ old('budget') }}">
                    <select id="budgetCurrency" name="budget_currency" class="p-2 border rounded bg-white">
                        <option value="USD" {{ old('budget_currency') == 'USD' ? 'selected' : '' }}>USD
                        </option>
                        <option value="EUR" {{ old('budget_currency') == 'EUR' ? 'selected' : '' }}>EUR
                        </option>
                        <option value="GBP" {{ old('budget_currency') == 'GBP' ? 'selected' : '' }}>GBP
                        </option>
                    </select>
                </div>
                @error('budget')
                    <p class="my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- File Upload -->
            <div class="flex flex-col pt-3">
                <label for="fileUpload" class="block text-white font-semibold mb-2">File Upload</label>
                <input type="file" id="fileUpload" name="attachment" class="p-2 border rounded bg-white">
                @error('attachment')
                    <p class="my-1 text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Section 4: Message -->

    <div class="mb-6 flex flex-col">
        <label for="message" class="block text-white font-semibold mb-2">Message <span
                class="text-red-500 font-bold">*</span></label>
        <textarea id="message" name="message" rows="4" placeholder="Enter your message..."
            class="mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-200 bg-white">{{ old('message') }}</textarea>
        @error('message')
            <p class="my-1 text-red-500">{{ $message }}</p>
        @enderror

        <!-- Submit Button -->
        <div class="flex justify-center pt-5">
            <button type="submit"
                class="bg-[#64CCC5] text-black text-center  uppercase transition-all duration-700 ease-in-out rounded-lg px-8 py-3">
                Submit
            </button>
        </div>
    </div>

</form>
