<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowteamPage extends Component
{
    public function render()
    {
        $members = Member::OrderBy('name','ASC')->get();
        // dd($members);
        return view('livewire.showteam-page',[
            'members' => $members
        ]);
    }
}
