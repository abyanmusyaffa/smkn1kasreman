{{-- @dd($partners) --}}
<div class="flex w-full flex-col gap-6">
    <div class="grid w-full gap-4 lg:grid-cols-2">
        @foreach($partners as $partner)
            <livewire:components.card-partner wire:key="{{ $partner->id }}" :logo="$partner->logo" :name="$partner->name" :address="$partner->address" :industry="$partner->industry" />
        @endforeach
    </div>

    {{ $partners->links(data: ['scrollTo' => false]) }}
</div>