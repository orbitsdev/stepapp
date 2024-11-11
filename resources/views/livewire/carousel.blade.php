<div class="container  mx-auto mt-16 mb-[64px]">
    <div class="swiper mySwiper w-full aspect-video max-h-[600px] max-w-6xl">
        <div class="swiper-wrapper w-full h-full " >
            @foreach ($caroucels as $caroucel)
                <div class="swiper-slide flex items-center justify-center rounded-[40px] overflow-hidden shadow-md w-full">
                    <img
                        src="{{ $caroucel->getFirstMediaUrl() ?? asset('images/placeholder-image.jpg') }}"
                        alt="Slide"
                        class="w-full h-full object-cover"
                    >
                </div>
            @endforeach
        </div>
         <!-- If we need pagination -->
         <div class="swiper-pagination"></div>

{{--
         <div class="swiper-button-prev"></div>
         <div class="swiper-button-next"></div> --}}

  <!-- If we need navigation buttons -->

    </div>
</div>
