<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ViewServices extends Component
{
    public $service;
    public function mount($id){
     $this->service = Service::findOrFail($id);
    //  dd($this->service);
    }
    public function render()
    {
        return view('livewire.view-services',[
            'service' =>$this->service
        ]);
    }
}
