{{-- @dd($testimonials) --}}
<div class="w-full flex flex-col gap-9 lg:gap-12 px-4 pt-20 pb-9 lg:px-16 2xl:px-36 lg:pt-[120px] lg:pb-12 bg-slate-100">
    <!-- hero -->
    <figure class="relative flex w-full">
      <div class="w-full relative overflow-hidden h-[480px] lg:h-[560px]">
        <!-- slideshow -->
        @foreach($heros as $index => $hero)
          <div data-slide-hero="{{ $index+1 }}" style="background-image: url(/storage/{{ $hero }})" class="w-full absolute inset-0 {{ $loop->first ? 'opacity-100' : 'opacity-0' }} transition-opacity duration-[2s] h-[480px] lg:h-[560px] rounded-2xl bg-center bg-cover bg-no-repeat"></div>
        @endforeach
      </div>
      <div class="absolute flex w-full h-[480px] lg:h-[560px] rounded-2xl bg-gradient-to-t from-slate-900 to-white/0 justify-center px-4 py-6 lg:py-9 items-end">
        <!-- welcome text -->
        <figcaption class="flex flex-col text-center w-full gap-2">
          <p class="text-xs lg:text-2xl text-slate-50">Selamat Datang di Website Resmi,</p>
          <h1 class="text-4xl font-semibold text-slate-50 lg:text-7xl lg:leading-[108px]">SMK Negeri {{ $school->name }}</h1>
          <p class="text-slate-50 text-xs lg:text-2xl">"{{ $school->motto }}"</p>
        </figcaption>
        <!-- welcome text -->
      </div>
    </figure>
    <!-- hero -->

    <!-- summary -->
    <article class="flex w-full flex-col gap-4 lg:gap-6 text-center items-center">
      <figure class="flex gap-4 lg:gap-6 items-center justify-center">
        <img src="/img/svg/smk bisa.svg" class="h-8 lg:h-14" alt="smk-bisa" />
        <img src="/img/svg/vokasi.svg" class="h-12 lg:h-24" alt="vokasi" />
      </figure>
      <p class="lg:text-xl text-slate-700 line-clamp-[15] lg:line-clamp-5">
        {!! $school->description !!}
      </p>
      <livewire:components.more-button text="Selengkapnya" href="/about" />
      <!-- running partners -->
      <figure class="flex flex-col gap-2 lg:gap-4 items-center w-full">
        <h3 class="text-xl lg:text-3xl font-medium text-slate-800">Mitra DU/DI</h3>
        <p class="lg:text-xl text-slate-700 lg:w-3/5">
          SMKN 1 Kasreman bekerja sama dengan berbagai mitra DU/DI untuk mendukung pembelajaran siswa dan membuka peluang karir di dunia kerja.
        </p>
        <div class="flex overflow-x-hidden">
          <div class="flex *:object-contain *:h-12 gap-9 lg:gap-12 items-center flex-shrink-0 animate-partners-scroll pe-9 lg:pe-12">
            @foreach($partners as $partner)
            <img src="/storage/{{ $partner->logo }}" alt="" />
            @endforeach
          </div>
          <div class="flex *:object-contain *:h-12 gap-9 lg:gap-12 items-center flex-shrink-0 animate-partners-scroll pe-9 lg:pe-12">
            @foreach($partners as $partner)
            <img src="/storage/{{ $partner->logo }}" alt="" />
            @endforeach
          </div>
        </div>
      </figure>
      <!-- running partners -->
    </article>
    <!-- summary -->

    <!-- major -->
     <aside class="flex rounded-2xl bg-blue-600 w-full p-4 lg:py-6 lg:px-16 flex-col lg:flex-row lg:justify-between lg:items-center gap-4">
      <div class="flex flex-col gap-2 lg:gap-4 w-full lg:w-1/3 text-center lg:text-start">
        <h2 class="text-2xl lg:text-5xl font-medium text-slate-50">Konsentrasi <br> Keahlian</h2>
        <p class="lg:text-xl text-slate-100">Beberapa konsentrasi keahlian di SMKN 1 Kasreman dirancang untuk mengantarkan siswa meraih kesuksesan di masa depan.</p>
      </div>
      <div class="grid grid-cols-12 w-full lg:w-3/5 gap-2 lg:gap-4">
        @foreach($majors as $major)
          <livewire:components.card-major-home wire:key="{{ $major->id }}" :alias="$major->alias" :colSpan="$loop->first ? 'col-span-7' : ($loop->last ? 'col-span-7' : 'col-span-5')" :logo="$major->logo" :name="$major->name" />
        @endforeach
      </div>
     </aside>
    <!-- major -->

    <!-- achievement -->
    <aside class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <livewire:components.title-right text="Prestasi" span="Kita" />
      <div class="grid lg:grid-cols-4 gap-4">
        @foreach($achievements as $achievement)
          <livewire:components.card-achievement wire:key="{{ $achievement->id }}" :slug="$achievement->slug" :photo="$achievement->photo" :rankings="$achievement->rankings" :title="$achievement->title" :createdAt="$achievement->created_at" /> 
        @endforeach
        {{-- <a href="" class="w-full group">
          <article class="flex w-full lg:flex-col rounded-2xl gap-2 bg-white lg:group-hover:scale-105 duration-500 transition-all">
              <figure style="background-image: url(/img/achievement/achiev\ \(7\).jpg);" class="w-1/3 aspect-square lg:aspect-[4/3] lg:w-full rounded-s-2xl lg:rounded-b-none lg:rounded-t-2xl bg-cover bg-no-repeat bg-center"></figure>
              <figcaption class="w-2/3 lg:w-full flex flex-col gap-1 py-2 pr-2 lg:px-2 lg:pb-2 lg:items-center justify-between">
                  <div class="flex w-fit bg-blue-600 px-2 lg:px-4 lg:pb- rounded">
                      <p class="text-slate-50 text-xs lg:text-base">Juara 2</p>
                  </div>
                  <h4 class="text-sm lg:text-xl text-slate-700 lg:text-center h-[3lh] line-clamp-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reprehenderit commodi deleniti porro, dignissimos error at ab facere quisquam nemo.</h4>
                  <div class="flex gap-2 items-center">
                      <span class="icon-[mdi--calendar-badge] text-xs lg:text-sm text-slate-600"></span>
                      <p class="text-xs lg:text-sm text-slate-600">5 Januari 2024</p>
                  </div>
              </figcaption>
          </article>
        </a>
        <a href="" class="w-full group">
          <article class="flex w-full lg:flex-col rounded-2xl gap-2 bg-white lg:group-hover:scale-105 duration-500 transition-all">
              <figure style="background-image: url(/img/achievement/achiev\ \(7\).jpg);" class="w-1/3 aspect-square lg:aspect-[4/3] lg:w-full rounded-s-2xl lg:rounded-b-none lg:rounded-t-2xl bg-cover bg-no-repeat bg-center"></figure>
              <figcaption class="w-2/3 lg:w-full flex flex-col gap-1 py-2 pr-2 lg:px-2 lg:pb-2 lg:items-center justify-between">
                  <div class="flex w-fit bg-blue-600 px-2 lg:px-4 lg:pb- rounded">
                      <p class="text-slate-50 text-xs lg:text-base">Juara 2</p>
                  </div>
                  <h4 class="text-sm lg:text-xl text-slate-700 lg:text-center h-[3lh] line-clamp-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reprehenderit commodi deleniti porro, dignissimos error at ab facere quisquam nemo.</h4>
                  <div class="flex gap-2 items-center">
                      <span class="icon-[mdi--calendar-badge] text-xs lg:text-sm text-slate-600"></span>
                      <p class="text-xs lg:text-sm text-slate-600">5 Januari 2024</p>
                  </div>
              </figcaption>
          </article>
        </a>
        <a href="" class="w-full group">
          <article class="flex w-full lg:flex-col rounded-2xl gap-2 bg-white lg:group-hover:scale-105 duration-500 transition-all">
              <figure style="background-image: url(/img/achievement/achiev\ \(7\).jpg);" class="w-1/3 aspect-square lg:aspect-[4/3] lg:w-full rounded-s-2xl lg:rounded-b-none lg:rounded-t-2xl bg-cover bg-no-repeat bg-center"></figure>
              <figcaption class="w-2/3 lg:w-full flex flex-col gap-1 py-2 pr-2 lg:px-2 lg:pb-2 lg:items-center justify-between">
                  <div class="flex w-fit bg-blue-600 px-2 lg:px-4 lg:pb- rounded">
                      <p class="text-slate-50 text-xs lg:text-base">Juara 2</p>
                  </div>
                  <h4 class="text-sm lg:text-xl text-slate-700 lg:text-center h-[3lh] line-clamp-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reprehenderit commodi deleniti porro, dignissimos error at ab facere quisquam nemo.</h4>
                  <div class="flex gap-2 items-center">
                      <span class="icon-[mdi--calendar-badge] text-xs lg:text-sm text-slate-600"></span>
                      <p class="text-xs lg:text-sm text-slate-600">5 Januari 2024</p>
                  </div>
              </figcaption>
          </article>
        </a>
        <a href="" class="w-full group">
          <article class="flex w-full lg:flex-col rounded-2xl gap-2 bg-white lg:group-hover:scale-105 duration-500 transition-all">
              <figure style="background-image: url(/img/achievement/achiev\ \(7\).jpg);" class="w-1/3 aspect-square lg:aspect-[4/3] lg:w-full rounded-s-2xl lg:rounded-b-none lg:rounded-t-2xl bg-cover bg-no-repeat bg-center"></figure>
              <figcaption class="w-2/3 lg:w-full flex flex-col gap-1 py-2 pr-2 lg:px-2 lg:pb-2 lg:items-center justify-between">
                  <div class="flex w-fit bg-blue-600 px-2 lg:px-4 lg:pb- rounded">
                      <p class="text-slate-50 text-xs lg:text-base">Juara 2</p>
                  </div>
                  <h4 class="text-sm lg:text-xl text-slate-700 lg:text-center h-[3lh] line-clamp-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reprehenderit commodi deleniti porro, dignissimos error at ab facere quisquam nemo.</h4>
                  <div class="flex gap-2 items-center">
                      <span class="icon-[mdi--calendar-badge] text-xs lg:text-sm text-slate-600"></span>
                      <p class="text-xs lg:text-sm text-slate-600">5 Januari 2024</p>
                  </div>
              </figcaption>
          </article>
        </a> --}}
      </div>
      <footer>
        <livewire:components.more-button text="Prestasi Lainya" href="/achievement" />
      </footer>
    </aside>
    <!-- achievement -->

    <!-- gallery -->
    <aside class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <livewire:components.title-left text="Galeri" :span="$school->alias" />
      <figure class="grid grid-cols-2 lg:grid-cols-3 grid-rows-6 lg:grid-rows-3 w-full gap-2 lg:gap-4">
        <iframe class="w-full aspect-video lg:h-full lg:aspect-auto rounded-2xl col-span-2 row-span-2" src="https://www.youtube.com/embed/{{ $video_id }}?si=Hifffx7NdQLbAi2f&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        @foreach($galleries as $index  => $galerry)
        <div style="background-image: url(/storage/{{ $galerry }});" class="w-full aspect-video rounded-2xl bg-center bg-no-repeat bg-cover {{ $index == 2 ? 'col-span-2 row-span-2 lg:row-span-1 lg:col-span-1' : '' }}"></div>
        @endforeach
      </figure>
    </aside>
    <!-- gallery -->

    <!-- alumni story -->
    <aside class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <livewire:components.title-right text="Cerita" span="Alumni" />
      <div class="drag-to-scroll flex gap-4 w-full cursor-grab active:cursor-grabbing snap-x snap-mandatory overflow-x-scroll pt-10 lg:pt-14 p-2">
        @foreach($testimonials as $testimonial)
        <livewire:components.card-testimonial wire:key="{{ $testimonial->id }}" :photo="$testimonial->alumnis->photo" :name="$testimonial->alumnis->name" :class="$testimonial->alumnis->class" :position="$testimonial->alumnis->position" :company="$testimonial->alumnis->company" :content="$testimonial->content" :rating="$testimonial->rating" />
        @endforeach
      </div>
      <footer>
        <livewire:components.more-button text="Cerita Lainya" href="/alumni" />
      </footer>
    </aside>
    <!-- alumni story -->

    <!-- news -->
    <aside class="flex w-full flex-col gap-4 lg:gap-6 items-center">
    <livewire:components.title-left :text="$school->alias" span="Terkini" />
      <div class="drag-to-scroll flex w-full gap-4 overflow-x-scroll lg:overflow-x-visible cursor-grab active:cursor-grabbing snap-x snap-mandatory p-2 lg:p-0">
        @foreach($articles as $article)
          <livewire:components.card-article-home wire:key="{{ $article->id }}" :category="$article->category" :slug="$article->slug" :photo="$article->photo" :createdAt="$article->created_at" :title="$article->title" />
        @endforeach
        {{-- <a href="" class="min-w-[100%] lg:min-w-[20%] group">
          <article class="flex w-full flex-col rounded-2xl pb-4 gap-12 bg-white lg:group-hover:scale-105 duration-500 transition-all">
              <figure style="background-image: url(/img/achievement/achiev\ \(7\).jpg);" class="aspect-[4/3] w-full rounded-t-2xl bg-cover bg-no-repeat bg-center"></figure>
              <figcaption class="w-full flex flex-col gap-1 lg:gap-2 items-center relative px-4">
                <div class="flex flex-col bg-blue-600 px-2 py-1 rounded-lg absolute -top-24 left-4">
                  <p class="font-semibold text-slate-50 text-4xl">26</p>
                  <p class="text-slate-50 text-sm">Oktober</p>
                  <p class="text-slate-50 text-sm">2024</p>
                </div>
                <h4 class="text-lg lg:text-xl text-slate-700 text-center h-[4lh] line-clamp-4">Desain Busana asdfasd kabupaten Ngawi tahun 2024</h4>
              </figcaption>
          </article>
        </a>
        <a href="" class="min-w-[100%] lg:min-w-[20%] group">
          <article class="flex w-full flex-col rounded-2xl pb-4 gap-12 bg-white lg:group-hover:scale-105 duration-500 transition-all">
              <figure style="background-image: url(/img/achievement/achiev\ \(7\).jpg);" class="aspect-[4/3] w-full rounded-t-2xl bg-cover bg-no-repeat bg-center"></figure>
              <figcaption class="w-full flex flex-col gap-1 lg:gap-2 items-center relative px-4">
                <div class="flex flex-col bg-blue-600 px-2 py-1 rounded-lg absolute -top-24 left-4">
                  <p class="font-semibold text-slate-50 text-4xl">26</p>
                  <p class="text-slate-50 text-sm">Oktober</p>
                  <p class="text-slate-50 text-sm">2024</p>
                </div>
                <h4 class="text-lg lg:text-xl text-slate-700 text-center h-[4lh] line-clamp-4">Desain Busana asdfasd kabupaten Ngawi tahun 2024</h4>
              </figcaption>
          </article>
        </a>
        <a href="" class="min-w-[100%] lg:min-w-[20%] group">
          <article class="flex w-full flex-col rounded-2xl pb-4 gap-12 bg-white lg:group-hover:scale-105 duration-500 transition-all">
              <figure style="background-image: url(/img/achievement/achiev\ \(7\).jpg);" class="aspect-[4/3] w-full rounded-t-2xl bg-cover bg-no-repeat bg-center"></figure>
              <figcaption class="w-full flex flex-col gap-1 lg:gap-2 items-center relative px-4">
                <div class="flex flex-col bg-blue-600 px-2 py-1 rounded-lg absolute -top-24 left-4">
                  <p class="font-semibold text-slate-50 text-4xl">26</p>
                  <p class="text-slate-50 text-sm">Oktober</p>
                  <p class="text-slate-50 text-sm">2024</p>
                </div>
                <h4 class="text-lg lg:text-xl text-slate-700 text-center h-[4lh] line-clamp-4">Desain Busana asdfasd kabupaten Ngawi tahun 2024</h4>
              </figcaption>
          </article>
        </a>
        <a href="" class="min-w-[100%] lg:min-w-[20%] group">
          <article class="flex w-full flex-col rounded-2xl pb-4 gap-12 bg-white lg:group-hover:scale-105 duration-500 transition-all">
              <figure style="background-image: url(/img/achievement/achiev\ \(7\).jpg);" class="aspect-[4/3] w-full rounded-t-2xl bg-cover bg-no-repeat bg-center"></figure>
              <figcaption class="w-full flex flex-col gap-1 lg:gap-2 items-center relative px-4">
                <div class="flex flex-col bg-blue-600 px-2 py-1 rounded-lg absolute -top-24 left-4">
                  <p class="font-semibold text-slate-50 text-4xl">26</p>
                  <p class="text-slate-50 text-sm">Oktober</p>
                  <p class="text-slate-50 text-sm">2024</p>
                </div>
                <h4 class="text-lg lg:text-xl text-slate-700 text-center h-[4lh] line-clamp-4">Desain Busana asdfasd kabupaten Ngawi tahun 2024</h4>
              </figcaption>
          </article>
        </a> --}}
      </div>
      <footer>
        <livewire:components.more-button text="Berita Lainya" href="/news" />
      </footer>
    </aside>
    <!-- news -->

  </div>