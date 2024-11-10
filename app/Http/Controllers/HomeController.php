<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
class HomeController extends Controller
{
    //
    public function index(){
        $categories = Category::all(); //ngambil semua data di Model Category
        $articles = Article::with('writer')->get();
        return view('welcome', compact('categories','articles'));
    }

}
