<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsSection extends Component
{
    public $news = [];
    public function render()
    {
        $this->news = News::select('title', 'description') // Only select title and description
        ->latest() // Order by most recent
        ->take(9)  // Limit to 9 records
        ->get();  
        return view('livewire.news-section', [
             'news' => $this->news
        ]);
    }
}
