<div class="flex w-full flex-col gap-6">
    <div class="grid w-full gap-4 lg:grid-cols-4">
        @foreach($enrollments as $enrollment)
            <livewire:components.card-article wire:key="{{ $enrollment->id }}" :category="$enrollment->category" :slug="$enrollment->slug" :photo="$enrollment->photo" :createdAt="$enrollment->created_at" :title="$enrollment->title" />
        @endforeach
    </div>
</div>