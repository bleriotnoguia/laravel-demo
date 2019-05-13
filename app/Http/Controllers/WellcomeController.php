<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class WellcomeController extends Controller
{

    public function __construct(){

        // $this->middleware('ip');
    }

    // public function show($wellcome){
        
    //     return "show : ".$wellcome;
    // }

    public function index() {
    
        // DB::statement('DROP TABLE posts');
    
        return view('welcome');
    }
}
