
<div class="relative bg-bottom bg-no-repeat bg-fixed font-poppins" id="blogPage"
    style="background-image: url('{{ asset('assets/banner/city_bg.webp') }}');">
<div class="bg-[#2F556A] flex flex-col mt-[-80px] min-h-[30rem] md:min-h-[50rem] md:flex-row gap-5 md:p-10 lg:p-20 justify-center items-center font-lato">
    <!-- First Section -->
    <section class="w-full md:w-[90%] mx-auto flex flex-col justify-center items-center">
        <h1 class="text-white text-xl md:text-2xl lg:text-3xl xl:text-4xl tracking-wide text-center font-bold">
            {{ $page->title }}
            <p class="text-[#EF4444]">{{ $page?->country?->name }}</p>
        </h1>

        <div class="w-full md:w-[80%]">

            <!-- First Step Section -->
            <div class="py-10 md:py-5 md:pt-10 flex justify-center items-center gap-3">
                <div class="w-28">
                    <img class="w-full" alt="chat" src="/assets/icons/chat1.gif" width="100" height="50" />
                </div>
                <div class="text-white flex flex-col gap-3">
                    <h2 class="text-lg md:text-xl lg:text-2xl font-semibold">
                        Tell Us About Your Requirements
                    </h2>
                    <p>
                        Fill out the inquiry form given and tell us about your event, stand size, stand design, and
                        budget.
                    </p>
                </div>
            </div>

            <!-- Second Step Section -->
            <div class="py-10 md:py-5 flex justify-center items-center gap-3">
                <div class="w-28">
                    <img class="w-full rounded-full" alt="connection" src="/assets/icons/connection.gif" width="100"
                        height="50" />
                </div>
                <div class="text-white flex flex-col gap-3">
                    <h2 class="text-lg md:text-xl lg:text-2xl font-semibold">
                        We Connect With the Right Service Provider
                    </h2>
                    <p>
                        We will connect you with the best exhibition stand contractor based on your specifications.
                    </p>
                </div>
            </div>
        </div>
        <div>
            {{-- <x-inside-tradeshow-page.three-step-form /> --}}
            <a href="">
                <button
                    class="mt-4 px-2 xl:px-4 py-1 xl:py-2 duration-500 bg-[#269BD2] border-2 border-[#2791C4] text-white text-xs xl:text-sm font-medium rounded hover:bg-[#305468]">
                    Request Quotes
                </button>
            </a>
        </div>
    </section>
</div>
</div>