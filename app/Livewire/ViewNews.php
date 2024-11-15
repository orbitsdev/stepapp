<?php

namespace App\Livewire;

use App\Models\News;
use App\Models\Event;
use Livewire\Component;

class ViewNews extends Component
{

    public News $record;
    public function render()
    {

        $recentEvents = Event::get();
        return view('livewire.view-news',
        [
            'recentEvents' => $recentEvents,
        ]
    );
    }
}
