<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Carousel as CModel;

class Carousel extends Component
{

    public $caroucels = [];
    public function render()
    {
        $this->caroucels = CModel::isEnabled()->withRelation()->get();
        return view('livewire.carousel',[
            'caroucels' => $this->caroucels
        ]);
    }
}
