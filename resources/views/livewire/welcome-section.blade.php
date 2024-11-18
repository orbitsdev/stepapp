@if($welcome)
<div class="container mx-auto text-center my-16   mt-28 block border-b border-gray-300 pb-12 rounded-b-sm welcome welcome-container">
    <h2 class="text-4xl md:text-4xl  font-bold text-step-800 mb-6 w-title">{{$welcome->title}}</h2>
    <div class="flex items-center justify-center mt-8">

        <p class="text-lg md:text-xl text-step-gray leading-[1.5px]  max-w-7xl ph ">
            {{$welcome->description}}
        </p>
    </div>
</div>
@endif
