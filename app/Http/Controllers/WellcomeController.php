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
        // $post = new Post();
        // $post->title = "Mon jolie titre";
        // $post->body = "Mon jolie contenu";
        // $post->slug = "mon-jolie-titre";
        // Autre maniere de gerer l'insertion : $post = new Post(['title'='mon jolie titre']) 
        // Autre moyen : Post::create(['title'='mon jolie titre'])
        // $post->save();

        $first_name = "Bleriot";
        $last_name = "Noguia";
        // DB::table('posts')->insert([
        // 	'title'=>'Magnifique titre',
        // 	'body'=>'Magnifique contenu'
        // ]);
        // DB::table('posts')->whereId(4)->delete();
        // return $post->get();
    
        // DB::statement('DROP TABLE posts');
    
        return view('welcome', compact('first_name','last_name'));
    }
}
