<?php

namespace App\Models;

use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    protected $fillable = ['promotion_id', 'user_id', 'slug', 'status', 'transaction_date', 'payment_method'];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function order_details() {
        return $this->hasMany(OrderDetail::class);
    }

    public function promotion() {
        return $this->belongsTo(Promotion::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function prescription() {
        return $this->hasOne(Prescription::class);
    }

    public function tracking_order()
    {
        return $this->hasOne(TrackingOrder::class);
    }
}
