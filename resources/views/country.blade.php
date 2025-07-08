<x-layout.public>
     <x-slot name="title">
        {{ $page?->meta_title }}
    </x-slot>
    <x-slot name="meta_description">
        {{ $page?->meta_description }}
    </x-slot>
    <x-slot name="featured_image">
        {{ $page?->featured_image}}
    </x-slot>


    <x-country-inside-page.country-banner-section :page="$page" />
    <x-country-inside-page.country-about-section :page="$page" />
    <x-country-inside-page.country-card-section :page="$page"  :standbuilders="$standbuilders" />
    <x-country-inside-page.country-detail-section :page="$page" />
    {{-- <x-country-inside-page.country-popular-trade-shows /> --}}
</x-layout.public>