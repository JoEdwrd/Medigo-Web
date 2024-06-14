<?php

namespace App\Models;

use App\Models\Category;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function category(){
        return $this->belongsTo((Category::class));
    }

    public function order_details(){
        return $this->hasMany(OrderDetail::class);
    }

    public function cart_details(){
        return $this->hasMany(CartDetail::class);
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
