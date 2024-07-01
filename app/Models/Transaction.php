<?php

namespace App\Models;

use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    protected $fillable = ['promotion_id', 'user_id', 'slug', 'status'];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function order_details() {
        return $this->hasMany(OrderDetail::class);
    }

    // public function prescriptions(){
    //     return $this->hasMany(Prescription::class);
    // }

    public function promotion() {
        return $this->belongsTo(Promotion::class, 'promo_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function prescription() {
        return $this->hasOne(Prescription::class);
    }
}
