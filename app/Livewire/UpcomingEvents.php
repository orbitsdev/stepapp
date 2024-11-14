<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class UpcomingEvents extends Component
{

    public function render()
    {
        $upcomingEvents = Event::upcoming()->take(4)->get(); // Fetch 4 recent events
        return view('livewire.upcoming-events', [
            'upcomingEvents' => $upcomingEvents,
        ]);
    }

}
