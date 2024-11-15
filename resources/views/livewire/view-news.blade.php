<div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
    <!-- Main Content -->
    <div class="col-span-2">
        <div class="space-y-6">
            <!-- Date and Title -->
            <div class="container mx-auto flex items-center justify-between ">
                <!-- Back Button -->


                <!-- Record Details -->
                <div class="">
                    <p class="text-gray-500 text-sm">{{$record->getCreatedAtFormattedAttributeHumanDisplay()}}</p>
                    <!-- Add other record details here -->
                </div>
                <div class="flex items-center">
                    <a
                        href="{{ url()->previous() !== url()->current() ? url()->previous() : route('home') }}"
                        class="inline-flex items-center text-step-primary hover:underline text-sm text-gray-500"
                    >
                        <i class="fa fa-arrow-left mr-2"></i> Back
                    </a>
                </div>
            </div>


            <h1 class="text-3xl font-bold text-step-800 leading-tight">
                {{$record->title}}
            </h1>



            <div class="overflow-hidden rounded-md">
                <img src="{{$record->getFirstMediaUrl()}}" alt="Announcement" class="w-full object-cover">
            </div>


            <div class="view-news">

                <div class="prose  max-w-none w-full">
                    @markdown($record->description ??'')

                </div>
            </div>
            <!-- Content -->

        </div>
    </div>

    <!-- Sidebar -->
    <aside class="col-span-1 space-y-8">
        <!-- Recent Articles -->
        <div class="p-4 border  border-gray-300 rounded-md bg-white shadow">
            <h2 class="text-lg font-bold text-step-800 mb-4">RECENT ARTICLES</h2>
            <ul class="space-y-4">
                @foreach ($recentEvents as $event)
                <a href="{{ route('view-events', ['record' => $event->id]) }}" class="block">
                    <li class="flex items-start space-x-3">
                        <div>
                            <!-- Display the start date with an icon -->
                            <p class="text-sm text-step-gray flex items-center">
                                <i class="fa-regular fa-calendar mr-2"></i> {{ $event->getStartDateFormattedAttribute() }}
                            </p>

                            <!-- Title of the event -->
                            <p class="text-sm font-semibold text-step-800 mt-1">
                                {{ Str::limit($event->title, 60) }}
                            </p>

                            <!-- Event description -->
                            <p class="text-[#575757] text-sm mt-1">
                                {{ Str::limit($event->description, 90) }}
                            </p>
                        </div>
                    </li>
                </a>
                @endforeach

            </ul>
        </div>
    </aside>

</div>
