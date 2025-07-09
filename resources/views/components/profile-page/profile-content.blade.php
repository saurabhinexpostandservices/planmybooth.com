<div class="relative bg-fixed bg-[#176B87]/70  mt-[-80px] min-h-screen p-10 py-20 md:py-10">

    <div class="max-w-3xl mx-auto my-20 md:my-28 bg-white rounded-lg shadow-lg p-6 font-poppins">

        <!-- Header Section -->
        <div class="flex border-b border-gray-200">
            <button id="myProfileBtn" class="py-2 px-4 text-blue-500 border-b-2 border-blue-500 focus:outline-none">My
                Profile</button>
            <button id="editProfileBtn" class="py-2 px-4 text-gray-600 hover:text-blue-500 focus:outline-none">Edit
                Profile</button>
            <button id="changePasswordBtn" class="py-2 px-4 text-gray-600 hover:text-blue-500 focus:outline-none">Change
                Password</button>
        </div>

        <!-- Content Section -->
        <div class="mt-6">

            <!-- My Profile -->
            <div id="myProfileSection">
                <h2 class="text-lg font-semibold mb-4">Contact data</h2>
                <p class="text-gray-700">John Doe</p>
                <p class="text-gray-700">johndoe@gmail.com</p>
                <p class="text-gray-700">+91 9876543210</p>
                <button class="mt-4 px-4 py-2 bg-[#0087B8] text-white border rounded  hover:bg-[#006b91]"
                    onclick="document.getElementById('editProfileBtn').click();">Edit »</button>
            </div>

            <!-- Edit Profile -->
            <div id="editProfileSection" class="hidden">
                <h2 class="text-lg font-semibold mb-4">Contact Information</h2>
                <div class="grid grid-cols- gap-4">
                    <input type="text" placeholder="Full Name" class="border p-2 rounded">
                    <input type="email" placeholder="Email" class="border p-2 rounded">
                    <input type="text" placeholder="Phone" class="border p-2 rounded">

                </div>
                <button class="mt-6 px-6 py-2 bg-[#0087B8] text-white border rounded  hover:bg-[#006b91]">Save »</button>
            </div>

            <!-- Change Password -->
            <div id="changePasswordSection" class="hidden">
                <h2 class="text-lg font-semibold mb-4">Change Password</h2>
                <input type="password" placeholder="New Password" class="border p-2 rounded w-full mb-4">
                <input type="password" placeholder="Repeat Password" class="border p-2 rounded w-full mb-4">
                <button class="px-6 py-2 bg-[#0087B8] text-white border rounded  hover:bg-[#006b91]">Save »</button>
            </div>

        </div>

    </div>

    <script>
        const myProfileBtn = document.getElementById('myProfileBtn');
        const editProfileBtn = document.getElementById('editProfileBtn');
        const changePasswordBtn = document.getElementById('changePasswordBtn');

        const myProfileSection = document.getElementById('myProfileSection');
        const editProfileSection = document.getElementById('editProfileSection');
        const changePasswordSection = document.getElementById('changePasswordSection');

        function hideAll() {
            myProfileSection.classList.add('hidden');
            editProfileSection.classList.add('hidden');
            changePasswordSection.classList.add('hidden');

            myProfileBtn.classList.remove('text-blue-500', 'border-blue-500');
            editProfileBtn.classList.remove('text-blue-500', 'border-blue-500');
            changePasswordBtn.classList.remove('text-blue-500', 'border-blue-500');

            myProfileBtn.classList.add('text-gray-600');
            editProfileBtn.classList.add('text-gray-600');
            changePasswordBtn.classList.add('text-gray-600');
        }

        myProfileBtn.addEventListener('click', () => {
            hideAll();
            myProfileSection.classList.remove('hidden');
            myProfileBtn.classList.add('text-blue-500', 'border-blue-500');
        });

        editProfileBtn.addEventListener('click', () => {
            hideAll();
            editProfileSection.classList.remove('hidden');
            editProfileBtn.classList.add('text-blue-500', 'border-blue-500');
        });

        changePasswordBtn.addEventListener('click', () => {
            hideAll();
            changePasswordSection.classList.remove('hidden');
            changePasswordBtn.classList.add('text-blue-500', 'border-blue-500');
        });
    </script>

</div>
