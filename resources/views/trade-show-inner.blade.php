<x-layout.public>
    <x-slot name="title">{{$show->meta_title}}</x-slot>
    <x-slot name="meta_description">{{$show->meta_description}}</x-slot>
    <x-slot name="featured_image">{{$show->logo}}</x-slot>

    @php
        dd($show);
    @endphp
    
</x-layout.public>