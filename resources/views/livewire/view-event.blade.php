<div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
    <!-- Main Content -->
    <div class="col-span-2 space-y-6">
        <!-- Header Section -->
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">{{ $record->getStartDateFormattedAttribute() }} - {{ $record->getEndDateFormattedAttribute() ?? 'Ongoing' }}</p>
                <h1 class="text-3xl font-bold text-step-800 leading-tight mt-2">
                    {{ $record->title }}
                </h1>
                <p class="text-step-gray mt-2">{{ $record->location }}</p>
            </div>
            <div class="flex items-center">
                <a href="{{ url()->previous() !== url()->current() ? url()->previous() : route('home') }}"
                   class="inline-flex items-center text-step-primary hover:underline text-sm">
                    <i class="fa fa-arrow-left mr-2"></i> Back
                </a>
            </div>
        </div>

        <!-- Event Image -->
        <div class="rounded-lg overflow-hidden">
            <img src="{{ $record->getFirstMediaUrl() }}" alt="{{ $record->title }}" class="w-full object-cover h-64">
        </div>

        <!-- Event Description -->
        <div class="prose max-w-none w-full text-step-gray">
            @markdown($record->description ?? '')
        </div>
    </div>

    <!-- Sidebar -->
    <aside class="col-span-1 space-y-8">
        <!-- Recent Events -->
        <div class="p-4 border border-gray-300 rounded-md bg-white shadow">
            <h2 class="text-lg font-bold text-step-800 mb-4">Upcoming Events</h2>
            <ul class="space-y-4">
                @foreach ($recentEvents as $event)
                <li class="flex items-start space-x-3">
                    <a href="{{route('view-events',['record'=>$event->id])}}" >
                        <p class="text-sm text-step-gray flex items-center">
                            <i class="fa-regular fa-calendar mr-2"></i> {{ $event->getStartDateFormattedAttribute() }}
                        </p>
                        <h3 class="text-sm font-semibold text-step-800 mt-1">
                            {{ Str::limit($event->title, 60) }}
                        </h3>
                        <p class="text-[#575757] text-sm mt-1">
                            {{ Str::limit($event->description, 90) }}
                        </p>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </aside>
</div>
