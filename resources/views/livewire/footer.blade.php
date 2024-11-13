<footer class="bg-gray-100 py-8">
    <div class="container mx-auto ">
        <!-- Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 mb-8">
            <!-- Left Section: Logo and Description -->
            <div>
                <div class="flex items-center justify-center ">

                    <img src="{{$footerSection->getFirstMediaUrl()}}" alt="Step App Logo" class="bg-cover max-h-32 w-auto">
                </div>
            </div>
            <div class=" lg:text-left">

                <p class="text-gray-500 ">
                    STEP APP TBI is funded through a grant received by Sultan Kudarat State University under the Higher Education Institution Readiness for Innovation and Technopreneurship (HEIRIT) Program of DOST.
                </p>
                <div class=" py-4  ">
                    <!-- Social Media Icons Row -->
                    <div class="flex justify-start space-x-6 mb-8">
                        <a href="https://facebook.com" target="_blank" class="text-gray-600 hover:text-blue-600">
                            <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="text-gray-600 hover:text-blue-400">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="text-gray-600 hover:text-pink-500">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="text-gray-600 hover:text-blue-700">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </a>
                        <a href="https://google.com" target="_blank" class="text-gray-600 hover:text-red-600">
                            <i class="fab fa-google fa-lg"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Center Section: About Us Links -->
            <div class="">
                <ul>
                    <li class="font-bold text-step-800 mb-2">About Us</li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Incubation Program</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Contact Us</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Advisory Board</a></li>
                </ul>
            </div>

            <!-- Right Section: Resources Links -->
            <div class="">
                <ul>
                    <li class="font-bold text-step-800 mb-2">Resources</li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">News</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Events</a></li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-300 pt-4 grid grid-cols-1 lg:grid-cols-2 gap-4">
            <!-- Left Section: Copyright -->
            <p class="text-gray-500 text-sm text-center lg:text-left">
                © 2024 STEP APP TBI
            </p>

            <!-- Right Section: Partnership Logos -->
            <div class="flex items-center justify-center lg:justify-end">
                <span class="text-gray-500 text-sm mr-2">Partnership project by</span>
                @foreach ($footerSection->getMedia('partners') as $partner)
                <img src="{{ $partner->getUrl()}}" alt="Partner Logo 1" class="w-10 h-10 mx-2 rounded-full">

            @endforeach


            </div>
        </div>
    </div>
</footer>
