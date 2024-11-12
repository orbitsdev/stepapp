<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use App\Models\NewsSection as NewsModel;

class NewsSection extends Component
{
    public $news = [];
    public $newsSection;
    public function render()
    {
        $this->newsSection = NewsModel::latest()->where('is_default', true)->first();
        $this->news = News::
        // select('title', 'description') // Only select title and description
        latest() // Order by most recent
        ->take(9)->
        with(['media'])  // Limit to 9 records
        ->get();
        return view('livewire.news-section', [
             'news' => $this->news
        ]);
    }
}
