<div class="flex w-full flex-col gap-6">
    <div class="grid w-full gap-4 lg:grid-cols-4">
        @foreach($announcements as $announcement)
            <livewire:components.card-article wire:key="{{ $announcement->id }}" :category="$announcement->category" :slug="$announcement->slug" :photo="$announcement->photo" :createdAt="$announcement->created_at" :title="$announcement->title" />
        @endforeach
    </div>
</div>