<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function showContacts(){
        return view("contacts");
    }

    public function showGallery(){
        return view("gallery");
    }

    public function showNews(){
        return view("news");
    }

    public function SendMsg(Request $request){
        $post_data = $request->all();
        Messages::create($post_data);
        return redirect()->back();
    }
}
//php artisan make:model Messages