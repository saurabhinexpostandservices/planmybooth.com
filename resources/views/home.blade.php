<x-layout.public>
    <x-slot name="title">Planmybooth</x-slot>
    <x-slot name="meta_description">Planmybooth helps you easily plan, organize, and optimize your trade show or event
        booth for maximum impact and efficiency.</x-slot>
    <x-slot name="featured_image"></x-slot>

    <x-home.banner />
    <x-home.about-us />
    <x-home.global-presence-section />
    <x-home.why-choose-us />
    <x-home.how-we-work />
    <x-home.country :countries="$countries" />
    <x-home.multi-step-form />
</x-layout.public>
