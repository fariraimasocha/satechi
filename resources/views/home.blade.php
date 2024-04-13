<x-layout>
    <div id="default-carousel" class="relative overflow-hidden shadow-lg" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-80 md:h-96 w-full" data-carousel-inner>
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out w-full" data-carousel-item>
                <img src="{{ asset('images/slider.jpg') }}" class="object-cover w-full h-full" alt="Slide 1">
                <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold text-white md:text-2xl dark:text-gray-800">First Slide</span>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out w-full" data-carousel-item>
                <img src="{{ asset('images/slider2.jpg') }}" class="object-cover w-full h-full" alt="Slide 2">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out w-full" data-carousel-item>
                <img src="{{ asset('images/slider.jpg') }}" class="object-cover w-full h-full" alt="Slide 3">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition" data-carousel-prev>
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button type="button" class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition" data-carousel-next>
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <div class="bg-blue1 py-4">
        <p class="text-white uppercase w-10/12 mx-auto">The South African Technology Institute equips students with the best tools for studying.
            Our laboratories are filled with the latest equipment. When a student completes their studies with us,
            they transition seamlessly into the work environment. </p>
        <div class="w-10/12 mx-auto flex justify-between">
            <div class="w-96 mt-3.5 rounded-lg overflow-hidden">
                <div class="bg-orange1 py-2 px-6">
                    <h1 class="text-white text-lg font-semibold">
                        Degree in Computer Science
                    </h1>
                </div>
                <div class="bg-white py-4 px-6">
                    <div class="text-sm">
                        <p>1277 Seats Available</p>
                        <p>2 Lectures</p>
                        <p>3 Computer Labs</p>
                        <p>Online and Physical Lectures</p>
                        <p>Online Exams</p>
                        <p>99% Pass rate</p>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <h1 class="font-semibold text-xl">
                            R 154 678,00
                        </h1>
                        <div class="flex space-x-2">
                            <button class="bg-blue1 text-white rounded-lg px-3 py-1 hover:bg-orange1 transition">View</button>
                            <button class="bg-blue1 text-white rounded-lg px-3 py-1 hover:bg-orange1 transition">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-96 mt-3.5 rounded-lg overflow-hidden">
                <div class="bg-orange1 py-2 px-6">
                    <h1 class="text-white text-lg font-semibold">
                        Degree in Computer Science
                    </h1>
                </div>
                <div class="bg-white py-4 px-6">
                    <div class="text-sm">
                        <p>1277 Seats Available</p>
                        <p>2 Lectures</p>
                        <p>3 Computer Labs</p>
                        <p>Online and Physical Lectures</p>
                        <p>Online Exams</p>
                        <p>99% Pass rate</p>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <h1 class="font-semibold text-xl">
                            R 154 678,00
                        </h1>
                        <div class="flex space-x-2">
                            <button class="bg-blue1 text-white rounded-lg px-3 py-1 hover:bg-orange1 transition">View</button>
                            <button class="bg-blue1 text-white rounded-lg px-3 py-1 hover:bg-orange1 transition">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-96 mt-3.5 rounded-lg overflow-hidden">
                <div class="bg-orange1 py-2 px-6">
                    <h1 class="text-white text-lg font-semibold">
                        Degree in Computer Science
                    </h1>
                </div>
                <div class="bg-white py-4 px-6">
                    <div class="text-sm">
                        <p>1277 Seats Available</p>
                        <p>2 Lectures</p>
                        <p>3 Computer Labs</p>
                        <p>Online and Physical Lectures</p>
                        <p>Online Exams</p>
                        <p>99% Pass rate</p>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <h1 class="font-semibold text-xl">
                            R 154 678,00
                        </h1>
                        <div class="flex space-x-2">
                            <button class="bg-blue1 text-white rounded-lg px-3 py-1 hover:bg-orange1 transition">View</button>
                            <button class="bg-blue1 text-white rounded-lg px-3 py-1 hover:bg-orange1 transition">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
