<x-layout.public>
    <x-slot name="title">{{ $show?->meta_title }}</x-slot>
    <x-slot name="meta_description">{{ $show?->meta_description }}</x-slot>
    <x-slot name="featured_image">{{ $show?->logo }}</x-slot>

    <!-- Banner Section -->
    <div class="relative bg-[#F6F6F7] bg-cover bg-center mb-10 font-lato"
        style="background-image: url('/assets/banner/home_banner.webp')">
        <div
            class="bg-[#176B87]/90 flex justify-center items-center min-h-[30rem] mt-[-80px] sm:min-h-[30rem] md:min-h-[40rem] text-center transition-all px-3 sm:px-5">
            <div class="text-white max-w-[90%] md:max-w-[75%] mx-auto">
                <h1
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-shadow-md font-bold break-words whitespace-normal leading-tight">
                    {{ \Illuminate\Support\Str::words($show->meta_title, 15, '...') }}
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl pt-3 sm:pt-5">
                    {{ date('d M, Y', strtotime($show?->start_date)) }} -
                    {{ date('d M, Y', strtotime($show?->end_date)) }}
                    <br />
                    {{ $show?->city?->name }}, {{ $show?->country?->name }}
                </p>

                <!-- Countdown Timer -->
                <div class="flex justify-center items-center mt-6 sm:mt-8">
                    <div
                        class="relative w-44 h-16 sm:w-56 sm:h-20 bg-gradient-to-tl from-[#2792C5] to-red-500 shadow-xl">
                        <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-60">
                            <span id="countdownTimer" class="text-white text-lg sm:text-2xl font-bold">Loading...</span>
                        </div>
                        <div class="absolute inset-0 border-8 border-t-8 border-[#2792C5] animate-pulse">
                            <span class="text-transparent">Loading...</span>
                        </div>
                    </div>
                </div>

                <!-- Feature Image -->
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2">
                    <img class="shadow-sm shadow-[#9eb9c6] hover:shadow-[#2792C5] rounded-full w-20 h-20 sm:w-20 sm:h-20 md:w-28 md:h-28"
                        src="{{ $show?->logo }}" alt="{{ $show->title }}">
                </div>
            </div>
        </div>
    </div>

    <!-- Image Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-16 md:mt-20 p-5">
        <img src="/assets/trade-shows/ex1.webp" alt="Trade Show Example 1"
            class="w-full h-auto object-cover hover:scale-105 duration-500 shadow-md hover:shadow-xl shadow-black"
            width="300" height="150">
        <img src="/assets/trade-shows/ex2.webp" alt="Trade Show Example 2"
            class="w-full h-auto object-cover hover:scale-105 duration-500 shadow-md hover:shadow-xl shadow-black"
            width="300" height="150">
        <img src="/assets/trade-shows/ex3.webp" alt="Trade Show Example 3"
            class="w-full h-auto object-cover hover:scale-105 duration-500 shadow-md hover:shadow-xl shadow-black"
            width="300" height="150">
        <img src="/assets/trade-shows/ex4.webp" alt="Trade Show Example 4"
            class="w-full h-auto object-cover hover:scale-105 duration-500 shadow-md hover:shadow-xl shadow-black"
            width="300" height="150">
    </div>


    {{-- Body-Section --}}
    <div class=' mb-10 md:mb-5 flex flex-col gap-3 bg-[#EFEFEF] bg-opacity-50'>
        <div class='flex flex-col lg:flex-row p-5 gap-5'>
            <section class='w-full lg:w-2/3 mx-auto'>
                <section>
                    <div class='flex flex-col gap-3 lg:px-10'>
                        <h1
                            class='text-[#3D94AC] text-center md:text-start text-2xl md:text-3xl lg:text-4xl font-semibold py-5 md:py-10'>
                            {{ $show->title }}
                        </h1>
                        {!! $show->content !!}
                    </div>
                </section>
            </section>
            <section class='w-full flex flex-col gap-5 mx-auto lg:w-80'>
                <x-inside-blog-page.sidebar-form />
                <x-inside-tradeshow-page.contact-info :show="$show" />
            </section>
        </div>

        {{-- <div>
            <x-inside-tradeshow-page.related-upcoming-trade-shows />
        </div> --}}
        <div class="bg-black">
            <x-inside-tradeshow-page.available-stand-builder />
        </div>
    </div>



    <!-- Countdown Timer Script -->

    <script>
        // Countdown timer function
        const targetDate = new Date("{{ $show->start_date }}").getTime();
        const now = new Date().getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance > 0) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("countdownTimer").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            } else {
                document.getElementById("countdownTimer").innerHTML = "Event Over";
                clearInterval(timerInterval);
            }
        }

        const timerInterval = setInterval(updateCountdown, 1000);
    </script>

</x-layout.public>
