<!-- FAQ Section -->
<section class="bg-gray-50 py-16 px-4 font-poppins">
  <div class="max-w-5xl mx-auto">
    <h2 class="text-[#124E65] text-2xl md:text-3xl lg:text-4xl font-semibold text-center w-full md:w-[80%] mx-auto font-serif">
      Frequently Asked <span class="bg-[#64CCC5] text-white px-2">Questions</span>
    </h2>

    <!-- FAQ Item -->
    <div class="space-y-4 pt-10">

      {{-- Question-1 --}}
      <div class="faq-item border-b">
        <button class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
          What services does Plan My Booth offer as an exhibition stand design company?
          <span class="icon text-[#124E65]">+</span>
        </button>
        <div class="faq-answer hidden pb-4 text-gray-700">
          Plan My Booth is a trusted exhibition stand design company that connects clients with proven and verified exhibition stand builders worldwide, enabling seamless collaboration with top-notch exhibition stand contractors. The platform empowers exhibitors to share project specifications—such as booth size, location, budget, and optional files—and receive proposals from industry-leading partners. Clients benefit from custom booth design, AR/LED integration, smart space planning, and full end-to-end project management support.
        </div>
      </div>
   
      {{-- Question-2 --}}
      <div class="faq-item border-b">
        <button class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
          Can I still rent a trade show booth through Plan My Booth? How does it compare?
          <span class="icon text-[#124E65]">+</span>
        </button>
        <div class="faq-answer hidden pb-4 text-gray-700">
          While Plan My Booth primarily focuses on linking you with reputable exhibition stand builders worldwide, it also offers solutions that align with trade show booth rental needs. By leveraging local and specialized exhibition stand builders, the platform helps you access rental-friendly designs—such as modular or pop-up structures—along with broader options like AR/LED features and tailored project support.
        </div>
      </div>
   
      {{-- Question-3 --}}
      <div class="faq-item border-b">
        <button class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
          How does Plan My Booth ensure the credibility of exhibition stand contractors?
          <span class="icon text-[#124E65]">+</span>
        </button>
        <div class="faq-answer hidden pb-4 text-gray-700">
          Plan My Booth partners strictly with top exhibition stand builders who are vetted for experience, track record, and positive client feedback. This ensures you're matched with credible exhibition stand contractors—whether for custom exhibition stand projects, trade show booth rentals, or complex installations.
        </div>
      </div>
   
      {{-- Question-4 --}}
      <div class="faq-item border-b">
        <button class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
          What global coverage does Plan My Booth offer?
          <span class="icon text-[#124E65]">+</span>
        </button>
        <div class="faq-answer hidden pb-4 text-gray-700">
          Whether your exhibit is in Asia, Europe, or the USA, Plan My Booth connects you with exhibition stand builders worldwide. This global reach allows exhibitors to work with region-specific professionals skilled in both stand rental and full-service project delivery.
        </div>
      </div>
   
      {{-- Question-5 --}}
      <div class="faq-item border-b">
        <button class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
          What steps are involved in working with Plan My Booth?
          <span class="icon text-[#124E65]">+</span>
        </button>
        <div class="faq-answer hidden pb-4 text-gray-700">
            <div class="mb-1">
                The platform follows a streamlined workflow that enhances user experience from start to finish:
            </div>
          <ul class="list-disc pl-6">
            <li>Submit your project details (stand size, budget, location, optional files).</li>
            <li>Receive proposals from experienced exhibition stand contractors or exhibition stand builders.</li>
            <li>Select your best fit, connect, and refine layout/design together.</li>
            <li>Execute the project, with end-to-end support ensuring timely delivery and quality setup.</li>
          </ul>
          <div class="mt-1">
            These steps ensure a smooth journey whether you're aiming for trade show booth rental or a custom-built exhibit.
          </div>
        </div>
      </div>
   
      {{-- Question-6 --}}
      <div class="faq-item border-b">
        <button class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
          What types of booth features can Plan My Booth facilitate?
          <span class="icon text-[#124E65]">+</span>
        </button>
        <div class="faq-answer hidden pb-4 text-gray-700">
            <div class="mb-1">
                 Plan My Booth works with leading designers to offer creative and tech-forward booth features. These include:
            </div>
          <ul class="list-disc pl-6">
            <li>Custom configurations (inline, island, modular)</li>
            <li>Interactive elements like AR integration and LED walls</li>
            <li>Smart space planning for optimal flow</li>
            <li>Full-service support from design concept to delivery—including custom exhibition stand execution</li>
          </ul>
          <div class="mt-1">
            These features cater to both trade show booth rental flexibility and bespoke booth solutions.
          </div>
        </div>
      </div>
   
      {{-- Question-7 --}}
      <div class="faq-item border-b">
        <button class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
          Why should I choose Plan My Booth over self-sourcing an exhibition stand builder?
          <span class="icon text-[#124E65]">+</span>
        </button>
        <div class="faq-answer hidden pb-4 text-gray-700">
            <div class="mb-1">
                 Choosing Plan My Booth comes with distinct advantages:
            </div>
          <ul class="list-disc pl-6">
            <li>Curated talent pool of top-tier exhibition stand builders worldwide, saving you time on vetting.</li>
            <li>Access to exhibition stand contractors offering trade show booth rental options and custom design.</li>
            <li>Robust support from planning to installation through end-to-end project management.</li>
            <li>Efficient matching—submit your project once and receive tailored proposals.</li>
          </ul>
          <div class="mt-1">
            This creates a trustworthy, efficient, and expert-driven experience that top agencies simply can’t replicate. 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript -->
<script>
  document.querySelectorAll(".faq-question").forEach(button => {
    button.addEventListener("click", () => {
      const answer = button.nextElementSibling;
      const icon = button.querySelector(".icon");

      // Close all others
      document.querySelectorAll(".faq-answer").forEach(a => a.classList.add("hidden"));
      document.querySelectorAll(".icon").forEach(i => i.textContent = "+");

      // Toggle current
      if (answer.classList.contains("hidden")) {
        answer.classList.remove("hidden");
        icon.textContent = "–";
      } else {
        answer.classList.add("hidden");
        icon.textContent = "+";
      }
    });
  });
</script>
