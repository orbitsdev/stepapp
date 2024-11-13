<div class="container mx-auto my-14 px-4 text-left border-b  pb-16 border-gray-300  ">
    <!-- Section Title -->
    <h2 class="text-3xl md:text-4xl font-bold text-step-800 mb-4">
        {{$jog->title}}
    </h2>

    <div class="jog">

        <div class="prose  max-w-none">
            @markdown($jog->content ??'')

        </div>
    </div>

    <div class="container mx-auto mb-16 mt-14 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Left Column -->
            <div>
                <div class="col-span-2">
                    <p class="text-xl font-bold text-step-800 mb-4">MANDATORY</p>
                </div>
                @foreach ($mandatory as $item)
                <h3 class="text-xl font-bold text-step-800 mb-4">{{$item->title}}</h3>
                <ul class="list-disc pl-5 text-step-gray">
                    @foreach ($item->units as $unit )
                    <li>{{$unit->title}}</li>
                    @endforeach
                    @foreach ($item->outputs as $output )
                    <li>{{$output->description}}</li>
                    @endforeach
                </ul>
                @endforeach



            </div>


            <!-- Right Column -->
            <div>
                <div class="col-span-2">
                    <p class="text-xl font-bold text-step-800 mb-4">ELECTIVE</p>
                </div>
                @foreach ($elective as $item)
                <h3 class="text-xl font-bold text-step-800 mb-4">{{$item->title}}</h3>
                <ul class="list-disc pl-5 text-step-gray">
                    @foreach ($item->units as $unit )
                    <li>{{$unit->title}}</li>
                    @endforeach
                    @foreach ($item->outputs as $output )
                    <li>{{$output->description}}</li>
                    @endforeach

                </ul>
                @endforeach
                @if($jog->note)
                <p class="mt-6 text-red-600 font-semibold">{{$jog->note}}</p>
                @endif
                @if($jog->final)
                <div class="mt-12 text-4xl text-step-800 text-center font-bold">{{$jog->final ??''}}</div>
                @endif

            </div>
        </div>
    </div>


</div>
