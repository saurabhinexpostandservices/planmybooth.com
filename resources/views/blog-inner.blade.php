<x-layout.public>
    <x-slot name="title">{{ $post->meta_title }}</x-slot>
    <x-slot name="meta_description">{{ $post->meta_description }}</x-slot>
    <x-slot name="featured_image">{{ $post->featured_image }}</x-slot>

    @php
        dd($post);
    @endphp
</x-layout.public>