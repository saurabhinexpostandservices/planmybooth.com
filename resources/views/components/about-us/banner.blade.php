   <section
       class="flex flex-col justify-center items-center gap-5 md:gap-10 min-h-[55rem] md:min-h-[45rem] text-center bg-[#176B87]/90 mt-[-100px] p-5 pt-20 md:p-10 font-poppins">
       <h2 class="text-white text-center font-semibold text-2xl md:text-3xl lg:text-4xl font-[Poppins] md:w-[80%]">
           Your Global Online Portal to Find the Best Exhibition Stand Builders, Supplier, Organizers
       </h2>

       <div class="w-full md:w-[60%]">
           <div class="py-10 md:py-5 flex justify-center items-center gap-5">
               <div class="w-28">
                   <img class="w-full" src="/assets/icons/chat1.gif" alt="chat" />
               </div>
               <div class="text-white flex flex-col gap-2">
                   <h2 class="text-lg md:text-xl lg:text-2xl font-semibold font-[Poppins]">
                       Tell Us About Your Requirements
                   </h2>
                   <p>
                       Fill out the inquiry form given and tell us about your event, stand size, stand design, and
                       budget.
                   </p>
               </div>
           </div>

           <div class="py-10 md:py-5 flex justify-center items-center gap-5">
               <div class="w-28">
                   <img class="w-full rounded-full" src="/assets/icons/connection.gif" alt="connection" />
               </div>
               <div class="text-white flex flex-col gap-2">
                   <h2 class="text-lg md:text-xl lg:text-2xl font-semibold font-[Poppins]">
                       We Connect With the Right Service Provider
                   </h2>
                   <p>
                       We will connect you with the best exhibition stand contractor based on your specifications.
                   </p>
               </div>
           </div>
       </div>

       <div>
           {{-- <x-inside-tradeshow-page.three-step-form /> --}}
           <a href="{{ route('contact-us') }}">
               <button
                   class="md:mt-4 px-2 xl:px-4 py-1 xl:py-2 duration-500 bg-[#64CCC5] border-2 border-white text-white text-xs xl:text-sm font-medium rounded-lg">
                   Request Quotes
               </button>
           </a>
       </div>
   </section>
