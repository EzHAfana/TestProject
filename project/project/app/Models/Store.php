<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = "store";
    public function category(){
        return $this->belongsTo(category::class,'catorgry_id','id');
    }

    public function ratings(){
    return $this->hasMany(ratings::class,'store_id','id');
    }
}
