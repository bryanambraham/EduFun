<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //
    public function show($id){
       
        $category = Category::findOrFail($id); // nyari data category berdasar id
        $articles = $category->articles; //ambil data article yang sesuai categories(dimana find id)
        return view('categories ',compact('category','articles'));
    }
}
