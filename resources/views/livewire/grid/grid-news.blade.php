{{-- @dd($news) --}}
<div class="flex w-full flex-col gap-6">
    <div class="grid w-full gap-4 lg:grid-cols-4">
        @foreach($news as $item)
            <livewire:components.card-article wire:key="{{ $item->id }}" :category="$item->category" :slug="$item->slug" :photo="$item->photo" :createdAt="$item->created_at" :title="$item->title" />
        @endforeach
    </div>
</div>