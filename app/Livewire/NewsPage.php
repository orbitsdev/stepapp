<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsPage extends Component
{
    public function render()
    {
        $mainNews = News::with(['media'])->get();
        $moreNews = News::with(['media'])->get();
        return view('livewire.news-page',[
            'mainNews'=> $mainNews,
            'moreNews'=> $moreNews,
        ]);
    }
}
