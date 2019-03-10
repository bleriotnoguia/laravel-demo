<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Link;

class LinksController extends Controller
{

    public function show($id){
        $link = Link::findOrFail($id);
        return redirect($link->url, 301);
        // pour avoir une entete de type 301 et avoir une meilleur redirection
    }

    public function create(Request $request){
        return view("links.create");
    }

    public function store(Request $request){
        $url = $request->input('url');
        $link = Link::firstOrCreate(['url'=>$url]);
        return  view("links.success", compact('link'));
    }
}
