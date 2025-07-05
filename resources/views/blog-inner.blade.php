<x-layout.public>
    <x-slot name="title">{{ $post->meta_title }}</x-slot>
    <x-slot name="meta_description">{{ $post->meta_description }}</x-slot>
    <x-slot name="featured_image">{{ $post->featured_image }}</x-slot>


 <div class="relative bg-bottom bg-no-repeat bg-fixed md:mx-10 xl:mx-20 font-poppins" id="blogPage"
    style="background-image: url('{{ asset('assets/banner/city_bg.webp') }}');">
    <div class="container mx-auto mb-10 md:mb-5 flex flex-col gap-3 bg-[#EFEFEF] bg-opacity-50">
        <div class="flex flex-col lg:flex-row p-5 gap-5">
            <!-- Main Blog Section -->
            <section class="w-full lg:w-2/3 mx-auto">
                <img class="w-full" src="{{ $post->featureImageUrl }}" alt="why-choose-us">

                <!-- Blog Content -->
                <section>
                    <ul class="text-xs md:text-sm flex pt-5 gap-5">
                        <li class="flex items-center">
                            <a href="{{ route('public.blogs') }}">Blog</a> <span class="ml-2">&rarr;</span>
                        </li>
                        <li>
                            <a href="{{ route('blogs.inner', $post->slug) }}">{{ $post->meta_title }}</a>
                        </li>
                    </ul>
                    <div class="flex flex-col gap-3">
                        <h1
                            class="text-[#2E627D] text-center md:text-start text-xl md:text-2xl lg:text-3xl font-semibold py-5">
                            {{ $post->title }}
                        </h1>
                        {!! $post->content !!}
                    </div>
                </section>
            </section>

            <!-- Sidebar Section -->
            <section class="w-full flex flex-col gap-5 mx-auto lg:w-80">
                <x-inside-blog-page.latest-post :recentPosts="$recentPosts" />
                <x-inside-blog-page.sidebar-form />
            </section>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const blogPage = document.getElementById('blogPage');
        const bgImage = '/images/bg/city_bg.webp';

        // Example functionality to set a background image dynamically
        blogPage.style.backgroundImage = `url(${bgImage})`;

        // Example form submission logic
        const subscribeForm = document.getElementById('subscribeForm');
        subscribeForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for subscribing!');
        });
    });
</script>

</x-layout.public>