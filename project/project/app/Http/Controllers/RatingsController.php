<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ratings;
use App\Models\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class RatingsController extends Controller
{
  public $currentPage = 1;
  
    public function search (Request $request) {
      $search = $request['search'];
      $store = Store::select('*')->where('name', 'like' , '%'.$search.'%')->orwhere('phone', 'like' , '%'.$search.'%')->orwhere('address', 'like' , '%'.$search.'%')->paginate(6)->setPath ( '' );
      return view('adminpanel/ratings/view') ->with('stores', $store);
    }

    public function index () {
      $store =Store::select('*')->paginate(6);
      return view('adminpanel/ratings/view')->with('stores', $store);   
   }

  public function store (Request $request , $id){
    $ip = request()->ip();
    $mac = substr(shell_exec('getmac'),159,20);
    $status = false;
    $result = Ratings::where("address" ,'LIKE',"%$mac%")->where("store_id","$id")->count();
    if ($result >= 1){
        return redirect('publicwebsite/detailsproduct/'.$id) ->with('s', $status );
    }else{
      if ($request->has('rating')){
        if (!empty($request['rating'])){
            $result = Ratings::insert(["rating" => $request['rating'],"store_id" => $id,"address" => $mac]);
            $status = true;
        }
      }
    }
    return redirect('publicwebsite/detailsproduct/'.$id)->with('s', $status);
  }


  public function setPage($url)
  {
      $this->currentPage = explode('page=', $url)[1];
      Paginator::currentPageResolver(function(){
          return $this->currentPage;
      });
  }
}