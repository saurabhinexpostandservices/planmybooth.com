

<!-- ================= Banner Section ================= -->
<section class="relative w-full h-[250px] md:h-[350px] flex items-center justify-center text-center">

    <!-- Background Image -->
    <img src="https://images.pexels.com/photos/460672/pexels-photo-460672.jpeg"
        class="absolute inset-0 w-full h-full object-cover" />

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Content -->
    <div class="relative z-10 px-4">
        <h1 class="text-white text-3xl md:text-5xl font-bold">
            Explore Countries
        </h1>
        <p class="text-gray-200 mt-3 text-sm md:text-lg">
            Find top exhibition stand builders worldwide
        </p>
    </div>
</section>

<!-- ================= Country Section ================= -->
<div class="relative bg-bottom bg-no-repeat font-poppins">
    <div class="px-[5%] py-10 md:py-20">

        {{-- <div>
            <h2
                class="text-[#124E65] text-2xl md:text-3xl lg:text-4xl font-semibold text-center w-full md:w-[80%] mx-auto">
                Choose a Country to <span class="bg-[#64CCC5] text-white px-2">Find Your Ideal Stand</span> Builder
            </h2>

            <p class="text-center text-base md:text-xl text-gray-700 py-5">
                Explore top exhibition stand builders in more than 50 countries
            </p>
        </div> --}}

        <!-- Country Cards -->
        <div id="country-cards"
            class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 md:gap-x-8 gap-x-5 gap-y-5 md:gap-y-8 py-10 md:px-10">

            @foreach ($countries as $country)
                <a href="{{ route('page.country', $country['slug']) }}"
                    class="relative group flex items-center justify-between px-4 py-2 rounded-lg 
                    bg-[#145D76] bg-[length:200%_auto] hover:bg-[position:right_center] 
                    text-white uppercase transition-all duration-700 text-sm">

                    <span class="font-semibold py-3">{{ $country['country'] }}</span>

                    <img src="{{ $country['featured_image'] }}"
                        alt="{{ $country['country'] }}"
                        class="w-7 h-5 object-cover">

                    <!-- Tooltip -->
                    <div
                        class="absolute -right-20 left-16 md:left-1/2 -translate-x-1/2 bottom-full mb-1 w-max px-3 py-1 bg-black text-white text-xs rounded opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                        {{ $country['country'] }}
                    </div>

                </a>
            @endforeach

        </div>
    </div>
</div>

