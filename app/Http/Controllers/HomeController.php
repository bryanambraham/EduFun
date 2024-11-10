<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class HomeController extends Controller
{
    //
    public function category_index(){
        $categories = Category::all(); //ngambil semua data di Model Category
        return view('welcome', compact('categories'));
    }
}
