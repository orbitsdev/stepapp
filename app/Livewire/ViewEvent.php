<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class ViewEvent extends Component
{

    public Event $record;
    public function render()
    {
        $recentEvents = Event::get();
        return view('livewire.view-event',[
            'recentEvents' => $recentEvents,
        ]);
    }
}
