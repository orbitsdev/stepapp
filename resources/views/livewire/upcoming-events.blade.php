<div class="container mx-auto my-16 px-4 ">
    <h2 class="text-3xl font-bold text-step-800 mb-6">Upcoming Events</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-12 mt-6 ">
        @foreach ($upcomingEvents as $event)
            <div class="text-left max-w-6xl">
                <h3 class="text-2xl font-bold text-[#282828] mb-2">{{ $event->title }}</h3>
                <p class="text-[#6c6c6c] text-base ">
                    <span class="">Location:</span> {{ $event->location }}
                </p>
                <p class="text-[#6c6c6c] text-base ">
                    <span class="">Date:</span> {{ $event->start_date }} {{ $event->end_date }}
                </p>
                <p class="text-[#6c6c6c] text-base">
                    <span class="">About:</span> {{ $event->description }}
                </p>
            </div>
        @endforeach
    </div>
</div>
