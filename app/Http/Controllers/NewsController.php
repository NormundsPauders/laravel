<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class NewsController extends Controller
{


    public function showGallery(){
        return view("gallery");
    }

    public function showNews(){
        $msg = Messages::all()->sortByDesc('created_at');
        $data = array('messages' => $msg);
        return view('news', $data);
    }

    public function SendMsg(Request $request){
        $request->validate([
            'msg_text' => 'required|min:4'
        ],
            [
                'msg_text.required' => 'Obligāts lauks',
                'msg_text.min' => 'Min simboli',
            ]);
        $post_data = $request->all();
        Messages::create($post_data);
        return redirect()->back();
    }

    public function showMsg(){
        return view("contacts");
    }

    public function allMsg(){
        $msg = Messages::all()->sortByDesc('created_at');
        $data = array('messages' => $msg);
        return view('allmsg', $data);
    }

    public function deleteMsg(Request $request){
        $id = $request->id;
        Messages::destroy($id);
        return redirect()->back();
    }

    public function selectCurrentMsg(Request $request){
        $id = $request->id;
        $msg = Messages::where('id',$id)->first();
        return view('editmsg', compact('msg'));

    }

    public function updateCurrentMsg(Request $request){
        $id = $request->id;
        $msg = Messages::where('id',$id)->first();
        $msg->update($request->all());
        $msg = Messages::all()->sortByDesc('created_at');
        $data = array('messages' => $msg);
        return view('allmsg', $data);


    }

}
//php artisan make:model Messages