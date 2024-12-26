<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Achievement;
use Livewire\Attributes\Title;

class ArticleDetail extends Component
{
    
    public $articleDetail;
    
    public function mount($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $achievement = Achievement::where('slug', $slug)->first();
        
        if($article) {
            $this->articleDetail = $article;
        } elseif($achievement) {
            $this->articleDetail = $achievement;
        } else {
            abort(404);
        }
    }
    
    public function render()
    {
        return view('livewire.article-detail', [
            'articles' => Article::where('slug', '!=', $this->articleDetail->slug)->where('category', $this->articleDetail->category)->take(4)->get(),
            'achievements' => Achievement::where('slug', '!=', $this->articleDetail->slug)->take(4)->get(),
        ])->title($this->articleDetail->title);
    }
}
