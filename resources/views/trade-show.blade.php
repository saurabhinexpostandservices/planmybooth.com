<x-layout.public>
    <x-slot name="title">Trade Shows | Planmybooth</x-slot>
    <x-slot name="meta_description">Discover upcoming trade shows, tips for exhibitors, and resources to help you plan a
        successful booth experience with Planmybooth.</x-slot>
    <x-slot name="featured_image"></x-slot>

    <div class="relative bg-bottom bg-no-repeat">
        <x-tradeshows.filter-section />
        <x-tradeshows.lead-section :shows="$shows" />
        <x-home.multi-step-form />
    </div>
</x-layout.public>
