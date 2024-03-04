<?php

namespace App\Livewire;

use App\Models\Page;
use Livewire\Component;

class ShowPage extends Component
{
    public $pageID = null;
    public function mount($id){
        $this->pageID = $id;
    }
    public function render()
    {
       $page = Page::findOrFail($this->pageID);
        return view('livewire.show-page',[
            'page' => $page
        ]);
    }
}
