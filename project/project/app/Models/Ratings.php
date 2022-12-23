<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;
    protected $table = "ratings";
    public function stores(){
        return $this->hasMany(stores::class,'store_id','id');
    }
}
