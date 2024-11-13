<?php

namespace App\Livewire;

use App\Models\Footer as Mfooter;
use Livewire\Component;

class Footer extends Component
{
    public $footerSection;
    public function render()
    {

        $this->footerSection = Mfooter::with(['media'])->where('is_default', true)->first();
        return view('livewire.footer',['footerSection' => $this->footerSection]);
    }
}
