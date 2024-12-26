{{-- @dd($articles) --}}
<div class="w-full flex flex-col lg:flex-row gap-6 lg:gap-8 px-4 pt-20 pb-9 lg:px-16 2xl:px-36 lg:pt-[120px] lg:pb-12 bg-slate-100">
    <article class="flex flex-col gap-4 w-full lg:w-2/3">
        <header class="flex flex-col gap-4 items-center">
            {{-- <a href="{{ url()->previous() }}" class="flex gap-1 lg:gap-2 items-center self-start">
                <span class="icon-[mdi--arrow-left]"></span>
                <p class="text-lg lg:text-xl font-medium">Kembali</p>
            </a> --}}
            <h2 class="font-semibold text-xl lg:text-4xl text-slate-700 text-center">{{ $articleDetail->title }}</h2>
            <div class="flex gap-2 items-center">
                <span class="icon-[mdi--calendar-badge] text-sm lg:text-lg text-slate-600"></span>
                <p class="text-sm lg:text-lg text-slate-600 whitespace-nowrap">{{ \Carbon\Carbon::parse($articleDetail->created_at)->translatedFormat('j F Y') }}</p>
            </div>
            <img src="/storage/{{ $articleDetail->photo }}" class="w-5/6 lg:w-auto lg:h-80" alt="">
        </header>
        <div class="flex bg-white rounded-2xl p-4 lg:p-6">
            <div class="prose w-full max-w-none">
               {!! $articleDetail->content !!}
            </div>
        </div>
        <footer class="flex gap-2">
            <p class="text-slate-600  lg:text-lg ">Tag: </p>
            <div class="flex gap-2">
                @foreach( $articleDetail->tags as $tag )
                    <p class="text-blue-600 text-sm lg:text-base outline-1 outline whitespace-nowrap outline-blue-600 py-[1px] lg:py-0.5 px-1 lg:px-2 rounded-lg">{{ $tag }}</p>
                @endforeach
            </div>
        </footer>
    </article>
    <livewire:components.aside-article :articles="$articles" :achievements="$achievements" />
</div>
