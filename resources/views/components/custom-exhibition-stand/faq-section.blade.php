<!-- FAQ Section -->
<section class="bg-gray-50 py-16 px-4 font-poppins">
    <div class="max-w-5xl mx-auto">
        <h2
            class="text-[#124E65] text-2xl md:text-3xl lg:text-4xl font-semibold text-center w-full md:w-[80%] mx-auto font-[Poppins]">
            Frequently Asked <span class="bg-[#64CCC5] text-white px-2">Questions</span>
        </h2>

        <!-- FAQ Item -->
        <div class="space-y-4 pt-10">

            {{-- Question-1 --}}
            <div class="faq-item border-b">
                <button
                    class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
                    What is Plan My Booth's role as an exhibition stand design company?
                    <span class="icon text-[#124E65]">+</span>
                </button>
                <div class="faq-answer hidden pb-4 text-gray-700">
                    Plan My Booth serves as a smart matchmaking platform—connecting exhibitors with verified exhibition
                    stand contractors and custom exhibition stand builders worldwide. You simply submit your project
                    details, and the platform presents up to five handpicked providers who align with your
                    specifications in design, location, and budget.
                </div>
            </div>

            {{-- Question-2 --}}
            <div class="faq-item border-b">
                <button
                    class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
                    How do I request quotes through Plan My Booth?
                    <span class="icon text-[#124E65]">+</span>
                </button>
                <div class="faq-answer hidden pb-4 text-gray-700">
                    You start by filling out an inquiry form with your event, booth size, design requirements, and
                    budget. Plan My Booth connects you with suitable exhibition stand builders and you’ll receive up to
                    five competitive quotations directly — giving you options to compare.
                </div>
            </div>

            {{-- Question-3 --}}
            <div class="faq-item border-b">
                <button
                    class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
                    Who are some of the custom exhibition stand builders worldwide featured?
                    <span class="icon text-[#124E65]">+</span>
                </button>
                <div class="faq-answer hidden pb-4 text-gray-700">
                    <div class="mb-1">
                        Examples of standout partners include:
                    </div>
                    <ul class="list-disc pl-6">
                        <li>Booth Vision (Poland, since 2012).</li>
                        <li>Messe Masters (Germany).</li>
                        <li>Stand Constructions (Poland; active in Germany, UK, Netherlands, Spain, Italy).</li>
                        <li>Expo Stand Services (Poland).</li>
                    </ul>
                    <div class="mt-1">
                        These firms are part of a carefully vetted network of exhibition stand contractors, offering
                        deep regional knowledge and design expertise.
                    </div>
                </div>
            </div>

            {{-- Question-4 --}}
            <div class="faq-item border-b">
                <button
                    class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
                    What makes a custom exhibition stand design different from a standard option?
                    <span class="icon text-[#124E65]">+</span>
                </button>
                <div class="faq-answer hidden pb-4 text-gray-700">
                    A custom exhibition stand design is tailored to your brand identity and exhibition goals. It offers
                    complete creative freedom—from layout to signage and technology—ensuring a stand that stands out.
                    Unlike fixed or basic options, custom-built booths deliver stronger branding, greater impact, and
                    higher ROI.
                </div>
            </div>

            {{-- Question-5 --}}
            <div class="faq-item border-b">
                <button
                    class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
                    Why should I choose custom-built stands over off-the-shelf solutions?
                    <span class="icon text-[#124E65]">+</span>
                </button>
                <div class="faq-answer hidden pb-4 text-gray-700">
                    <div class="mb-1">
                        Custom stands offer several advantages:
                    </div>
                    <ul class="list-disc pl-6">
                        <li>Full control over aesthetics, layout, and features.</li>
                        <li>Enhanced brand visibility and differentiation.</li>
                        <li>Better engagement through tailored messaging and immersive design.
                            This personalized approach boosts ROI and leaves a stronger impression on your audience.
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Question-6 --}}
            <div class="faq-item border-b">
                <button
                    class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
                    How can I evaluate the right custom trade show booth builders in my area?
                    <span class="icon text-[#124E65]">+</span>
                </button>
                <div class="faq-answer hidden pb-4 text-gray-700">
                    <div class="mb-1">
                        Plan My Booth suggests you:
                    </div>
                    <ul class="list-disc pl-6">
                        <li>Clearly define your booth requirements (size, design, budget).</li>
                        <li>Let the platform’s questionnaire guide you through sharing those specs.</li>
                        <li>Benefit from its curated database of experienced exhibition stand builders worldwide,
                            simplifying your search for trustworthy providers.</li>
                    </ul>
                </div>
            </div>

            {{-- Question-7 --}}
            <div class="faq-item border-b">
                <button
                    class="faq-question w-full text-left py-4 text-lg font-semibold text-[#124E65] flex justify-between items-center">
                    Which locations and regions does Plan My Booth cover for stand-building services?
                    <span class="icon text-[#124E65]">+</span>
                </button>

                <div class="faq-answer hidden pb-4 text-gray-700">
                    Plan My Booth’s network spans over 900 cities in more than 80 countries, including key exhibition
                    hubs like the USA, UAE, Germany, Singapore, Australia, Canada, UK, France, Italy, Indonesia,
                    Belgium, India, among others.
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
