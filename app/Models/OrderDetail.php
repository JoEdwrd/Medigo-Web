<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    public function transactions(){
        return $this->belongsTo(Transaction::class);
    }

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
