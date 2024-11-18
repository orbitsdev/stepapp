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
                    <div class="flex justify-start space-x-6 mb-4">
                        <a href="{{$footerSection->facebook}}" target="_blank" class="text-gray-600 hover:text-blue-600">
                            <i class="fab fa-facebook fa-lg"></i>
                        </a>

                        <a href="{{$footerSection->instagram}}" target="_blank" class="text-gray-600 hover:text-pink-500">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="{{$footerSection->tiktok}}" target="_blank" class="text-gray-600 hover:text-blue-700">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                        <a href="{{$footerSection->email}}" target="_blank" class="text-gray-600 hover:text-red-600">
                            <i class="fab fa-google fa-lg"></i>
                        </a>


                    </div>
                    <p class="text-gray-600">Phone: <a href="tel:+1234567890" class="hover:text-blue-500 mt-8">
                        0945 853 0019</a></p>
                </div>

            </div>

            <!-- Center Section: About Us Links -->
            <div class="">
                <ul>
                    <li class="font-bold text-step-800 mb-2">About Us</li>
                    <li><a href="{{route('program')}}#incubation-program" class="text-gray-600 hover:text-blue-500">Incubation Program</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Contact Us</a></li>
                    <li><a href="{{route('advisory-board')}}" class="text-gray-600 hover:text-blue-500">Advisory Board</a></li>
                </ul>
            </div>

            <!-- Right Section: Resources Links -->
            <div class="">
                <ul>
                    <li class="font-bold text-step-800 mb-2">Resources</li>
                    <li><a href="{{route('news')}}/#" class="text-gray-600 hover:text-blue-500">News</a></li>
                    <li><a href="{{ route('advisory-board') }}#advisory-board-section" class="text-gray-600 hover:text-blue-500">Advisory Board</a></li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-300 pt-4 grid grid-cols-1 lg:grid-cols-2 gap-4 " >
            <!-- Left Section: Copyright -->
            <p class="text-gray-500 text-sm text-center lg:text-left flex items-center  ">
                {{$footerSection->copy_right ??''}}
            </p>

            <!-- Right Section: Partnership Logos -->
            <div class="flex items-center justify-center lg:justify-end">
                <span class="text-gray-500 text-sm mr-2"> {{$footerSection->powered_by ??''}}</span>
                @foreach ($footerSection->getMedia('partners') as $partner)
                <img src="{{ $partner->getUrl()}}" alt="Partner Logo 1" class="w-10 h-10 mx-2 rounded-full">
            @endforeach


            </div>
        </div>
    </div>
</footer>
