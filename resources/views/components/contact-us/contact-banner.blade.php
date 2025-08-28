<div class="relative bg-cover bg-center font-poppins" style="background-image: url('/assets/banner/bg2.png');">
    <!-- Container for centering the text -->
    <div
        class="flex flex-col justify-center items-center gap-5 md:gap-10 min-h-[45rem] md:min-h-[40rem] text-center bg-gradient-to-b from-[#176B87] to-[#176B87]/70 [transition:background_0.3s,_border-radius_0.3s,_opacity_0.3s] mt-[-100px] p-5 pt-20 md:px-10">
        <div class="text-[#D4D9D5] px-5">
            <h1
                class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-serif font-semibold [text-shadow:4px_4px_black]">
                Contact Us
            </h1>
        </div>
          <div class="w-full md:w-[60%]">
        <div class="py-10 md:py-5 flex justify-center items-center gap-5">
            <div class="w-28">
                <img class="w-full" src="/assets/icons/chat1.gif" alt="chat" />
            </div>
            <div class="text-white flex flex-col gap-2">
                <h2 class="text-lg md:text-xl lg:text-2xl text-start font-semibold font-serif">
                    Tell Us About Your Requirements
                </h2>
                <p class="text-start">
                    Fill out the inquiry form given and tell us about your event, stand size, stand design, and budget.
                </p>
            </div>
        </div>

        <div class="py-10 md:py-5 flex justify-center items-center gap-5">
            <div class="w-28">
                <img class="w-full rounded-full" src="/assets/icons/connection.gif" alt="connection" />
            </div>
            <div class="text-white flex flex-col gap-2">
                <h2 class="text-lg md:text-xl lg:text-2xl text-start font-semibold font-serif">
                    We Connect With the Right Service Provider
                </h2>
                <p class="text-start">
                    We will connect you with the best exhibition stand contractor based on your specifications.
                </p>
            </div>
        </div>
    </div>

    <div>
        {{-- <x-inside-tradeshow-page.three-step-form /> --}}
        <a href="{{ route('contact-us') }}">
            <button
                class="md:mt-4 px-2 xl:px-4 py-1 xl:py-2 duration-500 bg-[#64CCC5] border-2 border-white text-white text-xs xl:text-sm font-medium rounded-lg">
                Request Quotes
            </button>
        </a>
    </div>
    </div>
</div>
