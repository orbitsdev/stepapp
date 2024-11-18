<div class="move-container" id="incubation-program">
   <!-- Section Title -->
   <h2 class="text-3xl md:text-4xl font-bold text-step-800 mb-4">
    {{$move->title ??''}}
</h2>

<!-- Section Description -->
<div class="move">

    <div class="prose  max-w-none">
        @markdown($move->content ??'')

    </div>
</div>





<!-- Value Proposition Image Section -->
<div class="mt-12">
    <a href="{{$move->getFirstMediaUrl()}}" target="_blank">

        <img src="{{$move->getFirstMediaUrl()}}" alt="Value Proposition Image" class="max-w-full h-auto mx-auto max-h-[800px]">
    </a>
</div>
</div>
