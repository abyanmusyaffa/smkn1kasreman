<div class="w-full flex flex-col gap-9 lg:gap-12 px-4 pt-20 pb-9 lg:px-16 2xl:px-36 lg:pt-[120px] lg:pb-12 bg-slate-100">
    <!-- achievement -->
    <article class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <!-- pinned -->
        <div class="overflow-hidden w-full aspect-video lg:aspect-[21/9]">
          @foreach($achievementsPinned as $index => $achievementPinned)
            <livewire:components.carousel-achievement wire:key="{{ $achievementPinned->id }}" :slug="$achievementPinned->slug" :index="$index" :photo="$achievementPinned->photo" :rankings="$achievementPinned->rankings" :title="$achievementPinned->title" /> 
          @endforeach
        </div>
        <!-- pinned -->
        <!-- all news -->
        <div class="flex flex-col gap-4 w-full justify-center">
          <livewire:components.title-left text="Prestasi" />
          
          <livewire:components.paginate :onAchievements="true" />
        </div>
        <!-- all news -->
    </article>
    <!-- achievement -->
</div>