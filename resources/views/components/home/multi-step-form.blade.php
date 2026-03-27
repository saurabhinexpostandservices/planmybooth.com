@push('styles')
    <style>
        .form-container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 10px 20px;
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
            margin-bottom: 5%;
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
            class="text-xl text-[#124E65] md:text-2xl lg:text-3xl xl:text-4xl font-semibold text-center m-5 w-full md:w-[90%] mx-auto font-serif">
            Your Stand Request</h2>
        @if (session('contact_message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                {{ session('contact_message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Progress Bar -->
        <div class="progress-bar-container">
            <div class="progress-step-wrapper">
                <div class="progress-step active" data-step="1">1</div>
                <span class="progress-text">Basic Info</span>
            </div>

            <div class="progress-step-wrapper">
                <div class="progress-step" data-step="2">2</div>
                <span class="progress-text">Contact Info</span>
            </div>

            <div class="progress-step-wrapper">
                <div class="progress-step" data-step="3">3</div>
                <span class="progress-text">Files Upload</span>
            </div>
            <div class="progress-step-wrapper">
                <div class="progress-step" data-step="4">4</div>
                <span class="progress-text">Confirmation</span>
            </div>
        </div>

        <form method="POST" id="multiStepForm" action="{{ route('api.lead-store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Step 1: Basic Info -->
            <div class="form-step active" data-step="1">
                <h3 class="text-2xl font-semibold text-gray-700 mb-6">Stand Request Features</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-field-group">
                        <label for="city">Where do you need it? (City Name) <span class="text-red-600">*</span></label>
                        <input type="text" id="city" name="city" placeholder="City" autocomplete="off" class="relative"
                            value="{{ old('city') }}">
                        <div id="city-suggestions"
                            class="absolute z-10 mt-20 bg-white border border-gray-200 rounded shadow-md w-fit hidden">
                        </div>
                        <p class="error-message" id="city-error"></p>
                    </div>
                    <div class="form-field-group" style="position: relative;">
                        <label for="trade_show_event">In which trade show do you exhibit? <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="trade_show_event" name="trade_show_event" placeholder="Select an event"
                            required autocomplete="off">
                        <div id="trade-show-suggestions"
                            class="absolute z-10 bg-white border border-gray-200 rounded shadow-md mt-1 w-full hidden">
                        </div>
                        <p class="error-message" id="trade_show_event-error"></p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-field-group">
                        <label for="stand_size">Stand size (m²) <span class="text-red-600">*</span></label>
                        <input type="text" id="stand_size" name="stand_size" placeholder="0 m²" required
                            class="p-2 border rounded w-full" value="{{ old('stand_size') }}">

                        <p class="error-message" id="stand_size-error"></p>
                    </div>

                    <div class="form-field-group">
                        <label for="budget" class="block text-sm font-medium text-gray-700 mb-1">
                            Budget <span class="text-red-600">*</span>
                        </label>

                        <div class="flex gap-2">
                            <!-- Budget Input -->
                            <input type="text" id="budget" name="budget" placeholder="Enter amount" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">

                            <!-- Currency Dropdown -->
                            <select id="currency"
                                class="px-3 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                <option value="$">USD ($)</option>
                                <option value="€" selected>EUR (€)</option>
                            </select>
                        </div>

                        <p class="error-message text-red-500 text-sm mt-1" id="budget-error"></p>
                    </div>

                    <script>
                        const budgetInput = document.getElementById('budget');
                        const currencySelect = document.getElementById('currency');

                        // Remove currency when user focuses (to edit easily)
                        budgetInput.addEventListener('focus', () => {
                            budgetInput.value = budgetInput.value.replace(/[€$]/g, '').trim();
                        });

                        // Add currency when user leaves input
                        budgetInput.addEventListener('blur', formatBudget);

                        // Update when currency changes
                        currencySelect.addEventListener('change', formatBudget);

                        function formatBudget() {
                            let amount = budgetInput.value.replace(/[₹$€]/g, '').trim();
                            let symbol = currencySelect.value;

                            if (amount !== "") {
                                budgetInput.value = amount + " " + symbol;
                            }
                        }
                    </script>
                </div>



                <div class="flex justify-end mt-8">
                    <button type="button" class="btn-next px-6 py-3 rounded-md font-semibold">Next
                        &rarr;</button>
                </div>

            </div>


            <!-- Step 2: Contact Information -->
            <div class="form-step" data-step="2">
                <h3 class="text-2xl font-semibold text-gray-700 mb-6">Your Contact Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-field-group">
                        <label for="company_name">Name <span class="text-red-600">*</span></label>
                        <input type="text" id="contact_name" name="name" placeholder=" name" required>
                        <p class="error-message" id="contact_name-error"></p>
                    </div>
                    <div class="form-field-group">
                        <label for="company_name">Company name <span class="text-red-600">*</span></label>
                        <input type="text" id="company_name" name="company_name" placeholder="Company name" required>
                        <p class="error-message" id="company_name-error"></p>
                    </div>
                    <div class="form-field-group">
                        <label for="phone_number">Phone number <span class="text-red-600">*</span></label>
                        <input type="tel" id="phone_number" name="phone" placeholder="Phone number" required>
                        <p class="error-message" id="phone_number-error"></p>
                    </div>
                    <div class="form-field-group">
                        <label for="website">Website (optional)</label>
                        <input type="text" id="website" name="website" placeholder="Enter your website">
                        <label>
                            <input type="checkbox" id="no-website"> I don't have a website
                        </label>
                    </div>
                    <div class="form-field-group">
                        <label for="email_name">Email</label>
                        <div class="flex gap-2">
                            <input type="text" id="email_name" placeholder="Your name" class="flex-1" />
                            <span id="email_domain"
                                class="px-2 py-2 border border-gray-300 rounded-lg bg-gray-100"></span>
                        </div>
                        <input type="hidden" id="email" name="email" />
                        <p class="error-message" id="email-error"></p>
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
                <div class="flex justify-between mt-8">
                    <button type="button" class="btn-prev px-6 py-3 rounded-md font-semibold">&larr;
                        Previous</button>
                    <button type="button" class="btn-next px-6 py-3 rounded-md font-semibold">Next &rarr;</button>
                </div>
            </div>

            <script>
                // Email filter for public domains
                document.getElementById('email').addEventListener('input', function () {
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
                window.validateStep = function (stepIndex) {
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

            <!-- Step 3: Elements Needed -->
            <div class="form-step" data-step="3">
                <h3 class="text-2xl font-semibold text-gray-700 mb-6">Attachments</h3>
                <p class="text-gray-600 mb-6">This would help us to understand better what do you have in mind.</p>
                <div class="form-field-group">
                    <label for="design_upload"
                        class="flex flex-col items-center justify-center p-8 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-[#0087b8] hover:bg-[#e0f2f7] transition-colors duration-200">
                        <svg class="w-12 h-12 text-[#0087b8] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 0115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v8">
                            </path>
                        </svg>
                        <span class="text-lg font-semibold text-gray-700">Upload your own design</span>
                        <span class="text-sm text-gray-500 mt-1">We accept pdf, jpg, cad or zip files (100 MB max per
                            file)</span>
                        <input type="file" id="design_upload" name="attachment[]" class="sr-only" multiple
                            accept=".pdf,.jpg,.jpeg,.png,.gif,.doc,.docx,.zip,.cad,image/*">
                    </label>
                    <div id="design-upload-list" class="w-full mt-3"></div>
                    <p class="error-message" id="design_upload-error"></p>
                </div>


                <div class="form-field-group">
                    <label for="additional_comments">Additional comments</label>
                    <textarea id="additional_comments" name="additional_comments" rows="4"
                        placeholder="Additional comments">{{ old('additional_comments') }}</textarea>
                </div>
                <input type="hidden" name="page_url" value="{{ request()->url() }}" />
                <input type="hidden" name="ip" value="{{ request()->ip() }}" />

                <div class="flex justify-between mt-8">
                    <button type="button" class="btn-prev px-6 py-3 rounded-md font-semibold">&larr;
                        Previous</button>
                    <button type="button" class="btn-next px-6 py-3 rounded-md font-semibold">Submit &rarr;</button>
                </div>
            </div>

            <!-- Step 4: Thank You Page -->
            <div class="form-step" data-step="4">
                <div id="form-preview" class="space-y-6 max-w-3xl mx-auto">
                    <!-- Basic Info Card -->
                    <div
                        class="p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="font-semibold text-xl text-gray-800 mb-4 border-b pb-2">Basic Info</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <p><span class="font-medium text-gray-700">City:</span> <span id="preview-city"
                                    class="text-gray-900"></span></p>
                            <p><span class="font-medium text-gray-700">Trade Show:</span> <span id="preview-tradeshow"
                                    class="text-gray-900"></span></p>
                            <p><span class="font-medium text-gray-700">Stand Size:</span> <span id="preview-standsize"
                                    class="text-gray-900"></span></p>
                            <p><span class="font-medium text-gray-700">Budget:</span> <span id="preview-budget"
                                    class="text-gray-900"></span></p>
                        </div>
                    </div>

                    <!-- Contact Info Card -->
                    <div
                        class="p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="font-semibold text-xl text-gray-800 mb-4 border-b pb-2">Contact Info</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <p><span class="font-medium text-gray-700">Name:</span> <span id="preview-name"
                                    class="text-gray-900"></span></p>
                            <p><span class="font-medium text-gray-700">Email:</span> <span id="preview-email"
                                    class="text-gray-900"></span></p>
                            <p><span class="font-medium text-gray-700">Company:</span> <span id="preview-company"
                                    class="text-gray-900"></span></p>
                            <p><span class="font-medium text-gray-700">Phone:</span> <span id="preview-phone"
                                    class="text-gray-900"></span></p>
                        </div>
                    </div>

                    <!-- Files & Comments Card -->
                    <div
                        class="p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="font-semibold text-xl text-gray-800 mb-4 border-b pb-2">Files & Comments</h3>
                        <div class="space-y-2">
                            <p><span class="font-medium text-gray-700">Uploaded Files:</span> <span id="preview-files"
                                    class="text-gray-900"></span></p>
                            <p><span class="font-medium text-gray-700">Comments:</span> <span id="preview-comments"
                                    class="text-gray-900"></span></p>
                        </div>
                    </div>
                </div>
                <button type="button" id="send-otp" class="btn-next px-4 py-2 mt-4 rounded text-center block mx-auto">
                    Email OTP
                </button>

                <div id="otp-section" class="mt-4 hidden">
                    <input type="text" id="otp" placeholder="Enter OTP" class="border p-2 rounded w-full">
                    <button type="button" id="verify-otp" class="btn-next px-4 py-2 mt-2 rounded">
                        Submit</button>
                </div>


                <p id="otp-message" class="text-sm mt-2"></p>

                <div id="otp-success-section" style="display: none;" class="hidden space-y-4">
                    <div class="p-4  text-white rounded shadow">
                        <!-- Optional top success message -->
                    </div>
                    <div class="p-4 bg-blue-50 border border-blue-200 rounded shadow">
                        <p class="text-gray-800">Your account has been created automatically.</p>
                        <p class="text-gray-700">
                            Your temporary password: <span id="generated-password" class="font-semibold"></span>
                        </p>
                        <button id="reset-password-btn"
                            class="mt-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Reset Password
                        </button>
                    </div>
                </div>

                <p id="otp-message" class="text-sm mt-2"></p>
                <!-- <div class="text-center py-20">
                    <h3 class="text-4xl font-bold text-gray-800 mb-4">Launching your request into cyberspace 🚀</h3>
                    <p class="text-xl text-gray-600">Hold tight, the internet hamsters are running!</p>
                </div> -->
            </div>
        </form>
    </div>
</div>

<!-- ✅ YAHAN ADD KARO MODAL -->
<div id="otpSuccessModal" class="fixed inset-0 bg-black bg-opacity-60 hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl shadow-xl p-8 max-w-md w-full text-center animate-scaleIn">

        <h2 class="text-2xl font-bold text-green-600 mb-3">
            🎉 OTP Verified!
        </h2>

        <p class="text-gray-600 text-sm leading-relaxed">
            Your account has been successfully verified.<br><br>
            Please check your email 📧 for your login ID and password.<br><br>
            <br><br>
            <span class="font-medium text-gray-800">Thank you for your time 🙏</span>
        </p>

        <button id="modalOkBtn" class="mt-6 bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg">
            OK
        </button>

    </div>
</div>

<style>
    @keyframes scaleIn {
        from {
            transform: scale(0.8);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    .animate-scaleIn {
        animation: scaleIn 0.3s ease;
    }
</style>

@push('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const okBtn = document.getElementById('modalOkBtn');

            if (okBtn) {
                okBtn.addEventListener('click', function () {
                    location.reload();
                });
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const form = document.getElementById('multiStepForm');
            const formSteps = document.querySelectorAll('.form-step');
            const progressSteps = document.querySelectorAll('.progress-step');
            let currentStep = 0;

            // ================= SHOW STEP =================
            function showStep(stepIndex) {
                formSteps.forEach((step, index) => {
                    step.classList.toggle('active', index === stepIndex);
                });

                updateProgressBar(stepIndex);
                currentStep = stepIndex;

                // Preview update on step 4
                if (stepIndex === 3) {
                    document.getElementById('preview-city').textContent = document.getElementById('city').value;
                    document.getElementById('preview-tradeshow').textContent = document.getElementById('trade_show_event').value;
                    document.getElementById('preview-standsize').textContent = document.getElementById('stand_size').value;
                    document.getElementById('preview-budget').textContent = document.getElementById('budget').value;

                    document.getElementById('preview-name').textContent = document.getElementById('contact_name').value;
                    document.getElementById('preview-email').textContent = document.getElementById('email').value;
                    document.getElementById('preview-company').textContent = document.getElementById('company_name').value;
                    document.getElementById('preview-phone').textContent = document.getElementById('phone_number').value;

                    // Files & Comments
                    const files = document.getElementById('design_upload').files;
                    document.getElementById('preview-files').textContent = files.length > 0
                        ? Array.from(files).map(f => f.name).join(', ')
                        : 'No files uploaded';
                    document.getElementById('preview-comments').textContent = document.getElementById('comments').value || '-';
                }
            }

            // ================= PROGRESS BAR =================
            function updateProgressBar(stepIndex) {
                progressSteps.forEach((step, index) => {
                    step.classList.remove('active', 'completed');
                    if (index < stepIndex) step.classList.add('completed');
                    else if (index === stepIndex) step.classList.add('active');
                });
            }

            // ================= VALIDATION =================
            function validateStep(stepIndex) {
                let isValid = true;
                const currentFormStep = formSteps[stepIndex];
                const inputs = currentFormStep.querySelectorAll('input[required], textarea[required], select[required]');

                currentFormStep.querySelectorAll('.error-message').forEach(el => el.textContent = '');

                inputs.forEach(input => {
                    const errorEl = document.getElementById(input.id + '-error');
                    if (input.type === 'checkbox' && !input.checked) {
                        isValid = false;
                        if (errorEl) errorEl.textContent = 'This field is required';
                    } else if (input.value.trim() === '') {
                        isValid = false;
                        if (errorEl) errorEl.textContent = 'This field is required';
                    } else if (input.type === 'email') {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(input.value)) {
                            isValid = false;
                            if (errorEl) errorEl.textContent = 'Invalid email format';
                        }
                    } else if (input.type === 'tel') {
                        const phoneRegex = /^[0-9+\-\s()]{7,20}$/;
                        if (!phoneRegex.test(input.value)) {
                            isValid = false;
                            if (errorEl) errorEl.textContent = 'Invalid phone number';
                        }
                    }
                });

                // Extra validation for step 0
                if (stepIndex === 0) {
                    if (!document.getElementById('city').value.trim()) {
                        isValid = false;
                        document.getElementById('city-error').textContent = 'City is required';
                    }
                    if (!document.getElementById('trade_show_event').value.trim()) {
                        isValid = false;
                        document.getElementById('trade_show_event-error').textContent = 'Trade show is required';
                    }
                }

                // Step 1 privacy checkbox
                if (stepIndex === 1) {
                    const privacy = document.getElementById('privacy_policy');
                    if (privacy && !privacy.checked) {
                        isValid = false;
                        document.getElementById('privacy_policy-error').textContent = 'Accept privacy policy';
                    }
                }

                return isValid;
            }

            // ================= NEXT BUTTON =================
            document.querySelectorAll('.btn-next').forEach(btn => {
                btn.addEventListener('click', function () {
                    if (validateStep(currentStep) && currentStep < formSteps.length - 1) {
                        showStep(currentStep + 1);
                    }
                });
            });

            // ================= PREVIOUS BUTTON =================
            document.querySelectorAll('.btn-prev').forEach(btn => {
                btn.addEventListener('click', function () {
                    if (currentStep > 0) showStep(currentStep - 1);
                });
            });

            // ================= FINAL SUBMIT =================
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                if (!validateStep(currentStep)) return;

                const otpSection = document.getElementById('otp-section');
                if (!otpSection || otpSection.classList.contains('hidden')) {
                    alert('Please verify your email first!');
                    return;
                }

                const formData = new FormData(form);

                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: { 'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value }
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            alert('Form submitted successfully! Email has been sent.');
                            window.location.href = '/thank-you';
                        } else {
                            alert('Submission failed. Please try again.');
                        }
                    })
                    .catch(err => console.error('Form Submit Error:', err));
            });

            // ================= SEND OTP =================
            document.getElementById('send-otp').addEventListener('click', function () {
                const email = document.getElementById('email').value.trim();
                if (!email) {
                    alert('Enter email first');
                    return;
                }

                fetch('/send-otp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify({ email })
                })
                    .then(res => res.json())
                    .then(data => {
                        document.getElementById('otp-message').innerText = 'OTP sent to your email';
                        document.getElementById('otp-section').classList.remove('hidden');
                    })
                    .catch(err => console.error('OTP Error:', err));
            });

            // ================= INIT =================
            showStep(0);

        });
    </script>
    <script>
        const websiteInput = document.getElementById('website');
        const emailNameInput = document.getElementById('email_name');
        const emailDomainSpan = document.getElementById('email_domain');
        const hiddenEmailInput = document.getElementById('email');
        const noWebsiteCheckbox = document.getElementById('no-website');

        function updateEmail() {
            let domain = '';

            if (!noWebsiteCheckbox.checked && websiteInput.value.trim() !== '') {
                // Website dali hai → automatic domain
                let url = websiteInput.value.trim().replace(/^https?:\/\//, '');
                let parts = url.split(/[\/:]/);
                domain = '@' + parts[0];

                emailDomainSpan.textContent = domain;

                // Username-only restriction
                let username = emailNameInput.value.trim();
                if (username.includes('@')) username = username.split('@')[0];
                emailNameInput.value = username;

                hiddenEmailInput.value = username + domain;
            } else {
                // "I don't have website" → free typing
                emailDomainSpan.textContent = '';
                hiddenEmailInput.value = emailNameInput.value.trim();
            }
        }

        // Event listeners
        websiteInput.addEventListener('input', updateEmail);
        emailNameInput.addEventListener('input', updateEmail);

        noWebsiteCheckbox.addEventListener('change', function () {
            if (this.checked) {
                websiteInput.value = '';
                websiteInput.style.display = 'none';
                websiteInput.disabled = true;

                emailDomainSpan.contentEditable = true;
                emailDomainSpan.style.backgroundColor = '#fff';
                updateEmail();
            } else {
                websiteInput.style.display = 'block';
                websiteInput.disabled = false;

                emailDomainSpan.contentEditable = false;
                emailDomainSpan.style.backgroundColor = '#f0f0f0';
                updateEmail();
            }
        });

        // Initial call to set correct state
        updateEmail();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('multiStepForm');

            document.getElementById('verify-otp').addEventListener('click', function () {
                const userEmail = document.getElementById('email').value;
                const otpValue = document.getElementById('otp').value;

                fetch('/verify-otp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify({ otp: otpValue, email: userEmail })
                })
                    .then(res => res.json())
                    .then(data => {
                        const otpMessage = document.getElementById('otp-message');

                        if (data.success) {

                            // OTP section hide
                            const otpSection = document.getElementById('otp-section');
                            if (otpSection) otpSection.style.display = 'none';

                            // Modal show
                            document.getElementById('otpSuccessModal').classList.remove('hidden');
                            document.getElementById('otpSuccessModal').classList.add('flex');

                        } else {
                            otpMessage.innerText = 'Invalid OTP ❌';
                        }
                    })
                    .catch(err => {
                        console.error("Error:", err);
                        document.getElementById('otp-message').innerText = 'Verification failed. Try again.';
                    });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const uploadInput = document.getElementById('design_upload');
            const listDiv = document.getElementById('design-upload-list');

            uploadInput.addEventListener('change', function (e) {
                const files = e.target.files;
                listDiv.innerHTML = ''; // Clear previous list

                if (files.length > 0) {
                    const ul = document.createElement('ul');
                    ul.className = "list-disc list-inside text-sm text-gray-700";

                    Array.from(files).forEach(file => {
                        const li = document.createElement('li');
                        li.textContent = `${file.name} (${Math.round(file.size / 1024)} KB)`;
                        ul.appendChild(li);
                    });

                    listDiv.appendChild(ul);
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            /* ===================== HELPER FUNCTIONS ===================== */
            // 1️⃣ Sabse pehle ye function add kiya taaki password generate ho sake
            function generatePassword() {
                return Math.random().toString(36).slice(-8);
            }

            /* ===================== CITY AUTOCOMPLETE ===================== */
            const cityInput = document.getElementById('city');
            const suggestionsBox = document.getElementById('city-suggestions');

            let cities_form = [];
            let cities_map = {};

            fetch("{{ route('api.get-cities') }}")
                .then(res => res.json())
                .then(data => {
                    cities_form = data.map(city => city.name);
                    data.forEach(city => {
                        cities_map[city.name] = city.id;
                    });
                })
                .catch(err => console.error("City API Error:", err));

            let cityIdInput = document.getElementById('city_id');
            if (!cityIdInput) {
                cityIdInput = document.createElement('input');
                cityIdInput.type = 'hidden';
                cityIdInput.id = 'city_id';
                cityIdInput.name = 'city_id';
                cityInput.parentNode.appendChild(cityIdInput);
            }

            let debounceTimeout;
            cityInput.addEventListener('input', function () {
                const query = this.value.trim().toLowerCase();
                suggestionsBox.innerHTML = '';
                suggestionsBox.classList.add('hidden');

                clearTimeout(debounceTimeout);
                if (query.length < 2) return;

                debounceTimeout = setTimeout(() => {
                    const filtered = cities_form
                        .filter(city => city.toLowerCase().includes(query))
                        .slice(0, 5);

                    if (filtered.length) {
                        suggestionsBox.innerHTML = filtered.map(city =>
                            `<div class="px-4 py-2 cursor-pointer hover:bg-[#e0f2f7]" data-city="${city}">${city}</div>`
                        ).join('');
                        suggestionsBox.classList.remove('hidden');
                    }
                }, 200);
            });

            suggestionsBox.addEventListener('click', function (e) {
                if (e.target.dataset.city) {
                    const selectedCity = e.target.dataset.city;
                    cityInput.value = selectedCity;
                    cityIdInput.value = cities_map[selectedCity] || '';
                    suggestionsBox.classList.add('hidden');
                }
            });

            /* ===================== TRADE SHOW AUTOCOMPLETE ===================== */
            const tradeShowInput = document.getElementById('trade_show_event');
            const tradeShowSuggestions = document.getElementById('trade-show-suggestions');

            let tradeShows = [];
            let tradeShowsMap = {};

            fetch("{{ route('api.get-shows') }}")
                .then(res => res.json())
                .then(data => {
                    tradeShows = data.map(show => show.title);
                    data.forEach(show => {
                        tradeShowsMap[show.title] = show.id;
                    });
                })
                .catch(err => console.error("Trade Show API Error:", err));

            let tradeShowIdInput = document.getElementById('trade_show_id');
            if (!tradeShowIdInput) {
                tradeShowIdInput = document.createElement('input');
                tradeShowIdInput.type = 'hidden';
                tradeShowIdInput.id = 'trade_show_id';
                tradeShowIdInput.name = 'show_id';
                tradeShowInput.parentNode.appendChild(tradeShowIdInput);
            }

            let tradeDebounce;
            tradeShowInput.addEventListener('input', function () {
                const query = this.value.trim().toLowerCase();
                tradeShowSuggestions.innerHTML = '';
                tradeShowSuggestions.classList.add('hidden');

                clearTimeout(tradeDebounce);
                if (query.length < 2) return;

                tradeDebounce = setTimeout(() => {
                    const filtered = tradeShows
                        .filter(show => show.toLowerCase().includes(query))
                        .slice(0, 5);

                    if (filtered.length) {
                        tradeShowSuggestions.innerHTML = filtered.map(show =>
                            `<div class="px-4 py-2 cursor-pointer hover:bg-[#e0f2f7]" data-show="${show}">${show}</div>`
                        ).join('');
                        tradeShowSuggestions.classList.remove('hidden');
                    }
                }, 200);
            });

            tradeShowSuggestions.addEventListener('click', function (e) {
                if (e.target.dataset.show) {
                    const selectedShow = e.target.dataset.show;
                    tradeShowInput.value = selectedShow;
                    tradeShowIdInput.value = tradeShowsMap[selectedShow] || '';
                    tradeShowSuggestions.classList.add('hidden');
                }
            });

            document.addEventListener('click', function (e) {
                if (!cityInput.contains(e.target) && !suggestionsBox.contains(e.target)) {
                    suggestionsBox.classList.add('hidden');
                }
                if (!tradeShowInput.contains(e.target) && !tradeShowSuggestions.contains(e.target)) {
                    tradeShowSuggestions.classList.add('hidden');
                }
            });

            /* ===================== OTP VERIFICATION ===================== */
            document.getElementById('verify-otp').addEventListener('click', function () {
                // User email field se current value uthayenge
                const userEmail = document.getElementById('email').value;

                fetch('/verify-otp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify({
                        otp: document.getElementById('otp').value,
                        email: userEmail
                    })
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            // 1️⃣ Success message dikhayenge
                            const otpMessage = document.getElementById('otp-message');
                            otpMessage.innerHTML =
                                '🎉 <b style="color:green;">OTP Verified! You can now submit the form.</b>';

                            // 2️⃣ "Check Email" ka note add karenge
                            // const checkEmailNote = document.createElement('p');
                            // checkEmailNote.style.color = '#2f855a'; // Green color
                            // checkEmailNote.style.marginTop = '10px';
                            // checkEmailNote.innerText =
                            //     'Your login password and account details have been sent to your registered email address.';
                            // otpMessage.after(checkEmailNote);

                            // 3️⃣ OTP section ko hide kar denge
                            const otpSection = document.getElementById('otp-section');
                            if (otpSection) {
                                otpSection.style.display = 'none';
                            }

                            // 4️⃣ Success section ko hide kar denge
                            const otpSuccessSection = document.getElementById('otp-success-section');
                            if (otpSuccessSection) {
                                otpSuccessSection.style.display = 'none';
                                otpSuccessSection.classList.add('hidden');
                            }

                            // 5️⃣ Submit button show karenge dynamically
                            let submitBtn = document.getElementById('final-submit-btn');
                            if (!submitBtn) {
                                submitBtn = document.createElement('button');
                                submitBtn.type = 'submit';
                                submitBtn.id = 'final-submit-btn';
                                submitBtn.className = 'btn-next px-6 py-3 rounded-md font-semibold mt-4';
                                submitBtn.innerText = 'Submit →';
                                const form = document.getElementById('multi-step-form');
                                if (form) form.appendChild(submitBtn);
                            }

                        } else {
                            document.getElementById('otp-message').innerText = 'Invalid OTP ❌';
                        }
                    })
                    .catch(err => {
                        console.error("OTP Verification Error:", err);
                        document.getElementById('otp-message').innerText =
                            'Verification failed. Try again.';
                    });
            });

        });
    </script>
@endpush