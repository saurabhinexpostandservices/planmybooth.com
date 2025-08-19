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
                                <img
                                    class="w-1/3 mx-auto rounded-full absolute -right-8 -top-8 rotate-[45] animate-bounce"
                                    src="/assets/icons/bronze.png" alt="bronze" />
                        </div>

                        <!-- Content Section -->
                        <div class="p-4 w-full md:w-2/3">
                            <h1 class="text-xl font-bold my-2">{{ $standbuilder->title }}</h1>
                            <span class="text-xs p-1 text-white bg-[#AE2333] rounded-2xl px-2">Founded :
                                {{ $standbuilder?->founded_year }}</span>
                            <p class="text-sm text-gray-600 my-5"><i class="fa fa-map-marker text-[#AE2333]"
                                    aria-hidden="true"></i> {{ $standbuilder?->city?->name }},
                                {{ $standbuilder?->country?->name }}</p>
                            <span class="flex items-center my-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= ($standbuilder->rating ?? 0))
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <polygon
                                                points="9.9,1.1 7.6,6.6 1.6,7.5 6,11.9 4.8,17.8 9.9,14.9 15,17.8 13.8,11.9 18.2,7.5 12.2,6.6 " />
                                        </svg>
                                    @else
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                                            <polygon
                                                points="9.9,1.1 7.6,6.6 1.6,7.5 6,11.9 4.8,17.8 9.9,14.9 15,17.8 13.8,11.9 18.2,7.5 12.2,6.6 " />
                                        </svg>
                                    @endif
                                @endfor
                                <span class="ml-2 text-sm text-gray-600">
                                    | ({{ $standbuilder->review_count ?? 0 }}) Reviews
                                </span>
                            </span>
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

                    <div class='flex flex-col gap-3 lg:px-10 bg-white p-5'>
                        <h3
                            class="text-[#2E627D] text-xl md:text-2xl lg:text-3xl xl:text-4xl border-b-4 pb-2 font-semibold">
                            Portfolio
                        </h3>
                        <div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                                @php
                                    $galleryImages = json_decode($standbuilder->gallery, true);
                                @endphp

                                @if (!empty($galleryImages) && is_array($galleryImages))
                                    @foreach ($galleryImages as $image)
                                        <img src="{{ $image }}" alt="Portfolio Image" class="w-full h-48 object-cover rounded-lg shadow" />
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class='flex flex-col gap-3 lg:px-10 bg-white p-5'>
                        <h3
                            class="text-[#2E627D] text-xl md:text-2xl lg:text-3xl xl:text-4xl border-b-4 pb-2 font-semibold">
                            Video
                        </h3>
                        <div class="w-full flex justify-center">
                            <iframe
                                width="560" 
                                height="315"
                                src="{{$standbuilder->video}}"
                                title="YouTube Video"
                                className="w-full h-full"
                                frameBorder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowFullScreen
                            ></iframe>
                        </div>
                    </div>
                </section>
            </section>
            <section class='w-full flex flex-col gap-5 mx-auto lg:w-80'>
                <x-inside-blog-page.sidebar-form />
            </section>
        </div>
    </div>
</div>
