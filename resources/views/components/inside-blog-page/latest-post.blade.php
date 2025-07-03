<div class="flex flex-col gap-3 bg-white rounded-lg shadow-lg p-5 max-w-md mx-auto font-lato w-full">
    <h2 class="text-[#2E627D] text-xl md:text-2xl lg:text-3xl font-semibold text-start py-5">
        Latest Posts
    </h2>
    @foreach ($recentPosts as $item)
        <a href="{{ route('public.blog-page', $item->slug) }}" class="hover:text-[#2E627D]">
            <div class="flex gap-5 items-center">
                <img class="shadow-sm shadow-[#2D6683] hover:shadow-[#2792C5] rounded-full w-16 h-16"
                    src="{{ $item->featureImageUrl }}" alt="{{ $item->meta_title }}">
                <span class="text-sm text-slate-500">{{ $item->meta_title }}</span>
            </div>
        </a>
    @endforeach
</div>
