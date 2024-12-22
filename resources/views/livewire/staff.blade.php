<div class="w-full flex flex-col gap-9 lg:gap-12 px-4 pt-20 pb-9 lg:px-16 2xl:px-36 lg:pt-[120px] lg:pb-12 bg-white">
    <!-- headmaster-->
    <article class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <livewire:components.title-left text="Kepala" span="Sekolah" />
      <div class="flex w-full justify-center">
        <livewire:components.card-staff :photo="$headMaster->photo" :name="$headMaster->name" :role="$headMaster->role" />
      </div>
    </article>
    <!-- headmaster-->
     
    <!-- vice-->
    <aside class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <livewire:components.title-right text="Wakil Kepala" span="Sekolah" />
      <div class="flex w-full lg:justify-between pb-1 gap-2 drag-to-scroll cursor-grab active:cursor-grabbing snap-x snap-mandatory overflow-x-scroll">
        @foreach($viceMasters as $viceMaster )
            <livewire:components.card-staff wire:key="{{ $viceMaster->id }}" :photo="$viceMaster->photo" :name="$viceMaster->name" :role="$viceMaster->role" />
        @endforeach
      </div>
    </aside>
    <!-- vice-->
     
    <!-- head of major-->
    <aside class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <livewire:components.title-left text="Kakomli" span="" />
      <div class="flex w-full lg:justify-between pb-1 gap-2 drag-to-scroll cursor-grab active:cursor-grabbing snap-x snap-mandatory overflow-x-scroll">
        @foreach($headsOfMajor as $headOfMajor )
            <livewire:components.card-staff wire:key="{{ $headOfMajor->id }}" :photo="$headOfMajor->photo" :name="$headOfMajor->name" :role="$headOfMajor->role" />
        @endforeach
      </div>
    </aside>
    <!-- head of major-->

    <!-- teacher-->
    <aside class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <livewire:components.title-right text="Guru" span="" />
      <div class="flex w-full lg:justify-between pb-1 gap-2 drag-to-scroll cursor-grab active:cursor-grabbing snap-x snap-mandatory overflow-x-scroll">
        @foreach($teachers as $teacher )
            <livewire:components.card-staff wire:key="{{ $teacher->id }}" :photo="$teacher->photo" :name="$teacher->name" :role="$teacher->role" />
        @endforeach
      </div>
    </aside>
    <!-- teacher-->

    <!-- staff-->
    <aside class="flex w-full flex-col gap-4 lg:gap-6 items-center">
        <livewire:components.title-left text="Tenaga" span="kependidikan" />
      <div class="flex w-full lg:justify-between pb-1 gap-2 drag-to-scroll cursor-grab active:cursor-grabbing snap-x snap-mandatory overflow-x-scroll">
        @foreach($staffMembers as $staff )
            <livewire:components.card-staff wire:key="{{ $staff->id }}" :photo="$staff->photo" :name="$staff->name" :role="$staff->role" />
        @endforeach
      </div>
    </aside>
    <!-- staff-->

</div>