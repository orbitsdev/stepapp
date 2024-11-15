<div class="container mx-auto  my-16 px-4  ">
    <h2 class="text-3xl md:text-4xl font-bold text-step-800 mb-4">Recent Events</h2>
    <p class="text-lg text-[#3c3c3c] mb-8">Read the latest happenings in STEPAPP</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($recentEvents as $event)
            <a href="{{route('view-events',['record'=> $event-id])}}" class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                <img src="{{ $event->getFirstMediaUrl() ?? asset('images/placeholder-image.jpg') }}" alt="Event Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-step-800">{{ $event->title }}</h3>
                    <p class="text-[#575757] text-sm my-2">
                        {{    Str::limit($event->description, 230) }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</div>
