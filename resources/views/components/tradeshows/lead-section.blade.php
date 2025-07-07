<div class="px-4 sm:px-6 md:px-10 lg:px-20 py-10 font-poppins">
    <div class="text-center">
        <h2 class="text-xl sm:text-2xl md:text-3xl xl:text-4xl font-semibold font-serif text-[#124E65] pb-3 pt-5">
            Latest Leads For Europe
        </h2>
        <p class="text-sm sm:text-base md:text-lg text-gray-700 pb-5">
            Here are a few enquiries that we have received.
        </p>
    </div>

    <div class="flex flex-col bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Table Header -->
        <div class="hidden md:grid grid-cols-[60px_2fr_2fr_2fr_1fr] bg-[#124E65] lg:text-center text-white py-2 px-4">
            <span class="text-sm lg:text-base">Rank</span>
            <span class="text-sm lg:text-base">Event Name</span>
            <span class="text-sm lg:text-base">Event Date</span>
            <span class="text-sm lg:text-base">Place</span>
            <span class="text-sm lg:text-base">Category</span>
        </div>

        @foreach ($shows as $item)
            <div
                class="grid grid-cols-2 md:grid-cols-[60px_2fr_2fr_2fr_1fr] gap-4 lg:text-center items-center border-b-4 last:border-none p-4">
                <div class="md:hidden font-semibold text-gray-500">Rank:</div>
                <div class="text-[#124E65] font-bold">{{ $loop->index + 1 }}</div>

                <div class="md:hidden font-semibold text-gray-500">Event Name:</div>
                <div class="flex items-center space-x-2 md:col-span-1">
                    <img src="{{ $item->featureImageUrl }}" alt="{{ $item->title }} logo"
                        class="w-10 h-10 rounded-full" />
                    <span class="text-sm xl:text-base truncate">{{ Str::limit(strip_tags($item->title), 30) }}</span>
                </div>

                <div class="md:hidden font-semibold text-gray-500">Event Date:</div>
                <div class="text-sm xl:text-base text-gray-700 truncate">
                    {{ date('d M, Y', strtotime($item->start_date)) }} -
                    {{ date('d M, Y', strtotime($item->end_date)) }}
                </div>

                <div class="md:hidden font-semibold text-gray-500">Place:</div>
                <div class="text-sm xl:text-base text-gray-700 truncate">{{ $item->city }}, {{ $item->country }}</div>

                <div class="md:hidden font-semibold text-gray-500">Category:</div>
                <div class="text-xs xl:text-sm">
                    <a href=""
                        class="bg-[#315F72] text-white text-center uppercase transition-all duration-700 ease-in-out rounded-lg px-11 py-3">
                        Details
                    </a>
                </div>
            </div>
        @endforeach

        <!-- Pagination -->
        <div class="flex justify-center items-center p-5 md:p-10 text-sm">
            {{ $shows->links() }}
        </div>
    </div>

</div>
