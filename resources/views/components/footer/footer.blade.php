<div class="footer-wrapper font-lato">
    <div class="px-[5%] pt-[10%] md:pt-[5%]">
        <div class="footer-content">
            <div class="flex flex-col md:flex-row flex-wrap gap-10 md:gap-5 justify-between">
                <!-- Column 1 -->
                <div class="w-full md:w-[30%] lg:w-[35%]">

                    <div class="footer-col1">
                        <div class="flex items-center justify-center md:justify-start md:ml-5">
                            <a href="{{ route('home') }}">
                                 <img class="rounded-t-3xl" src="{{ asset('./assets/images/logo.svg') }}"
                                    alt="planmybooth-header-logo" width="150" height="100">
                            </a>
                        </div>
                        <p class="text-center md:text-start py-5 md:p-5 text-sm">
                            Plan My Booth is an online platform that connects exhibitors with the best exhibition stand
                            builders worldwide, as per their budget and requirements. We assist you in searching and
                            hiring the perfect exhibition stand design company in your city.
                        </p>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="w-full md:w-[25%]">
                    <div class="footer-col2 md:flex flex-col justify-center items-center">
                        <h4 class="text-white font-serif">Quick Links</h4>
                        <ul class="flex flex-col gap-2 py-5 md:p-5 text-sm text-start pl-10">
                            <li><a class="hover:text-[#DAE7EB]" href="/">Home</a></li>
                            <li><a class="hover:text-[#DAE7EB]" href="{{ route('custom-exhibition-stand') }}">Custom
                                    Exhibition Stand</a></li>
                            <li><a class="hover:text-[#DAE7EB]" href="{{ route('privacy-policy') }}">Privacy
                                    Policy</a></li>
                            <li><a class="hover:text-[#DAE7EB]" href="{{ route('about-us') }}">About Us</a></li>
                            <li><a class="hover:text-[#DAE7EB]" href="{{ route('contact-us') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="w-full md:w-[35%]">
                    <div class="footer-col3 md:flex flex-col justify-center items-center">
                        <h4 class="text-white font-serif">Reach Us</h4>
                        <ul class="flex flex-col gap-2 text-center py-5 md:p-5 text-sm">
                            <li>
                                <a href="#"
                                    class="flex gap-2 items-center justify-start pl-10 md:pl-5 xl:pl-16 hover:text-[#DAE7EB]">
                                    <i class="fas fa-envelope text-2xl"></i> enquiry@planmybooth.com
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex gap-2 items-center justify-start pl-10 md:pl-5 xl:pl-16 hover:text-[#DAE7EB]">
                                    <i class="fas fa-globe text-2xl"></i> planmybooth.com
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex gap-2 justify-start pl-10 md:pl-5 xl:pl-16 hover:text-[#DAE7EB]">
                                    <i class="fas fa-map-marker-alt text-2xl"></i>
                                    orębandowo 13a, Jaraczewo, <br>wielkopolskie 63-233, Poland
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
    <!-- Social Media -->
    <div class="social-menu">
        <ul class="flex space-x-2">
            <li>
                <a href="#">
                    <div class="bg-blue-600 p-1 px-3 rounded-full text-white hover:bg-blue-700">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="bg-[#EC4899] p-1 px-2 rounded-full text-white hover:opacity-90">
                        <i class="fab fa-instagram text-xl"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="bg-[#0077b5] p-1 px-2 rounded-full text-white hover:bg-[#005582]">
                        <i class="fab fa-linkedin text-xl"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="bg-slate-800 p-1 px-2 rounded-full text-white hover:bg-slate-900">
                        <i class="fa-brands fa-x-twitter text-xl"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <!-- Copyright -->
    <div class="copyrigt">
        <p>&copy; Plan My Booth {{ date('Y') }}. All rights reserved.</p>
    </div>
</div>
