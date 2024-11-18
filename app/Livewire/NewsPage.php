<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsPage extends Component
{
    public function render()
    {
        $mainNews = News::withCount('comments')->with(['media'])->get();
        $moreNews = News::withCount('comments')->with(['media'])->get();
        return view('livewire.news-page',[
            'mainNews'=> $mainNews,
            'moreNews'=> $moreNews,
        ]);
    }
}
