<?php

namespace App\Livewire;

use Livewire\Component;

class ViewTargetSection extends Component
{

    public $url;
    public function render()
    {
        return view('livewire.view-target-section',['url' => $this->url]);
    }
}
