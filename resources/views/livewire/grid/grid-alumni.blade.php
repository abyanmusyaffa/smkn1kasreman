<div class="flex flex-col gap-6 w-full">
    <div class="grid w-full lg:grid-cols-3 gap-4">
        @foreach($testimonials as $testimonial)
        <livewire:components.card-testimonial wire:key="{{ $testimonial->id }}" :photo="$testimonial->alumnis->photo" :name="$testimonial->alumnis->name" :class="$testimonial->alumnis->class" :position="$testimonial->alumnis->position" :company="$testimonial->alumnis->company" :content="$testimonial->content" :rating="$testimonial->rating" />
        @endforeach
    </div>

    {{ $testimonials->links(data: ['scrollTo' => false]) }}
</div>