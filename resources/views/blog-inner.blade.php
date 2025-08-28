<x-layout.public>
    <x-slot name="title">{{ $post->meta_title }}</x-slot>
    <x-slot name="meta_description">{{ $post->meta_description }}</x-slot>
    <x-slot name="featured_image">{{ $post->featured_image }}</x-slot>

 <div class="relative bg-bottom bg-no-repeat bg-fixed" id="blogPage"
    style="background-image: url('{{ asset('assets/banner/city_bg.webp') }}');">


 <!-- Banner Section -->
  <div class="relative bg-[#F6F6F7] bg-cover bg-center mb-10"
      style="background-image: url('/assets/banner/home_banner.webp')">
     <div
            class="bg-[#176B87]/90 flex justify-center items-center min-h-[20rem] mt-[-80px] sm:min-h-[20rem] md:min-h-[25rem] text-center transition-all px-3 sm:px-5">
      </div>
  </div>


    <div class=" mb-10 md:mb-5 flex flex-col gap-3 md:m-10 xl:mx-20 bg-[#EFEFEF] bg-opacity-50">
        <div class="flex flex-col lg:flex-row p-5 gap-5">
            <!-- Main Blog Section -->
            <section class="w-full lg:w-2/3 mx-auto">
                <img class="w-full" src="{{ $post->featured_image }}" alt="{{ $post->meta_title}}">

                <!-- Blog Content -->
                <section>
                    <ul class="text-xs md:text-sm flex pt-5 gap-5">
                        <li class="flex items-center">
                            <a href="{{ route('blogs') }}">Blog</a> <span class="ml-2">&rarr;</span>
                        </li>
                        <li>
                            <a href="{{ route('blogs.inner', $post->slug) }}">{{ $post->meta_title }}</a>
                        </li>
                    </ul>
                    <div class="flex flex-col gap-3">
                        <h1
                            class="text-[#2E627D] text-center md:text-start text-xl md:text-2xl lg:text-3xl font-serif font-semibold py-5">
                            {{ $post->title }}
                        </h1>
                        {!! $post->content !!}
                    </div>
                </section>
            </section>

            <!-- Sidebar Section -->
            <section class="w-full flex flex-col gap-5 mx-auto lg:w-80">
                {{-- <x-inside-blog-page.latest-post :recentPosts="$recentPosts" /> --}}
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

@push('styles')
<style>
/* ================================
   Global Typography Styles
================================= */
h1 {
    font-size: 2.5rem;   /* ~40px */
    font-weight: 700;
    color: #124E65;
    font-weight: 700;
    font-family: 'Georgia', serif;
    font-style: normal;
    margin-bottom: 1rem;
}

h2 {
   font-size: 2rem;
   color: #124E65;
   font-weight: 700;
   font-family: 'Georgia', serif;
   font-style: normal;
   margin-bottom: 1rem;
}

h3 {
    font-size: 1.75rem;  /* ~28px */
    color: #124E65;
    font-weight: 600;
    font-family: 'Georgia', serif;
    font-style: normal;
    margin-bottom: 1rem;
}

h4 {
    font-size: 1.5rem;   /* ~24px */
    color: #124E65;
    font-weight: 500;
    font-family: 'Georgia', serif;
    font-style: normal;
    margin-bottom: 1rem;
}

h5 {
    font-size: 1.25rem;  /* ~20px */
    color: #124E65;
    font-weight: 500;
    font-family: 'Georgia', serif;
    font-style: normal;
    margin-bottom: 1rem;
}

h6 {
    font-size: 1rem;     /* ~16px */
    color: #124E65;
    font-weight: 500;
    font-family: 'Georgia', serif;
    font-style: normal;
    margin-bottom: 1rem;
}

main p {
   font-size: 16px;
   line-height: 24px;
   color: #364153;
   font-weight: 400;
   font-family: 'Poppins', sans-serif;
   font-style: normal;
   margin-bottom: 1rem;
}


p > a{
    color: #124E65
}

main ol,
main ul {
    padding-left: 1.5rem;
    list-style: inherit !important;
}

/* ================================
   Mobile Styles (max-width: 767px)
================================= */
@media (max-width: 767px) {
    h1 {
        font-size: 2rem !important;   /* ~32px */
        font-weight: 700;
        text-align: center !important;
    }

    h2 {
        font-size: 1.5rem !important; /* ~24px */
        font-weight: 600;
        text-align: start !important;
    }

    h3 {
        font-size: 1.25rem;  /* ~20px */
        font-weight: 600;
        text-align: center !important;
    }

    h4 {
        font-size: 1rem;     /* ~16px */
        font-weight: 500;
    }

    h5 {
        font-size: 0.875rem; /* ~14px */
        font-weight: 500;
    }

    h6 {
        font-size: 0.75rem;  /* ~12px */
        font-weight: 500;
    }
}
</style>
@endpush
</x-layout.public>
