<x-layout.public>
    <x-country-inside-page.country-banner-section :page="$page" />
    <x-country-inside-page.country-about-section :page="$page" />
    <x-country-inside-page.country-card-section :page="$page" :for="$page->country" :standbuilders="$standbuilders" />
    {{-- <x-country-inside-page.country-detail-section :page="$page" /> --}}
    <x-country-inside-page.country-popular-trade-shows />
</x-layout.public>
