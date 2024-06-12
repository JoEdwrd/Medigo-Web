<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;

    public function transaction() {
        return $this->belongsTo(Transaction::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
