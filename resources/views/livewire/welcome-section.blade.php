@if($welcome)
<div class="container mx-auto text-center my-16  mt-24 block border-b border-[#a1a1a1] pb-8">
    <h2 class="text-3xl md:text-4xl font-bold text-step-800 mb-6">{{$welcome->title}}</h2>
    <p class="text-lg md:text-xl text-step-gray leading-relaxed px-4">
       {{$welcome->description}}
    </p>
</div>
@endif
