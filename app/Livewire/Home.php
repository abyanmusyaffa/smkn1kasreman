<?php

namespace App\Livewire;

use App\Models\Achievement;
use App\Models\Article;
use App\Models\Major;
use App\Models\Partner;
use App\Models\Photo;
use App\Models\School;
use App\Models\Testimonial;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    #[Title('Beranda')]

    
    public function mount()
    {
        $this->dispatch('title', title: 'Beranda');
    }
    
    public function render()
    {
        return view('livewire.home', [
            'majors' => Major::select('id', 'name', 'alias', 'logo')->get(),
            'school' => School::first(),
            'video_id' => $this->getYoutubeVideoId(School::first()->url_video_profile),
            'heros' => Photo::where('type', 'hero')->value('photo'),
            'galleries' => Photo::where('type', 'gallery')->value('photo'),
            'partners' => Partner::select('logo')->get(),
            'achievements' => Achievement::orderBy('created_at', 'desc')->take(4)->get(),
            'testimonials' => Testimonial::with('alumnis')->take(6)->get(),
            'articles' => Article::orderBy('created_at', 'desc')->take(4)->get(),
        ]);
    }

    private function getYoutubeVideoId(?string $url): ?string
    {
        if (!$url) {
            return null;
        }

        preg_match(
            '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
            $url,
            $matches
        );

        return $matches[1] ?? null;
    }
}
