<div>
    @if($isOpen)
    <div wire:click="close" class="fixed inset-0 flex px-2 py-10 justify-center items-center bg-slate-900 bg-opacity-50 z-50">
        <div wire:click.stop class="flex flex-col w-full lg:w-1/2 h-full bg-slate-100 rounded-2xl p-4 lg:p-6 items-center gap-4">
            <div class="flex w-full items-center justify-between">
                <div class="flex flex-col">
                    <div class="flex items-center gap-1 lg:gap-2">
                        <div class="h-0.5 w-4 lg:w-6 bg-slate-700"></div>
                        <img src="/storage/{{ $logo }}" class="w-4" alt="">
                        <p class="font-medium text-sm lg:text-base text-slate-700">{{ $alias }}</p>
                        <div class="h-0.5 w-4 lg:w-6 bg-slate-700"></div>
                    </div>
                    <h3 class="font-semibold text-xl lg:text-3xl text-slate-800">{{ $name }}</h3>
                </div>
                <button wire:click="close" class="">
                    <span class="icon-[mdi--close] text-4xl text-slate-400"></span>
                </button>
            </div>
            <div class="scroll-bar-none flex size-full rounded-xl bg-white p-4 overflow-y-scroll">
                <article class="prose">
                    {!! $description !!}
                </article>
            </div>
        </div>
        {{-- <div class="bg-white rounded-lg shadow-lg p-6 max-w-lg w-full">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Deskripsi</h2>
            <p class="text-gray-700">{{ $description }}</p>
            <div class="mt-4 flex justify-end gap-2">
                <button wire:click="close" class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">
                    Tutup
                </button>
            </div>
        </div> --}}
    </div>
    @endif
</div>