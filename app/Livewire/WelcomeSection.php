<?php

namespace App\Livewire;

use App\Models\Welcome;
use Livewire\Component;

class WelcomeSection extends Component
{

    public $welcome;
    public function render()
    {
        $this->welcome = Welcome::latestDefault()->first();
        return view('livewire.welcome-section',[
            'welcome' => $this->welcome
        ]);
    }
}
