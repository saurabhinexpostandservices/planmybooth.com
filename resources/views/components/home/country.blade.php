<div class="relative bg-bottom bg-no-repeat font-poppins">
    <div class="px-[5%] py-10 md:py-20">
        <div class="">
            <h2
                class="text-[#124E65] text-2xl md:text-3xl lg:text-4xl font-semibold text-center w-full md:w-[80%] mx-auto font-serif">
                Choose a Country to <span class="bg-[#64CCC5] text-white px-2">Find Your Ideal Stand</span> Builder
            </h2>
            <p class="text-center text-base md:text-xl py-5">
                Explore top exhibition stand builders in more than 50 countries
            </p>
        </div>

        <!-- Country Cards -->
        <div id="country-cards"
            class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 md:gap-x-8 gap-x-5 gap-y-5 md:gap-y-8 py-10 md:px-10 justify-center ">

            @foreach ($countries as $country)
                <a href="{{ $country['slug'] }}"
                    class="relative group country-card flex items-center justify-between px-4 py-2 rounded-lg 
                    bg-[#145D76] bg-[length:200%_auto] hover:bg-[position:right_center] 
                    text-white text-center uppercase transition-all duration-700 ease-in-out text-sm">
                    <span class="font-semibold py-3">{{ $country['country'] }}</span>
                    <img src="{{ $country['featured_image'] }}" class="w-7 h-5">
                    <div
                        class="absolute -right-20 left-16 md:left-1/2 -translate-x-1/2 bottom-full mb-1 w-max px-3 py-1 bg-black text-white text-xs rounded opacity-0 invisible transition-opacity duration-300 ease-in-out group-hover:opacity-100 group-hover:visible whitespace-nowrap">
                        {{ $country['country'] ?? $country['country'] }}
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Vendor Registration Button -->
        <div class="mx-auto text-center p-5 px-16">
            <a href="#"
                class="bg-[#176B87] text-white rounded-lg px-8 py-3 font-semibold hover:bg-[#64CCC5] hover:text-black transition duration-500">
                Vendor Registration
            </a>
        </div>
    </div>
</div>
