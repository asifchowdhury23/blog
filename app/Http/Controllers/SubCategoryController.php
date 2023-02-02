<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.category.sub-category',[
            'categories'=>Category::all()
        ]);
    }
    public function saveSubCategory(Request $request){
        SubCategory::saveSubCategory($request);
        return back();
    }
}
