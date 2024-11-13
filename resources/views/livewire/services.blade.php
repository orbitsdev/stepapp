<div class="container mx-auto my-16 px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-step-800 mb-6">Here are the key services we provide:</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        @foreach ($services as $service)

        <div>
            <h3 class="text-xl font-bold text-step-800">{{$service->title}}</h3>
            <p class="text-step-gray">
                {{$service->description}}
            </p>
        </div>
        @endforeach

    </div>
</div>
