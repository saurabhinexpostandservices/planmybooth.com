<div class="flex justify-center items-center py-10 font-lato">
    <div class="flex flex-col gap-5 w-full md:w-[90%] border-2 rounded-xl bg-[#F7F7F7]">
        <h2 class="p-5 text-xl md:text-2xl lg:text-3xl text-zinc-500 font-semibold">
            Exhibition Stand Manufacturers In <span class="text-[#AE2333]">
                @if ($page->type === 'country')
                    {{ $page?->country?->name}}
                @else
                    {{ $page?->city?->name}}
                @endif
            </span>
        </h2>
        <hr class="border-2" />
        <div id="cardContainer" class="flex flex-col gap-5 md:p-5">
            @if ($standbuilders->isEmpty())
                <div class="flex justify-center items-center p-5">
                    <h3 class="text-xl md
                :text-2xl text-zinc-500 font-semibold">No Stand Builders Found
                    </h3>
                </div>
            @endif
            @foreach ($standbuilders as $standbuilder)
                <section
                    class="flex flex-col md:flex-row bg-white md:p-5 hover:scale-95 transition duration-500 ease-in-out">
                    <div class="px-5 md:px-0 flex justify-center items-center">
                        <img class="w-[200px] h-[150px] md:w-[250px] md:h-[180px] object-contain"
                            src="{{ $standbuilder?->logo }}" alt="{{ $standbuilder?->title }}" />
                    </div>
                    <div class="w-full px-5 flex flex-col gap-3 md:w-[70%]">
                        <div class="flex flex-col">
                            <div class="flex flex-col-reverse md:flex-row justify-between">
                                <a href="#">
                                    <h3 class="text-lg md:text-xl font-semibold hover:text-blue-500">
                                        {{ $standbuilder?->title }}</h3>
                                </a>
                                <span
                                    class="w-full md:w-fit px-3 pt-2 bg-blue-100 text-blue-800 hover:bg-blue-300 hover:text-white text-sm rounded-md duration-500 ease-in-out cursor-pointer capitalize">
                                    @if ($page?->type == 'city')
                                        {{ $page?->city?->name  }},{{ $page?->country?->name }}
                                    @else
                                        {{ $page?->country->name }}
                                    @endif
                                </span>
                            </div>
                            <h4 class="text-xs md:text-sm text-red-600">{{ $standbuilder?->title }}</h4>
                        </div>
                        <p class="text-zinc-500 text-xs md:text-sm">
                            {{ Str::limit(strip_tags($standbuilder?->description), 200) }}</p>
                        <p class="text-zinc-900">Scince : {{ $standbuilder?->founded_year }}</p>
                        <div class="flex flex-col md:flex-row justify-between gap-3 py-5 md:py-0">
                            <a href="{{ route('stand-builder.show', $standbuilder?->username) }}"
                                class="border-2 border-[#2F556A] hover:bg-[#2F556A] text-[#2F556A] hover:text-white p-1 w-full md:w-[40%] text-sm font-semibold rounded-lg transition duration-500 ease-in-out text-center">
                                Know More
                            </a>
                            <button
                                class="uppercase bg-[#2792C5] hover:bg-white text-white hover:text-[#2792C5] p-1 border-2 border-[#2792C5] w-full md:w-[40%] text-sm font-semibold rounded-lg transition duration-500 ease-in-out">
                                <a href="{{ route('stand-builder.show', $standbuilder?->username) }}"> Request for booth quotations </a>
                            </button>
                        </div>
                    </div>
                </section>
            @endforEach
        </div>
        <div class="justify-center items-center my-5 flex gap-3">
            {{ $standbuilders->withQueryString()->links('pagination::tailwind') }}
        </div>
    </div>
</div>
