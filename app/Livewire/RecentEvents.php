<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class RecentEvents extends Component
{
    public function render()
    {
        $recentEvents = Event::get();
        return view(
            'livewire.recent-events',
            [
                'recentEvents' => $recentEvents,
            ]
        );
    }
}
