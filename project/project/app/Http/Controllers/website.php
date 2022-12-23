<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Models\Category;
use App\Models\Ratings;
use App\Models\Store;

class website extends Controller
{
    public function index () {
        $category = Category::select('*')->get();
        $store2 = Store::select('*')->limit(12)->get();
        return view('publicwebsite.web')->with('store', $store2)->with('stores', $category);
    }

    public function index_products ($id) {
        $query2 = "select store.*, catorgry.name as owner_name from store left join catorgry on store.catorgry_id = catorgry.id where store.catorgry_id=$id";
        $store2 = DB::select($query2);
        $category = Category::select('*')->get();
        return view('publicwebsite.category') ->with('store', $store2)->with('stores', $category);
    }
         
    public function index2 () {
        $store2 = Store::select('*')->get();
        return view('publicwebsite.search')->with('store', $store2);
    }

    public function search (Request $request) {
        $search = $request['search'];
        $store = Store::select('*')->where('name', 'like' , '%'.$search.'%')->orwhere('phone', 'like' , '%'.$search.'%')->orwhere('address', 'like' , '%'.$search.'%')->get();
        return view('publicwebsite.search') ->with('store', $store);
    }

    public function show ($id) {  
    $query =  "select store.* from store left join ratings on store.id = ratings.store_id where store.id= $id   limit 1";
    $store = DB::select($query);
    $count = Ratings::select('*')->where('store_id',"$id")->count();
    $avg = Ratings::select('*')->where('store_id',"$id")->avg('rating');
    $x =round($avg);
   
   
    $stores = Store::where('id', $id)->first();
    $stores->avg = $x  ;
    $stores->count = $count;
    $result = $stores->save(); 
    
    return view('publicwebsite.detail') ->with('store', $store)->with('count', $count)->with('avg', $x);
    }

}