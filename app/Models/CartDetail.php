<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Thiagoprz\CompositeKey\HasCompositeKey;

class CartDetail extends Model
{
    use HasCompositeKey;

    protected $table = 'cart_details';

    protected $fillable = ['product_id', 'quantity', 'cart_id'];

    public $incrementing = false;
    protected $primaryKey = ['cart_id', 'product_id'];


    public function cart(){
        return $this->belongsTo(Cart::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
