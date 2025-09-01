<x-layout.public>
    <x-slot name="title">404 | Not Found</x-slot>
    <x-slot name="meta_description"></x-slot>
    <x-slot name="featured_image"></x-slot>
    <div class="bg-[#145D76] w-full h-20 mt-[-80px]"></div>
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-[#145D76] text-3xl py-10">404 | Not Found</h1>
        <div class="text-center">
            <p class="text-gray-600 mb-4">Sorry, the page you are looking for does not exist or has been moved.</p>
            <a href="{{ url('/') }}" class="inline-block px-6 py-2 bg-[#145D76] text-white rounded hover:bg-[#10495c] transition">
            Go to Homepage
            </a>
        </div>
    </div>
</x-layout.public>