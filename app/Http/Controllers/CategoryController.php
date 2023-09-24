<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    function category(){
        return view('product.category');
    }

    function category_store(Request $request){

        $category = new Category();
        $category->c_name = $request->c_name;
        $category->created_at = Carbon::now();
        $category->save();
        return response()->json(['res' => 'Category created Successfully']);
    }


}
