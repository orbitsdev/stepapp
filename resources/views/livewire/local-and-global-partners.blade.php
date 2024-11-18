<div class="container mx-auto my-16 px-4 global-partners-container">
    <!-- Section Title and Subtitle -->
    <div class="mb-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-step-800 mb-2">LOCAL AND GLOBAL PARTNERS</h2>
    </div>

    <!-- News Grid -->
    <div class="container mx-auto mt-12">
        <div class="grid grid-cols-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 items-center justify-center ">
          @foreach ($partners as $partner)
          <a href="{{$partner->getFirstMediaUrl()}}" target="_blank" class="flex justify-center items-center">
              <div class="flex justify-center items-center p-4">
                  <img
                  src="{{$partner->getFirstMediaUrl()}}"
                  alt="{{ $partner->name }}"
                  class="w-full max-w-[180px] h-auto object-contain"
                  />
              </div>
            </a>
          @endforeach
        </div>
      </div>
</div>
