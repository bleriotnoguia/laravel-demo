<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Upload;

class FileController extends Controller
{
    public function store(Request $request)
    {
       $request->validate([
        'title' => 'required:max:255',
        'overview' => 'required',
        'price' => 'required|numeric'
      ]);

      // dd(auth()->user()->files());

      auth()->user()->files()->create([ // TODO : Understand how his work
        'title' => $request->get('title'),
        'overview' => $request->get('overview'),
        'price' => $request->get('price')
      ]);

      return back()->with('message', 'Your file is submitted Successfully');
    }

    public function upload(Request $request)
    {
      $uploadedFile = $request->file('file');
      $filename = time().$uploadedFile->getClientOriginalName();

      Storage::disk('local')->putFileAs(
        'files/'.$filename,
        $uploadedFile,
        $filename
      );

      $upload = new Upload;
      $upload->filename = $filename;

      $upload->user()->associate(auth()->user());
      // $upload->user_id = auth()->user()->id;

      $upload->save();

      return response()->json([
        'id' => $upload->id
      ]);
    }
}
