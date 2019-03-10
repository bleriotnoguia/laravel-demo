<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;

class HomeController extends ApiController{

    public function index(){
        
        return $this->responseWithSuccess('Eventz REST API v1', [
            'service' => 'eventz-api',
            'version' => '1.0',
            'support' => 'developers@eventz.com',
            'documentation' => 'dev.eventz.com'
        ]);
    }
}