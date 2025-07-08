<x-layout.public>
    <x-slot name="title">Stand Builders | Planmybooth</x-slot>
    <x-slot name="meta_description">Discover top stand builders for exhibitions and trade shows. Find reliable experts to design, build, and install custom exhibition stands for your next event.</x-slot>
    <x-slot name="featured_image"></x-slot>


    <div>
        <x-custom-exhibition-stand.banner-section />
        <x-custom-exhibition-stand.about-section />
        <x-custom-exhibition-stand.card-section :standbuilders="$standbuilders" />
        <x-custom-exhibition-stand.dought-section />
        <x-home.multi-step-form />
    </div>
</x-layout.public>  