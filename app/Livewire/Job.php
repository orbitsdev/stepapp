<?php

namespace App\Livewire;

use App\Models\Jog;
use App\Models\Module;
use Livewire\Component;

class Job extends Component
{
    public   $jog;
    public   $mandatory = [];
    public   $elective = [];
    public function render()
    {
        $this->jog =  Jog::where('is_default', true)->latest()->first();
        $this->mandatory = Module::mandatory()
        ->with([
            'units' => fn($query) => $query->sorted(),
            'outputs' => fn($query) => $query->sorted(),
        ])
        ->sorted() 
        ->get();

    $this->elective = Module::elective()
        ->with([
            'units' => fn($query) => $query->sorted(),
            'outputs' => fn($query) => $query->sorted(),
        ])
        ->sorted()
        ->get();


        return view('livewire.job',[
            'jog' => $this->jog,
            'mandatory' => $this->mandatory,
            'elective' => $this->elective,
        ]);
    }
}
