<?php

namespace App\Livewire;
use App\Models\Service;
use Livewire\Component;

class ShowServices extends Component
{
    public function render()
    {
        $service = Service::OrderBy('name','ASC')->get();
        return view('livewire.show-services',[
            'service' => $service
        ]);
    }
}
