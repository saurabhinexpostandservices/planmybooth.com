<x-layout.public>
    <x-slot name="title">
        {{ $standbuilder?->title }}
    </x-slot>
    <x-slot name="meta_description">
        {{ $standbuilder?->meta_description }}
    </x-slot>
    <x-slot name="featured_image">
        {{ $standbuilder?->logo}}
    </x-slot>

   
    <x-inside-custom-exhibition-page.inside-custom-page :standbuilder="$standbuilder" />
</x-layout.public>