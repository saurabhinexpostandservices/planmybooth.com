<div>
    <div class="grid grid-cols-1 gap-10 m-5 md:m-10 lg:mx-20 font-poppins">

        <!-- Static Card 1 -->
        <section class="flex flex-col md:flex-row gap-5 group bg-[#2E7A93] border border-gray-200 rounded-lg shadow ">
            <!-- Image Section -->
            <div class="relative w-full md:w-1/4 p-5 h-full flex justify-center items-center">
                <img src="/assets/logo/kmr-logo.png" alt="Company One" class="w-fit h-fit object-cover rounded-lg bg-white" />
            </div>

            <!-- Content Section -->
            <div class="p-4 w-full md:w-2/3">
                <h2 class="text-xl md:text-2xl font-bold my-2 text-white">Company One</h2>
                <span class="text-xs p-1 text-white bg-[#AE2333]">USA</span>
                <p class="text-sm text-white my-5">
                    We are a leading exhibition stand builder based in the USA with over 15 years of experience creating customized booths for international trade fairs.
                </p>
                <span class="text-xs p-1 text-white bg-[#AE2333]">Since: 2009</span>
                <div class="flex gap-5">
                    <a href="#">
                        <button class="mt-4 px-2 xl:px-4 py-1 xl:py-2 duration-500 text-white text-xs xl:text-sm rounded border-2 border-white font-semibold">
                            Know More
                        </button>
                    </a>
                    <a href="#">
                        <button class="mt-4 px-2 xl:px-4 py-1 xl:py-2 duration-700 bg-white border-2 border-white text-[#124E65] text-xs xl:text-sm font-semibold rounded">
                            Request Quotes
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <!-- Static Card 2 -->
        <section class="flex flex-col md:flex-row gap-5 group bg-[#2E7A93] border border-gray-200 rounded-lg shadow ">
            <!-- Image Section -->
            <div class="relative w-full md:w-1/4 p-5 h-full flex justify-center items-center">
                <img src="/assets/logo/sweets.webp" alt="Company Two" class="w-fit h-fit object-cover rounded-lg" />
            </div>

            <!-- Content Section -->
            <div class="p-4 w-full md:w-2/3">
                <h2 class="text-xl md:text-2xl font-bold my-2 text-white">Company Two</h2>
                <span class="text-xs p-1 text-white bg-[#AE2333]">Germany</span>
                <p class="text-base md:text-lg text-white  my-5">
                    Based in Berlin, we provide innovative and sustainable exhibition solutions across Europe, specializing in modular stand setups and 3D booth experiences.
                </p>
                <span class="text-xs p-1 text-white bg-[#AE2333]">Since: 2015</span>
                <div class="flex gap-5">
                    <a href="#">
                        <button class="mt-4 px-2 xl:px-4 py-1 xl:py-2 duration-500 text-white text-xs xl:text-sm rounded border-2 border-white font-semibold">
                            Know More
                        </button>
                    </a>
                    <a href="#">
                        <button class="mt-4 px-2 xl:px-4 py-1 xl:py-2 duration-700 bg-white border-2 border-white text-[#124E65] text-xs xl:text-sm font-semibold rounded">
                            Request Quotes
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <!-- Add more static cards below as needed -->

    </div>

    <!-- Pagination Component -->
    {{-- <div class="mt-6 flex justify-center">
        {{ $items->links('pagination::tailwind') }}
    </div> --}}
</div>
