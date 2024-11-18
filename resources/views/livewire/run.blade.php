<div class="container mx-auto  px-4 text-left border-b  pb-16 border-gray-300 run-container  ">
    <!-- Section Title -->
    <h2 class="text-3xl md:text-4xl font-bold text-step-800 mb-4">
        {{$run->title}}
    </h2>

    <div class="walk">

        <div class="prose  max-w-none">
            @markdown($run->content ??'')

        </div>
    </div>

    <!-- Activities Section -->
    <div class="mt-8">
        <h3 class="text-2xl font-bold text-step-800 mb-4">ACTIVITIES</h3>
        <ol class="list-decimal list-inside text-lg">
            @foreach ($run->runActivities as $activity )
            <li>  {{$activity->title??''}}</li>
            @endforeach

        </ol>
    </div>
</div>
