<a href="/achievement/{{ $slug }}" class="">
    <article data-slide-achievement="{{ $index+1 }}" class="size-full relative">
        <figcaption class="bg-gradient-to-t lg:bg-gradient-to-r from-slate-900 to-white/0 size-full flex absolute rounded-2xl">
            <div class="flex w-full lg:w-2/3 lg:flex-col items-end lg:items-start lg:justify-center p-2 lg:gap-8 lg:py-12 lg:px-20">
              <div class="flex flex-col text-center lg:text-start">
                  <p class="font-semibold text-2xl lg:text-6xl text-slate-50 lg:leading-[90px]">{{ $rankings }}</p>
                  <h3 class="text-lg lg:text-5xl text-slate-50 lg:leading-[72px] h-[2lh] lg:h-[3lh] line-clamp-2 lg:line-clamp-3">{{ $title }}</h3>
              </div>
              <div class="hidden lg:flex bg-blue-600 py-1 px-2 lg:py-2 lg:px-4 gap-1 rounded-lg w-fit items-center hover:bg-blue-700 transition-all duration-300">
                <p class="text-slate-50 text-sm lg:text-xl">Selengkapnya</p>
                <span class="icon-[mdi--arrow-right] text-sm lg:text-xl text-slate-50"></span>
              </div>
            </div>
        </figcaption>
        <figure class="size-full bg-no-repeat bg-center bg-cover rounded-2xl" style="background-image: url(/storage/{{ $photo }});"></figure>
    </article>
</a>   