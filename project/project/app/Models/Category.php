<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "catorgry";
    public function stores(){
        return $this->hasMany(stores::class,'store_id','id');
        }
}
