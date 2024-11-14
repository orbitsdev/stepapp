<div class="container mx-auto my-16 px-4">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl md:text-4xl font-bold text-step-800">News Updates</h2>
        <p class="text-step-gray text-md">— {{ now()->format('d M Y') }}</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main News Grid (2/3 of the section) -->
        <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($mainNews as $news)
                <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <img src="{{ $news->getFirstMediaUrl() ?? asset('images/placeholder-image.jpg') }}" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex items-center text-sm text-step-gray mb-2">
                            <span class="mr-4"><i class="fa fa-calendar"></i> {{ $news->date }}</span>
                            <span><i class="fa fa-comment"></i> {{ $news->comments_count }} Comments</span>
                        </div>
                        <h3 class="text-xl font-bold text-step-800">{{ $news->title }}</h3>
                        <p class="text-step-gray text-sm my-2">{{ Str::limit($news->description, 100) }}</p>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center">
                                <img src="{{ $news->getFirstMediaUrl() ?? asset('images/avatar-placeholder.jpg') }}" alt="{{ $news->title }}" class="w-8 h-8 rounded-full mr-2">
                                <span class="text-sm text-step-gray">Anna</span>
                            </div>
                            <a href="#" class="text-step-primary text-sm font-semibold">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Sidebar for More News (1/3 of the section) -->
        <div>
            <h3 class="text-xl font-bold text-step-800 mb-4">More News</h3>
            <ul class="space-y-4">
                @foreach ($moreNews as $news)
                    <li class="flex space-x-4">
                        <img src="{{ $news->getFirstMediaUrl() ?? asset('images/placeholder-image.jpg') }}" alt="News Image" class="w-16 h-16 object-cover rounded">
                        <div>
                            <a href="#" class="text-md font-semibold text-step-800">{{ $news->title }}</a>
                            <p class="text-sm text-step-gray">
                                {{ Str::limit($item->description, 100)}}

                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
