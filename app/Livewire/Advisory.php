<?php

namespace App\Livewire;

use App\Models\AdvisoryBoard;
use App\Models\AdvisoryMember;
use App\Models\TeamMember;
use Livewire\Component;


class Advisory extends Component
{
    public  $advisory;
    public  $advisoryMembers;
    public  $teamMembers;
    public function render()
    {
        $this->advisory = AdvisoryBoard::where('is_default', true)->latest()->first();
        $this->advisoryMembers = AdvisoryMember::with(['media'])->get();
        $this->teamMembers =  TeamMember::with(['media'])->get();

        return view('livewire.advisory',[
            'advisory' => $this->advisory,
            'advisoryMembers' => $this->advisoryMembers,
            'teamMembers' => $this->teamMembers,
        ]);
    }
}
