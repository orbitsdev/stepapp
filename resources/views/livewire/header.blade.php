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
            <a href="{{route('advisory-board')}}" class="{{RouteManager::isCurrentPage(Session::get('current_route_name'),['advisory-board'],'active-link','inactive-link')}}">Advisory Board</a>
            <a href="{{route('events')}}" class="{{RouteManager::isCurrentPage(Session::get('current_route_name'),['events'],'active-link','inactive-link')}}">Events</a>
            <a href="{{route('news')}}" class="{{RouteManager::isCurrentPage(Session::get('current_route_name'),['news'],'active-link','inactive-link')}}">News</a>

        </nav>

        <!-- Apply Now Button -->
        <a href="{{route('join')}}" class="bg-step-800 text-white font-semibold py-2 px-4 rounded-lg hover:bg-step-800 hover:scale-105 transition-transform duration-300">
            Join Now
        </a>

    </div>
</header>
