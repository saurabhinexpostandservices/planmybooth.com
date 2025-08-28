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
