<?php

namespace App\Livewire\Components;

use App\Models\Article;
use App\Models\Partner;
use Livewire\Component;
use App\Models\Achievement;
use App\Models\Testimonial;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class Paginate extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $onPartners;
    public $onTestimonials;
    public $onAchievements;
    public $onAnnouncements;
    public $onEnrollments;
    public $onNews;

    public function render()
    {
        return view('livewire.components.paginate', [
            'partners' =>  $this->onPartners ? Partner::paginate(12) : [] ,
            'testimonials' => $this->onTestimonials ? Testimonial::with('alumnis')->paginate(9) : [] ,
            'achievements'=> $this->onAchievements ? Achievement::where('is_pinned', false)->paginate(12) : [],
            'announcements' => $this->onAnnouncements ? Article::where('category', 'announcement')->where('is_pinned', false)->paginate(12) : [] ,
            'enrollments' => $this->onEnrollments ? Article::where('category', 'enrollment')->where('is_pinned', false)->paginate(12) : [] ,
            'news' => $this->onNews ? Article::where('category', 'news')->where('is_pinned', false)->paginate(12) : [] ,
        ]);
    }
}
