<?php

namespace App\Livewire;

use App\Models\AdvisoryBoard;
use App\Models\AdvisoryMember;
use App\Models\TeamMember;
use App\Models\TeamSection;
use Livewire\Component;


class Advisory extends Component
{
    public  $advisory;
    public  $teamSection;
    public  $advisoryMembers;
    public  $teamMembers;
    public function render()
    {
        $this->advisory = AdvisoryBoard::where('is_default', true)->latest()->first();
        $this->teamSection = TeamSection::where('is_default', true)->latest()->first();
        $this->advisoryMembers = AdvisoryMember::with(['social','media'])->get();
        $this->teamMembers =  TeamMember::with(['social','media'])->get();

        return view('livewire.advisory',[
            'advisory' => $this->advisory,
            'teamSection' => $this->teamSection,
            'advisoryMembers' => $this->advisoryMembers,
            'teamMembers' => $this->teamMembers,
        ]);
    }
}
