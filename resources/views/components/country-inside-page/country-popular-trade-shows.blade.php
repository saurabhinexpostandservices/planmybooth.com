<div class="pb-10 font-lato">
    <h2 class="text-[#3D94AC] text-center text-xl md:text-2xl lg:text-3xl font-semibold py-5 md:py-10 uppercase">
        Popular Trade Show In United States
    </h2>
    <div class="max-w-screen-xl mx-auto overflow-hidden slider ">
        <!-- Slides will be dynamically inserted here -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sliderData = [{
                id: 1,
                link: "https://www.tissueworld.com/miami/en/home.html",
                title: "Tissue World Miami 2026",
                date: "25 Feb - 27 Feb 2026",
                location: "Miami Beach Convention Center",
                image: "/assets/shows-logo/Tissue world Miami.png",
            },
            {
                id: 2,
                link: "https://www.ces.tech/attendee-guides/registration-information/",
                title: "CES 2026",
                date: "6 Jan - 9 Jan 2026",
                location: "Las Vegas",
                image: "/assets/shows-logo/CES.png",
            },
            {
                id: 3,
                link: "https://www.namm.org/thenammshow/attend",
                title: "The NAMM Show 2026",
                date: "20 Jan - 24 Jan 2026",
                location: "Anaheim Convention Center, Southern California",
                image: "/assets/shows-logo/TheNaamShow.png",
            },
            {
                id: 4,
                link: "https://www.discoverisc.com/west/en-us.html#/",
                title: "ISC WEST CONCERT 2025",
                date: "31 Mar - 4 April 2025",
                location: "Shanghai, China",
                image: "/assets/shows-logo/Isc-West.png",
            },
            {
                id: 5,
                link: "https://www.cphi.com/americas/en/home.html",
                title: "CPHI Americas 2025",
                date: "20 May - 22 May 2025",
                location: "Pennsylvania Convention Center, Philadelphia",
                image: "/assets/shows-logo/cphi-logo.png",
            },
            {
                id: 6,
                link: "https://lasvegas.jckonline.com/#/",
                title: "JCK 2025",
                date: "6 June - 9 June 2025",
                location: "The Venetian Expo, Las Vegas, NV",
                image: "/assets/shows-logo/JCK.png",
            },
            {
                id: 7,
                link: "https://sweetsandsnacks.com/",
                title: "Sweets & Snacks Expo 2025",
                date: "13 May - 15 May 2025",
                location: "Indiana Convention Center, Indianapolis, Indiana, USA",
                image: "/assets/shows-logo/sweets.webp",
            },
            {
                id: 8,
                link: "https://www.infocommshow.org/",
                title: "InfoComm 2025",
                date: "7 June - 13 June 2025",
                location: "Orange County Convention Center, California, USA",
                image: "/assets/shows-logo/Infocomm.png",
            },
            {
                id: 9,
                link: "https://www.ibsnewyork.com/",
                title: "IBS and IECSC New York 2025",
                date: "23 March - 25 March 2025",
                location: "Javits Convention Center, New York City",
                image: "/assets/shows-logo/IBS.png",
            },
            {
                id: 10,
                link: "https://www.specialtyfood.com/fancy-food-shows/summer/",
                title: "The SFA Summer Food Show 2025",
                date: "29 June - 01 July 2025",
                location: "Javits Center, New York City",
                image: "/assets/shows-logo/sfa-shows.png",
            },
            {
                id: 11,
                link: "https://cosmoprofnorthamerica.com/",
                title: "Cosmoprof North America 2025",
                date: "15 July - 17 July 2025",
                location: "Mandalay Bay Convention Center, Las Vegas",
                image: "/assets/shows-logo/Cosmoprof-North-America.png",
            },
            {
                id: 12,
                link: "https://www.semiconwest.org/",
                title: "SEMICON West Arizona 2025",
                date: "7 Oct - 9 Oct 2025",
                location: "Arizona, the Grand Canyon Stat",
                image: "/assets/shows-logo/SEMICON-WEST.png",
            },
            {
                id: 13,
                link: "https://www.supplysideglobal.com/en/home.html",
                title: "Supply Side West 2025",
                date: "27 Oct - 30 Oct 2025",
                location: "Mandalay Bay, Las Vegas",
                image: "/assets/shows-logo/SUPPLY-SIDE-WEST.png",
            },
            {
                id: 14,
                link: "https://www.testing-expo.com/usa/en/reg-info.php",
                title: "Automotive Testing Conference 2025",
                date: "21 Oct - 23 Oct 2025",
                location: "Suburban Collection Showplace, Novi, Michigan",
                image: "/assets/shows-logo/automotive-testing-expo.png",
            },
            {
                id: 15,
                link: "https://nbaa.org/events/2025-nbaa-business-aviation-convention-exhibition-nbaa-bace/",
                title: "(NBAA-BACE) 2025",
                date: "14 Oct - 16 Oct 2025",
                location: "Las Vegas, NV",
                image: "/assets/shows-logo/NBAA.png",
            },
            {
                id: 16,
                link: "https://us.money2020.com/",
                title: "Money20/20 USA 2025",
                date: "26 Oct - 29 Oct 2025",
                location: "Las Vegas",
                image: "/assets/shows-logo/Money-2020.png",
            },
            {
                id: 17,
                link: "https://www.mwclasvegas.com/register-your-interest",
                title: "MWC Las Vegas 2025",
                date: "14 Oct - 16 Oct 2025",
                location: "Las Vegas Convention Center, Central Hall",
                image: "/assets/shows-logo/MWC.png",
            },
            {
                id: 18,
                link: "https://www.semashow.com/attendee",
                title: "The SEMA Show 2025",
                date: "4 Nov - 7 Nov 2025",
                location: "Las Vegas Convention Center",
                image: "/assets/shows-logo/SEMA-show.png",
            },
            {
                id: 19,
                link: "https://www.aapexshow.com/exhibitor/exciting-changes-are-coming-to-aapex-in-2025/",
                title: "AAPEX in 2025",
                date: "4 Nov - 6 Nov 2025",
                location: "Las Vegas, NV",
                image: "/assets/shows-logo/AAPEX-EXPO.png",
            },

        ];

        const slider = document.querySelector(".slider");

        // Generate slides dynamically
        slider.innerHTML = sliderData
            .map(
                ({
                    link,
                    title,
                    date,
                    location,
                    image
                }) => `
            <a href="${link}" class="px-3">
                <div class="text-center border-2 border-[#269BD2] w-full h-72 px-5 py-3 bg-gradient-to-b from-[#e0f7fa] to-[#ffffff] hover:shadow-xl transition-shadow transform duration-500 rounded-lg relative overflow-hidden">
                    <div class="absolute -top-10 -left-10 w-36 h-36 bg-[#269BD2] opacity-10 rounded-full"></div>
                    <div class="mx-auto w-28 h-28 bg-white mb-3 flex justify-center items-center shadow-md">
                        <img src="${image}" alt="${title} logo" class=" h-28 w-28 object-contain bg-[#D3F0F6]" loading="lazy" />
                    </div>
                    <h3 class="text-gray-800 text-center text-base font-semibold uppercase border-b border-[#dc6d99] mx-auto py-2">
                        ${title}
                    </h3>
                    <p class="text-gray-500 px-4 mt-3 text-xs flex items-center justify-center gap-2">${date}</p>
                    <p class="text-[#269BD2] px-4 text-xs flex items-center justify-center gap-2">${location}</p>
                </div>
            </a>
        `
            )
            .join("");

        // Initialize Slick Carousel
        $(".slider").slick({
            dots: false,
            infinite: true,
            speed: 700,
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    });
</script>
