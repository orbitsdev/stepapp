<div class="container mx-auto  my-16 px-4">
    <!-- Section Title and Subtitle -->
    <div class="mb-8">
        <h2 class="text-3xl md:text-4xl font-bold text-step-800 mb-2">Recent News</h2>
        <p class="text-lg md:text-xl text-step-gray">Read the latest happening in STEPAPP</p>
    </div>

    <!-- News Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8  max-w-6xl">
        @foreach ($news as $item)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/placeholder-image.jpg') }}" alt="News Image" class="w-full h-48 object-cover">
            <div class="p-4 text-left">
                <h3 class="text-xl font-bold text-step-800 mb-2">{{ $item->title }}</h3>
                <p class="text-step-gray text-sm my-2">
                    @markdown($item->description)
                    
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
