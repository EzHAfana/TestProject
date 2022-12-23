<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{

    public function index () {
      $store = Store::select('*')->paginate(5);
        return view('adminpanel/store/view') ->with('stores', $store);
    }

    public function create() {
       $catorgry = Category::all();
    return view('adminpanel/store/create')->with('catorgry', $catorgry);
    }

    public function store(Request $request){
        $name = $request['store_name'];
        $phone = $request['store_phone'];
        $address = $request['store_address'];
        $catorgry_id = $request['catorgry_id'];
        $file = $request->file('image');
        $file_name = time()+rand(1, 1000) . '-' . $file->getClientOriginalExtension();
        $file->move('upload/product/', $file_name);
 
        $store = new Store;
        $store->name = $name;
        $store->phone = $phone;
        $store->address = $address;
        $store->catorgry_id = $catorgry_id;
        $store->image = $file_name;
        $store->avg = 0;
        $store->count = 0;
        $result = $store->save();

        return redirect()->back();
    }

    public function edit($id) {
 $store = Store::where('id', $id)->first();
       $catorgrys = Category::all();
        $catorgry = Category::where('id','=',$store->catorgry_id)->first(); 
 // dd($store->catorgry_id);
       return view('adminpanel.store.update')->with('store', $store)->with('catorgry', $catorgry)->with('catorgrys', $catorgrys);
    }

    public function update(Request $request, $id) {
        $name = $request['store_name'];
        $phone = $request['store_phone'];
        $address = $request['store_address'];
        $catorgry_id = $request['catorgry_id'];
        $file = $request->file('image');
        $file_name = time()+rand(1, 1000) . '-' . $file->getClientOriginalExtension();
        $file->move('upload/product/', $file_name);
        if ($request->has('store_name')&&$request->has('store_phone')
        &&$request->has('store_address')&&$request->has('image')) {
            if (!empty($request['store_name'])&&!empty($request['store_phone'])
            &&!empty($request['store_address'])
            &&!empty($request['image'])) {
                $store = Store::where('id', $id)->first();
                $store->name = $name;
                $store->phone = $phone;
                $store->address = $address;
                $store->catorgry_id = $catorgry_id;
                $store->image = $file_name;
                $result = $store->save(); 
          
                return redirect()->back();
            }
        }
    }

    public function destroy($id){
        $store = Store::where('id', $id)->delete();
        return redirect()->back();
    }
}