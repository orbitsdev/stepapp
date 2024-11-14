
<div class="border-b border-gray-300">

    <div class="container mx-auto  py-16 px-4">
        <div class="text-center">

            <h3 class="text-sm font-semibold  uppercase text-center">{{$advisory->target ??''}}</h3>
            <h2 class="text-3xl  md:text-4xl font-bold text-step-800 mt-2 mb-4 uppercase text-center">{{$advisory->title ??''}}</h2>

            <div class="advisory">

                <div class="prose    flex items-center justify-center max-w-2xl mx-auto">
                    @markdown($advisory->content ??'')

                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
            @foreach ($advisoryMembers as $member)
            <div class="bg-white rounded-md  border border-[##EAECF0] overflow-hidden">
             <img src="{{$member->getFirstMediaUrl()}}" alt="{{ $member->name }}" class="w-full h-48 object-contain">

                <div class="p-4">
                    <h3 class="text-xl font-medium text-[#282828]">{{ $member->name }}</h3>
                    <p class="text-step-gray">{{ $member->title }}</p>
                    <p class="text-step-gray text-sm my-2">{{ $member->description }}</p>
                    <div class="flex justify-start space-x-4 mt-6">
                        <a href="#" class="rounded-full bg-[#F2F4F7] h-10 w-10 flex items-center justify-center text-[#282828] hover:bg-step-primary hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="rounded-full bg-[#F2F4F7] h-10 w-10 flex items-center justify-center text-[#282828] hover:bg-step-primary hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="rounded-full bg-[#F2F4F7] h-10 w-10 flex items-center justify-center text-[#282828] hover:bg-step-primary hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="mt-16">

        </div>

        <div class="container mx-auto  py-16 px-4 border-t border-gray-300">
            <div class="text-center">

                <h2 class="text-3xl  md:text-4xl font-bold text-step-800 mt-2 mb-8 uppercase">MEET OUR TEAM</h2>
                <p class="text-lg  text-step-gray mb-8 max-w-2xl mx-auto">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some form, by injected humour
                </p>

            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
                @foreach ($teamMembers as $member)
                <div class="bg-white rounded-md  border border-[#EAECF0] overflow-hidden">
                 <img src="{{$member->getFirstMediaUrl()}}" alt="{{ $member->name }}" class="w-full h-48 object-contain">

                    <div class="p-4">
                        <h3 class="text-xl font-medium text-[#282828]">{{ $member->name }}</h3>
                        <p class="text-step-gray">{{ $member->title }}</p>
                        <p class="text-step-gray text-sm my-2">{{ $member->description }}</p>
                        <div class="flex justify-start space-x-4 mt-6">
                            <a href="#" class="rounded-full bg-[#F2F4F7] h-10 w-10 flex items-center justify-center text-[#282828] hover:bg-step-primary hover:text-white transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="rounded-full bg-[#F2F4F7] h-10 w-10 flex items-center justify-center text-[#282828] hover:bg-step-primary hover:text-white transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="rounded-full bg-[#F2F4F7] h-10 w-10 flex items-center justify-center text-[#282828] hover:bg-step-primary hover:text-white transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>




    </div>

</div>
