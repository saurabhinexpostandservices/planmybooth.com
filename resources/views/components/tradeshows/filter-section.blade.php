<div
    class="bg-[#176B87]/90 min-h-[40rem] md:min-h-[45rem] mt-[-80px] flex flex-col gap-5 p-5 py-16 md:p-10 justify-center  font-poppins">

    <div class="text-center">
        <h1 class="text-2xl md:text-3xl lg:text-4xl text-white pt-16 py-5 font-serif font-bold">
            Upcoming Trade Shows
        </h1>
        <p class="p-5 text-base xl:text-lg text-center text-white lg:w-[90%] mx-auto">
            Here, we have compiled trade shows across the world. Whichever industry you belong to, simply select your
            industry, country, and city. Get your hands on this trade show guide and pick the best trade show as per your industry to exhibit in.
        </p>
    </div>

    <!-- Form Section -->
    <form action="" method="GET" id="filterForm" class="px-5 md:px-1">
        <div class="">
            <!-- Fair Name Input -->
            <div class="w-full  mt-3 pt-1 flex flex-col justify-center items-center">
                {{-- <label class=" text-white font-bold mb-2">Serach By Title </label> --}}
                <input type="text" name="title" id="fairName" placeholder="Search by title"
                    class="p-2 border rounded bg-white w-1/3" />
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center items-center p-2 md:p-5 text-sm">
            <button type="submit"
                class="bg-[#315F72] text-white border border-white text-center uppercase transition-all duration-700 ease-in-out rounded-lg px-8 py-3">
                Find
            </button>
        </div>
    </form>
</div>
