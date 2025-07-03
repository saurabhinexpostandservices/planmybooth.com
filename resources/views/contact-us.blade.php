<x-layout.public>
    <x-slot name="title">Contact Us | Planmybooth</x-slot>
    <x-slot name="meta_description">Get in touch with Planmybooth for inquiries, support, or feedback. We're here to help you plan your next event or exhibition booth with ease.</x-slot>
    <x-slot name="featured_image"></x-slot>
    <div class=" font-poppins">
        <x-contact-us.contact-banner />
        <div
            class='grid grid-cols-1 md:grid-cols-2 gap-5 p-5 md:p-10 lg:py-20  transition-[background_0.3s,_border-radius_0.3s,_opacity_0.3s]'>
            <div>
                <x-contact-us.contact-detail-section />
            </div>
            <div>
                <x-contact-us.contact-form/>
            </div>
        </div>
    </div>

</x-layout.public>
