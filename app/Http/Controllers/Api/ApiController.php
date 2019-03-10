<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

class ApiController extends Controller{
    
    // Le code pour la gestion de status n'est visible dans la video 'Atelier' de LesTeacherDuNet
    private $statusCode;

    public function __construct($statusCode = '200'){
        
        $this->statusCode = $statusCode;

        return $this;
    } 

    public function getStatusCode(){
        return $this->statusCode;
    }

    public function responseWithSuccess($message, $data = []){
        
        return $this->respond(true, $message, $data);
    }

    public function responseWithError($message, $data = []){
        
        return $this->respond(false, $message, $data);
    }

    public function respond($hasErrors, $message, $data){
        
        $content = ['success' => $hasErrors, 'message' => $message];

        if($data){
            $content = array_merge($content, compact('data'));
        }

        $content = array_merge($content, [
            'meta' => [
                'code' => $this->getStatusCode()
            ]
        ]);

        return response($content, $this->getStatusCode());
    }

}