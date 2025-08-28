<div class="relative bg-cover bg-center font-poppins" style="background-image: url('/assets/bg/city_bg.webp');">
    <!-- Container for centering the text -->
    <div
        class="flex justify-center items-center min-h-[25rem] text-justify relative bg-white bg-opacity-70 transition-all duration-300">
        <div class="p-5  w-full md:w-[90%]">
            {!! $page->content !!}
        </div>
    </div>
</div>

@push('styles')
<style>
/* ================================
   Global Typography Styles
================================= */
h1 {
    font-size: 2.5rem;   /* ~40px */
    font-weight: 700;
}

h2 {
   font-size: 2rem;
   color: #364153;
   font-weight: 400;
   font-family: 'Georgia', serif;
   font-style: normal;
   margin-bottom: 1rem;
}

h3 {
    font-size: 1.75rem;  /* ~28px */
    font-weight: 600;
}

h4 {
    font-size: 1.5rem;   /* ~24px */
    font-weight: 500;
}

h5 {
    font-size: 1.25rem;  /* ~20px */
    font-weight: 500;
}

h6 {
    font-size: 1rem;     /* ~16px */
    font-weight: 500;
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

