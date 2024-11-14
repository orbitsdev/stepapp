<?php

namespace App\Livewire;

use Livewire\Component;

class EventPage extends Component
{
    public $events = [];
    public function render()
    {

        return view('livewire.event-page');
    }
}
