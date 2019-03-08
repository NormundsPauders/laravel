<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function welcome(){
        return view("category");
    }



    public function addCategory(Request $request){
        $post_data = $request->all();
        Category::create($post_data);
        return redirect()->back();
    }

    public function showCategory(){
        $categories = Category::all();
        $data = array('categories' => $categories);
        return view('category', $data);
    }
}
