<x-layout.public>
    <x-slot name="title">Blogs | Planmybooth</x-slot>
    <x-slot name="meta_description">Read the latest blogs, tips, and updates from Planmybooth to help you plan and manage
        your events more effectively.</x-slot>
    <x-slot name="featured_image"></x-slot>


    <div class="relative bg-bottom bg-no-repeat bg-fixed font-poppins"
        style="background-image: url('{{ asset('assets/banner/city_bg.webp') }}');">
        {{-- heading-section --}}
        <section
            class="flex flex-col justify-center items-center gap-5 md:gap-10 min-h-[30rem] md:min-h-[40rem] text-center bg-[#176B87]/90 mt-[-100px] p-5">
            <h2 class="text-white font-serif font-bold text-2xl md:text-3xl lg:text-4xl">
                Blog Section
            </h2>
            <p class="text-lg md:text-xl text-white">
                A Global Online Portal For Exhibitor, Supplier & Organize
            </p>
        </section>

        {{-- Card-section --}}
        <section id="blogs-card" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 m-5 md:m-10 lg:m-20">
            @foreach ($posts as $item)
                <a href="{{ route('public.blog-page', $item->slug) }}"
                    class="group overflow-hidden duration-500 text-white block">
                    <div class="relative w-full h-48 overflow-hidden rounded-t-lg">
                        <img src="{{ $item->featureImageUrl }}"
                            class="transition-all duration-300 ease-in-out transform group-hover:scale-110 w-full">
                    </div>
                    <div
                        class="flex flex-col p-4 h-36 bg-[#1F4A5A] rounded-b-lg group-hover:bg-[#2896CB] transition-all duration-300 ease-in-out">
                        <div class="flex justify-between gap-2 items-center">
                            <span
                                class="text-xs p-1 px-2 text-white bg-[#2896CB] group-hover:bg-[#1F4A5A] rounded-2xl">By:
                                {{ $item->author->name }}</span>
                            <span class="text-xs text-white">Published on:
                                {{ date('d M, Y', strtotime($item->created_at)) }}</span>
                        </div>
                        <h2
                            class="text-lg font-bold mt-2 group-hover:text-white transition-all duration-300 ease-in-out">
                            {{ \Illuminate\Support\Str::words($item->title, 4, '...') }}
                        </h2>
                        <p
                            class="text-sm mt-2 group-hover:text-white opacity-90 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                            {{ \Illuminate\Support\Str::words($item->meta_description, 10, '...') }}
                        </p>
                    </div>
                </a>
            @endforeach
        </section>

        {{-- Pagination Controls --}}

        <div class="flex justify-center items-center p-5 md:p-10 text-sm">
            {{ $posts->links() }}
        </div>
        {{-- <div class="flex justify-center items-center gap-3 py-4">
        <button id="prev-btn"
            class="bg-gradient-to-r from-[#314755] via-[#26a0da] to-[#314755] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center uppercase transition-all duration-700 ease-in-out rounded-lg p-3 px-5"
            onclick="changePage('prev')">Previous</button>
        <span id="page-num" class="text-xl">Page 1</span>
        <button id="next-btn"
            class="bg-gradient-to-r from-[#314755] via-[#26a0da] to-[#314755] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center uppercase transition-all duration-700 ease-in-out rounded-lg p-3 px-5"
            onclick="changePage('next')">Next</button>
    </div> --}}
    </div>
    <x-home.multi-step-form />
</x-layout.public>
