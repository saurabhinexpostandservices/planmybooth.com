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
               activeTab.classList.add('bg-[#145D76]', 'text-white','border-slate-400', 'border-2');
           }
       </script>

       <div class="relative py-10 md:pb-20 h-auto font-poppins">
           <section class="overflow-hidden py-10 md:py-50 px-4 sm:px-10 text-white h-[120vh] md:h-[50vh] xl:h-[65vh]"
               style="background: linear-gradient(50deg, #145D76, #145D76); clip-path: polygon(0% 20%, 100% 20%, 100% 80%, 0% 100%);">
           </section>

           <div class="absolute inset-0">
               <!-- Tab Buttons -->
               <div class="grid grid-cols-1 md:grid-cols-3 md:w-[80%] mx-auto justify-center gap-4 mt-[10%] lg:mt-0 p-5">
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
                   class="tab-content text-white flex flex-col md:flex-row items-center gap-10 max-w-6xl mx-auto  border border-[#374151] rounded-2xl p-5 lg:mt-5">
                   <div class="md:w-1/2 mx-auto">
                       <h2 class="text-2xl md:text-3xl font-bold mb-4">Exhibition Stand <span class="bg-white text-[#124E65] px-2">Design & Build</span></h2>
                       <p class="mb-6 leading-relaxed">
                           At Plan My Booth, we specialize in creating custom exhibition stands that are innovative, functional, and brand-focused. Our expert designers and builders craft unique booths that not only stand out but also deliver an engaging experience for your audience.
                       </p>
                       <a href="{{ route('about-us') }}"
                           class="inline-flex items-center gap-2 text-white font-semibold border-b-2 border-[#06FFF8] hover:border-white">
                           Read More
                           <span>➜</span>
                       </a>
                   </div>
                   <div class="md:w-1/3 mx-auto">
                       <img src="{{ asset('assets/booths/Kryshna_Enzetech.webp') }}"
                           class="rounded-lg shadow-lg w-full" alt="booth-sample" />
                   </div>
               </div>

               <div id="tab2"
                   class="tab-content text-white flex flex-col md:flex-row items-center gap-10 max-w-6xl mx-auto  border border-[#374151] rounded-2xl p-5 md:pt-10">
                   <div class="md:w-1/2 mx-auto">
                       <h2 class="text-2xl md:text-3xl font-bold mb-4">End to End <span class="bg-white text-[#124E65] px-2">Solutions</span></h2>
                       <p class="mb-6 leading-relaxed">
                         At Plan My Booth, we provide complete exhibition solutions tailored to your brand. From concept design to flawless execution, our team ensures every detail is handled with precision, delivering impactful booths that achieve your business goals.
                       </p>
                       <a href="{{ route('about-us') }}"
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
                          Expand your reach with Plan My Booth’s trusted network of exhibition stand builders across the globe. From creative tabletop displays to large-scale custom exhibition stands, we ensure a seamless experience wherever your business goes.
                       </p>
                       <a href="{{ route('about-us') }}"
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
