<?php

use App\Models\Service;

function getServices(){
    $serviecs =  Service::orderBy('name','ASC')->where('status',1)->get();
    return $serviecs;
}



?>
