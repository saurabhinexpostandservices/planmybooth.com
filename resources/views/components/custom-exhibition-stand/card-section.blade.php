<div>
    <div class="grid grid-cols-1 gap-10 m-5 md:m-10 lg:mx-20 font-poppins">

        @foreach ($standbuilders as $item)
             <!-- Static Card 1 -->
            <section class="flex flex-col md:flex-row gap-5 group bg-[#2E7A93] border border-gray-200 rounded-lg shadow ">
                <!-- Image Section -->
                <div class="relative w-full md:w-1/4 p-5 h-full flex justify-center items-center">
                    <img src="{{ $item['logo'] }}" alt="{{ $item['title'] }}" class="w-fit h-fit object-cover rounded-lg bg-white" />
                </div>

                <!-- Content Section -->
                <div class="p-4 w-full md:w-2/3">
                    <h2 class="text-xl md:text-2xl font-bold my-2 text-white">{{ $item['title'] }}</h2>
                    <span class="text-xs p-1 text-white bg-[#AE2333]">{{ $item['country']?->name }}</span>
                    <span class="flex items-center my-2">
                        @for ($i = 1; $i <= 5; $i++)
                            @if($i <= $item['rating'])
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><polygon points="9.9,1.1 7.6,6.6 1.6,7.5 6,11.9 4.8,17.8 9.9,14.9 15,17.8 13.8,11.9 18.2,7.5 12.2,6.6 "/></svg>
                            @else
                                <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20"><polygon points="9.9,1.1 7.6,6.6 1.6,7.5 6,11.9 4.8,17.8 9.9,14.9 15,17.8 13.8,11.9 18.2,7.5 12.2,6.6 "/></svg>
                            @endif
                        @endfor
                    </span>
                    <p class="text-sm text-white my-5">
                        {{ Str::limit(strip_tags($item?->description), 200) }}
                    </p>
                    <span class="text-xs p-1 text-white bg-[#AE2333]">Since: {{ $item['founded_year'] }}</span>
                    <div class="flex gap-5">
                        <a href="{{ route('stand-builder.show', $item['username']) }}">
                            <button class="mt-4 px-2 xl:px-4 py-1 xl:py-2 duration-500 text-white text-xs xl:text-sm rounded border-2 border-white font-semibold cursor-pointer">
                                Know More
                            </button>
                        </a>
                        <a href="{{ route('stand-builder.show', $item['username']) }}">
                            <button class="mt-4 px-2 xl:px-4 py-1 xl:py-2 duration-700 bg-white border-2 border-white text-[#124E65] text-xs xl:text-sm font-semibold rounded cursor-pointer">
                                Request Quotes
                            </button>
                        </a>
                    </div>
                </div>
            </section>
        @endforeach

    </div>

    <!-- Pagination Component -->
    <div class="mt-6 flex justify-center">
        {{ $standbuilders->links('pagination::tailwind') }}
    </div>
</div>
