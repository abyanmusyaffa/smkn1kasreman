<div class="flex w-full flex-col gap-6">
    <div class="grid w-full gap-4 lg:grid-cols-4">
        @foreach($achievements as $achievement)
            <livewire:components.card-achievement wire:key="{{ $achievement->id }}" :slug="$achievement->slug" :photo="$achievement->photo" :rankings="$achievement->rankings" :title="$achievement->title" :createdAt="$achievement->created_at" /> 
        @endforeach
    </div>

    {{ $achievements->links(data: ['scrollTo' => false]) }}
</div>