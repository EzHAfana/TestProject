<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index () {
        $categories = Category::select('*')->get();
        return view('adminpanel.category.view')->with('categories', $categories);
    }

    public function create() {
        return view('adminpanel/category/create');
    }

    public function store(Request $request){
        $status = false;
        $name = $request['category_name'];
        if ($request->has('category_name')){
            if (!empty($request['category_name'])){
                $Category = new Category;
                $Category->name = $name;
                $status = true;
                $result = $Category->save();
            }
        }
        return redirect('category/create')->with('add_category_status', $status);
    }

    public function show($id){
        //
    }

    public function edit($id) {
        $category = Category::where('id', $id)->first();
        return view('adminpanel.category.update')->with('category', $category);
    }

    public function update(Request $request, $id) {
        $status = false;
        if ($request->has('category_name')) {
            if (!empty($request['category_name'])) {
                $Category = Category::where('id', $id)->first();
                $Category->name = $request['category_name'];
                $status = true;
                $result = $Category->save();
                
                return redirect()->back();
            }
        }
    }

    public function destroy($id){
        $result = Category::where('id', $id)->delete();
        return redirect()->back();
    }
}