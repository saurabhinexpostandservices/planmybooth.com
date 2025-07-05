<div class="pb-10 font-lato">
    <h2 class="text-[#3D94AC] text-center text-xl md:text-2xl lg:text-3xl font-semibold py-5 md:py-10 uppercase">
        Related Upcoming Trade Show
    </h2>
    <div class="swiper-container max-w-screen-xl mx-auto overflow-hidden">
        <div class="swiper-wrapper">
            <!-- Generate slides dynamically using JavaScript -->
            <script>
                const slidesData = [{
                        name: 'Sweets and Snacks Expo 2025',
                        date: '13 May-15 May 2025',
                        location: 'Indianapolis, United States',
                        logo: '/assets/logo/sweets.webp'
                    },
                    {
                        name: 'Sweets and Snacks Expo 2025',
                        date: '13 May-15 May 2025',
                        location: 'Indianapolis, United States',
                        logo: '/assets/logo/sweets.webp'
                    },
                    {
                        name: 'Sweets and Snacks Expo 2025',
                        date: '13 May-15 May 2025',
                        location: 'Indianapolis, United States',
                        logo: '/assets/logo/sweets.webp'
                    },
                    {
                        name: 'Sweets and Snacks Expo 2025',
                        date: '13 May-15 May 2025',
                        location: 'Indianapolis, United States',
                        logo: '/assets/logo/sweets.webp'
                    },
                    {
                        name: 'Sweets and Snacks Expo 2025',
                        date: '13 May-15 May 2025',
                        location: 'Indianapolis, United States',
                        logo: '/assets/logo/sweets.webp'
                    },
                    {
                        name: 'Sweets and Snacks Expo 2025',
                        date: '13 May-15 May 2025',
                        location: 'Indianapolis, United States',
                        logo: '/assets/logo/sweets.webp'
                    },
                ];

                const swiperWrapper = document.querySelector('.swiper-wrapper');

                slidesData.map(slide => {
                    const slideElement = `
                    <div class="swiper-slide px-3">
                        <a href="#" class="block">
                            <div class="card text-center border-2 border-[#269BD2] w-full p-5 hover:shadow-xl transition-shadow duration-500 hover:scale-95 transform">
                                <div class="mx-auto w-24 h-24 bg-[#27374d] mb-5 rounded-full flex justify-center items-center">
                                    <img src="${slide.logo}" alt="${slide.name} logo" class="w-24 h-24 rounded-full">
                                </div>
                                <h3 class="text-gray-800 text-center text-base uppercase border-b border-[#dc6d99] mx-auto w-[190px] h-[50px] pb-5 relative">
                                    ${slide.name}
                                </h3>
                                <p class="text-gray-500 px-4 text-[14px] leading-[27px]">${slide.date}</p>
                                <p class="text-[#269BD2] px-4 text-[14px] leading-[27px]">${slide.location}</p>
                            </div>
                        </a>
                    </div>`;
                    swiperWrapper.innerHTML += slideElement;
                });
            </script>
        </div>
    </div>
</div>

<!-- SwiperJS Script -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 4
            },
        },
    });

    // Stop autoplay on hover
    const swiperContainer = document.querySelector('.swiper-container');
    swiperContainer.addEventListener('mouseenter', () => {
        swiper.autoplay.stop();
    });
    swiperContainer.addEventListener('mouseleave', () => {
        swiper.autoplay.start();
    });

    // Arrow key navigation
    document.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowRight') {
            swiper.slideNext(); // Move to next slide
        } else if (event.key === 'ArrowLeft') {
            swiper.slidePrev(); // Move to previous slide
        }
    });
</script>
