<header class="bg-white drop-shadow-md">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo Section -->
        <div class="flex items-center">
            <img src="{{ asset('images/placeholder-image.jpg') }}" alt="STEP APP Logo" class="h-10 w-10">
            <span class="ml-3 text-xl font-bold text-step-800">STEPAPP TBI</span>
        </div>

        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-8 text-gray-500 ">
            <a  href="{{route('home')}}" class="{{RouteManager::isCurrentPage(Session::get('current_route_name'),['home'],'active-link','inactive-link')}}">Home</a>
            <a  href="{{route('program')}}" class="{{RouteManager::isCurrentPage(Session::get('current_route_name'),['program'],'active-link','inactive-link')}}">Programs</a>
            <a href="#" class="hover:text-step-700">Advisory Board</a>
            <a href="#" class="hover:text-step-700">Events</a>
            <a href="#" class="hover:text-step-700">News</a>
        </nav>

        <!-- Apply Now Button -->
        <div>
            <a href="#" class="bg-step-800 text-white font-semibold py-2 px-4 rounded-lg hover:bg-step-700">
                Join Now
            </a>
        </div>
    </div>
</header>
