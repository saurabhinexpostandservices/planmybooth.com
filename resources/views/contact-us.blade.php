<x-layout.public>
    <x-slot name="title">Contact Us | Planmybooth</x-slot>
    <x-slot name="meta_description">Get in touch with Planmybooth for inquiries, support, or feedback. We're here to help you plan your next event or exhibition booth with ease.</x-slot>
    <x-slot name="featured_image"></x-slot>
    <div class=" font-poppins">
        <x-contact-us.contact-banner />
        <div>
            <div class="flex justify-center items-center">
                <x-contact-us.contact-detail-section />
            </div>
            <div>
                {{-- <x-contact-us.contact-form/> --}}
                <x-home.multi-step-form />
            </div>
            
        </div>
    </div>

</x-layout.public>
