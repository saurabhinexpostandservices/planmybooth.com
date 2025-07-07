{{-- Wrapper --}}
<div class="relative">
    {{-- Banner-section (Lower z-index to avoid overlapping other content) --}}
    <div class="relative z-0">
        <x-inside-custom-exhibition-page.banner-section />
    </div>

    {{-- Body-Section (Ensure it's visible above banner) --}}
    <div class='relative z-10 -mt-32 mb-10 flex flex-col gap-3 bg-[#EFEFEF] bg-opacity-50'>
        <div class='flex flex-col lg:flex-row p-5 gap-5'>
            <section class='w-full lg:w-2/3 mx-auto'>
                <section>
                    <div
                        class="flex flex-col md:flex-row gap-5 group hover:scale-105 duration-500 bg-[#EFEFEF] border border-gray-200 rounded-lg shadow p-5">
                        <!-- Image Section -->
                        <div class="relative w-full md:w-1/3 p-5 flex justify-center items-center">
                            <img src="{{ $standbuilder->logo }}" alt="{{ $standbuilder->title }}"
                                class="w-full h-fit object-cover rounded-t-lg" />
                        </div>

                        <!-- Content Section -->
                        <div class="p-4 w-full md:w-2/3">
                            <h1 class="text-xl font-bold my-2">{{ $standbuilder->title }}</h1>
                            <span class="text-xs p-1 text-white bg-[#AE2333] rounded-2xl px-2">Founded :
                                {{ $standbuilder?->founded_year }}</span>
                            <p class="text-sm text-gray-600 my-5"><i class="fa fa-map-marker text-[#AE2333]"
                                    aria-hidden="true"></i> {{ $standbuilder?->city?->name }}, {{ $standbuilder?->country?->name }}</p>
                        </div>
                    </div>

                    <div class='flex flex-col gap-3 lg:px-10 bg-white p-5'>
                        <h3
                            class="text-[#2E627D] text-xl md:text-2xl lg:text-3xl xl:text-4xl border-b-4 pb-2 font-semibold">
                            Description</h3>
                        <div>
                            {!! $standbuilder->description !!}
                        </div>
                    </div>

                    <div class='flex flex-col gap-3 lg:px-10 bg-white p-5'>
                        <h3
                            class="text-[#2E627D] text-xl md:text-2xl lg:text-3xl xl:text-4xl border-b-4 pb-2 font-semibold">
                            SERVICES</h3>
                        <div>
                            <ul class="grid grid-cols-2 gap-5">
                                @foreach ($standbuilder->services as $service)
                                    <li class="capitalize">
                                        <i class="fa fa-check-square text-[#AE2333] cao"></i>
                                        {{ $service }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    {{-- <div class='flex flex-col gap-3 lg:px-10 bg-white p-5'>
                        <h3
                            class="text-[#2E627D] text-xl md:text-2xl lg:text-3xl xl:text-4xl border-b-4 pb-2 font-semibold">
                            LOCATION</h3>
                        <div>
                            <ul class="grid grid-cols-2 gap-5">
                                @foreach ($standbuilder->service_cities as $location)
                                    <li class="capitalize"><i class="fa fa-map-marker text-[#AE2333]"
                                            aria-hidden="true"></i> {{ $location }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div> --}}
                </section>
            </section>
            <section class='w-full flex flex-col gap-5 mx-auto lg:w-80'>
                {{-- <x-inside-blog-page.sidebar-form /> --}}
            </section>
        </div>
    </div>
</div>
