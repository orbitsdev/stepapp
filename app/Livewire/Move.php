<?php

namespace App\Livewire;

use App\Models\Move as M;
use Livewire\Component;

class Move extends Component
{
   public   $move;
      public function render()
    {
        $this->move =  M::where('is_default', true)->with(['media'])->latest()->first();
        return view('livewire.move',[
            'move'=> $this->move
        ]);
    }
}
