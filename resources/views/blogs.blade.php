<x-layout.public>
    <x-slot name="title">Blogs | Planmybooth</x-slot>
    <x-slot name="meta_description">Read the latest blogs, tips, and updates from Planmybooth to help you plan and manage your events more effectively.</x-slot>
    <x-slot name="featured_image"></x-slot>
    Blogs
    @php
        dd($posts);
    @endphp
</x-layout.public>