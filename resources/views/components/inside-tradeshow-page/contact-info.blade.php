<div class="bg-white rounded-lg shadow-lg p-5 w-full font-lato">
    <h2 class="text-2xl sm:text-3xl md:text-4xl text-[#3D94AC] pb-3 pt-5">
        Contact Info
    </h2>
    <div>
        <!-- Location Info -->
        <div class="flex items-center gap-3 text-3xl hover:bg-slate-100 p-2">
            <i class="fas fa-map-marker-alt text-[#2799D0]"></i>
            <div class="flex flex-col">
                <span class="font-semibold text-base">{{ $show?->city?->name }}</span>
                <span class="text-sm">{{ $show?->country?->name }}</span>
            </div>
        </div>

        <!-- Website Info -->
        <div class="flex items-center gap-3 text-3xl hover:bg-slate-100 p-2">
            <i class="fas fa-globe text-[#2799D0]"></i>
            <div class="flex flex-col">
                <span class="text-base">Official Website</span>
                <span class="text-sm">{{ $show?->website }}</span>
            </div>
        </div>

        <!-- Event Date Info -->
        <div class="flex items-center gap-3 text-3xl hover:bg-slate-100 p-2">
            <i class="fas fa-calendar-check text-[#2799D0]"></i>
            <div class="flex flex-col">
                <span class="font-semibold text-base">
                    {{ date('d M', strtotime($show?->start_date)) }} -
                    {{ date('d M', strtotime($show?->end_date)) }}
                </span>
                <span class="text-sm">
                    {{ date('Y', strtotime($show?->start_date)) }}
                </span>
            </div>
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
    font-size: 2rem;     /* ~32px */
    font-weight: 600;
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
    font-size: 1rem;         /* ~16px - standard paragraph */
    margin-bottom: 1rem;     /* spacing after paragraphs */
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
