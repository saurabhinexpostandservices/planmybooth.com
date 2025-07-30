   <div class="bg-[#145D76] md:bg-white font-poppins">
       <script>
           function switchTab(tabId) {
               const tabs = document.querySelectorAll('.tab-btn');
               const contents = document.querySelectorAll('.tab-content');

               // Reset all buttons
               tabs.forEach(tab => {
                   tab.classList.remove('bg-[#06FFF8]', 'text-white');
                   tab.classList.add('bg-white', 'text-[blue-600]');
               });

               // Hide all tab contents
               contents.forEach(content => content.classList.add('hidden'));

               // Show selected tab content
               document.getElementById(tabId).classList.remove('hidden');

               // Highlight the active tab button
               const activeTab = document.querySelector(`[data-tab="${tabId}"]`);
               activeTab.classList.remove('bg-white', 'text-blue-600');
               activeTab.classList.add('bg-[#145D76]', 'text-white','border-[#145D76]e');
           }
       </script>


       <div class="relative py-10 md:pb-20 xl:py-0 h-auto font-poppins">
           <section class="overflow-hidden py-12 px-4 sm:px-10 text-white h-[150vh] md:h-[90vh]"
               style="background: linear-gradient(45deg, #145D76, #145D76); clip-path: polygon(0% 30%, 100% 20%, 100% 80%, 0% 100%);">
           </section>

           <div class="absolute inset-0">
               <!-- Tab Buttons -->
               <div class="grid grid-cols-1 md:grid-cols-3 md:w-[80%] mx-auto justify-center gap-4 my-10 md:mb-0 p-5">
                   <button onclick="switchTab('tab1')" data-tab="tab1"
                       class="tab-btn px-5 py-3 rounded-md transition hover:bg-[#145D76] text-white hover:text-white border border-[#124E65]">
                       Exhibition Stand Design & Build
                   </button>
                   <button onclick="switchTab('tab2')" data-tab="tab2"
                       class="tab-btn px-5 py-3 rounded-md transition bg-white hover:bg-[#145D76] hover:text-white text-[#124E65] border border-[#124E65]">
                       End to End Solutions
                   </button>
                   <button onclick="switchTab('tab3')" data-tab="tab3"
                       class="tab-btn px-5 py-3 rounded-md transition bg-white hover:bg-[#145D76] hover:text-white text-[#124E65] border border-[#124E65]">
                       Global Presence
                   </button>
               </div>


               <!-- Tab Contents -->
               <div id="tab1"
                   class="tab-content text-white flex flex-col md:flex-row items-center gap-10 max-w-6xl mx-auto  border border-[#374151] rounded-2xl p-5 md:py-10">
                   <div class="md:w-1/2 mx-auto">
                       <h2 class="text-2xl md:text-3xl font-bold mb-4">Exhibition Stand <span class="bg-white text-[#124E65] px-2">Design & Build</span></h2>
                       <p class="mb-6 leading-relaxed">
                           Whimsical Exhibits is among the best exhibition stand builders in Europe and offers unique,
                           easy-to-build bespoke stand designs across Europe.
                           We as your ideal choice for Exhibition Booth Builder in Europe thrive to provide you
                           unmatched
                           booth
                           design and build services.
                       </p>
                       <a href="#"
                           class="inline-flex items-center gap-2 text-white font-semibold border-b-2 border-[#06FFF8] hover:border-white">
                           Read More
                           <span>➜</span>
                       </a>
                   </div>
                   <div class="md:w-1/3 mx-auto">
                       <img src="{{ asset('assets/booths/Kryshna_Enzetech.webp') }}"
                           class="rounded-lg shadow-lg w-full" />
                   </div>
               </div>

               <div id="tab2"
                   class="tab-content text-white flex flex-col md:flex-row items-center gap-10 max-w-6xl mx-auto  border border-[#374151] rounded-2xl p-5 md:pt-10">
                   <div class="md:w-1/2 mx-auto">
                       <h2 class="text-2xl md:text-3xl font-bold mb-4">End to End <span class="bg-white text-[#124E65] px-2">Solutions</span></h2>
                       <p class="mb-6 leading-relaxed">
                           We are one of the leading exhibition stand contractors in Europe delivering turnkey
                           exhibition
                           booths.
                           We manage your project with precision from concept to completion, collaborating closely to
                           meet
                           your
                           goals.
                       </p>
                       <a href="#"
                           class="inline-flex items-center gap-2 text-white font-semibold border-b-2 border-[#06FFF8] hover:border-white">
                           Read More
                           <span>➜</span>
                       </a>
                   </div>
                   <div class="md:w-1/3 mx-auto">
                       <img src="{{ asset('assets/booths/Country_pavillion.webp') }}" alt="End to End"
                           class="rounded-lg shadow-lg w-full" />
                   </div>
               </div>

               <div id="tab3"
                   class="tab-content text-white flex flex-col md:flex-row items-center gap-10 max-w-6xl mx-auto  border border-[#374151] rounded-2xl p-5 md:pt-10">
                   <div class="md:w-1/2 mx-auto">
                       <h2 class="text-2xl md:text-3xl font-bold mb-4">Global <span class="bg-white text-[#124E65] px-2">Presence</span></h2>
                       <p class="mb-6 leading-relaxed">
                           Leverage our cross-country Exhibition Stand builders delivering exceptional booths anywhere
                           around
                           the world.
                           We extend services from tabletop exhibits to full exhibition stands, handling everything
                           seamlessly.
                       </p>
                       <a href="#"
                           class="inline-flex items-center gap-2 text-white font-semibold border-b-2 border-[#06FFF8] hover:border-white">
                           Read More
                           <span>➜</span>
                       </a>
                   </div>
                   <div class="md:w-1/3 mx-auto">
                       <img src="{{ asset('assets/booths/Custom_exhibition.webp') }}" alt="Global Map"
                           class="rounded-lg shadow-lg w-full" />
                   </div>
               </div>
           </div>
       </div>

       <script>
           // Initialize first tab
           switchTab('tab1');
       </script>

   </div>
