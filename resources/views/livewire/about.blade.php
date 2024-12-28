<div class="w-full flex flex-col gap-9 lg:gap-12 px-4 pt-20 pb-9 lg:px-16 2xl:px-36 lg:pt-[120px] lg:pb-12 bg-slate-100">
    <!-- welcome -->
     <article class="flex flex-col lg:flex-row-reverse items-center gap-4 lg:gap-12 lg:px-24">
      <figure>
        <livewire:components.card-staff :photo="$headMaster->photo" :name="$headMaster->name" :role="$headMaster->role" />
      </figure>
      <figcaption>
        <p class="text-sm lg:text-base italic text-salte-700 text-center">“{{ $school->welcome_text }}”</p>
      </figcaption>
     </article>
    <!-- welcome -->

    <!-- profile -->
    <aside class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <livewire:components.title-left text="Profil" span="Sekolah" />
      <div class="flex flex-col w-full items-center gap-4 lg:gap-9">
        <figure class="flex gap-4 lg:gap-11 items-center">
          <img src="/img/svg/smk bisa.svg" class="h-6 lg:h-12" alt="">
          <img src="/storage/{{ $school->logo }}" class="h-12 lg:h-28" alt="">
          <img src="/img/svg/vokasi.svg" class="h-8 lg:h-16" alt="">
        </figure>
        <p class="text-center lg:text-xl text-slate-700">{{ $school->description }}</p>
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-2 w-full">
          <div class="flex flex-col items-center w-full bg-blue-500 p-2 rounded-lg lg:rounded-2xl text-slate-50">
            <span class="icon-[mdi--people-outline] text-5xl lg:text-[80px]"></span>
            <p class="text-5xl font-semibold">{{ $totalStaff }}</p>
            <p class="text-sm lg:text-lg font-medium whitespace-nowrap">Tenaga Kependidikan</p>
          </div>
          <div class="flex flex-col items-center w-full bg-blue-500 p-2 rounded-lg lg:rounded-2xl text-slate-50">
            <span class="icon-[mdi--user-outline] text-5xl lg:text-[80px]"></span>
            <p class="text-5xl font-semibold">{{ $totalTeachers }}</p>
            <p class="text-sm lg:text-lg font-medium">Guru</p>
          </div>
          <div class="flex flex-col lg:order-first col-span-2 lg:col-span-1 items-center w-full bg-blue-500 p-2 rounded-lg lg:rounded-2xl text-slate-50">
            <span class="icon-[ph--student] text-5xl lg:text-[80px]"></span>
            <p class="text-5xl font-semibold">{{ $totalStudents }}</p>
            <p class="text-sm lg:text-lg font-medium">Siswa</p>
          </div>
          <div class="flex flex-col items-center w-full bg-blue-500 p-2 rounded-lg lg:rounded-2xl text-slate-50">
            <span class="icon-[mdi--graduation-cap-outline] text-5xl lg:text-[80px]"></span>
            <p class="text-5xl font-semibold">{{ $totalMajors }}</p>
            <p class="text-sm lg:text-lg font-medium">Konsentrasi Keahlian</p>
          </div>
          <div class="flex flex-col items-center w-full bg-blue-500 p-2 rounded-lg lg:rounded-2xl text-slate-50">
            <span class="icon-[mdi--tennis-ball-outline] text-5xl lg:text-[80px]"></span>
            <p class="text-5xl font-semibold">{{ $totalExtracurriculars }}</p>
            <p class="text-sm lg:text-lg font-medium">Ekstrakurikuler</p>
          </div>
        </div>
        <article class="flex w-full flex-col rounded-2xl outline-4 outline outline-slate-200 p-4 lg:p-6 gap-2 lg:gap-6">
          <header class="flex items-center gap-4 lg:gap-6">
            <div class="w-full h-1 bg-slate-200 rounded-sm"></div>
            <p class="text-xl lg:text-3xl font-medium text-salte-800 whitespace-nowrap">Visi & Misi</p>
            <div class="w-full h-1 bg-slate-200 rounded-sm"></div>
          </header>
          <div class="flex flex-col lg:flex-row gap-6">
            <div class="flex flex-col w-full gap-2 lg:gap-4">
              <p class="text-lg lg:text-2xl font-medium text-center">Visi</p>
              <article class="prose prose-sm lg:prose-lg text-center prose-slate">{!! $school->vision !!}</article>
            </div>
            <div class="w-1 min-h-[100%] bg-slate-200 rounded-sm hidden lg:block"></div>
            <div class="flex flex-col w-full gap-2 lg:gap-4">
              <p class="text-lg lg:text-2xl font-medium text-center">Misi</p>
              <article class="prose prose-sm lg:prose-lg prose-slate">{!! $school->mission !!}</article>
            </div>
          </div>
        </article>
      </div>
    </aside>
    <!-- profile -->

    <!-- facility -->
    <aside class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <livewire:components.title-right text="Sarana" span="Prasarana" />
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 w-full">
        @foreach($facilities as $facility)
            <livewire:components.card-facility wire:key="{{ $facility->id }}" :name="$facility->name" :photo="$facility->photo" />
        @endforeach
      </div>
    </aside>
    <!-- facility -->
</div>