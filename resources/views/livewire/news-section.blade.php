<div class="container mx-auto  my-16 px-4 newssection">
    <!-- Section Title and Subtitle -->
    <div class="mb-8">
        <h2 class="text-3xl md:text-4xl font-bold text-step-800 mb-2">{{$newsSection->title}}</h2>
        <p class="text-lg md:text-xl text-[#3c3c3c]">{{$newsSection->description}}</p>
    </div>

    <!-- News Grid -->
    <div class="grid grid-cols-1  lg:grid-cols-3 gap-12  container">
        @foreach ($news as $item)
        <div class="bg-white rounded-lg shadow-md overflow-hidden newscard">
            <a href="{{$item->getFirstMediaUrl()}}" target="_blank">

                <img src="{{$item->getFirstMediaUrl()}}" alt="{{$item->title}}" class="w-full h-48 object-cover">
            </a>

            {{-- {{$item->getFirstMediaUrl()}} --}}
            <div class="p-4 text-left">
                <h3 class="text-xl font-bold text-step-800 mb-2 uppercase nh  n-title nw">{{  Str::limit($item->title, 100) }}</h3>
                <p class="text-[#575757] text-sm my-2">
                    {{-- @markdown( ) --}}
{{                    Str::limit($item->description, 230) }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
