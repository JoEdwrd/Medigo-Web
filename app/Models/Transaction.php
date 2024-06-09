<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded=["id"];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function order_details(){
        return $this->hasMany(OrderDetail::class);
    }

    // public function prescriptions(){
    //     return $this->hasMany(Prescription::class);
    // }

    public function promotions(){
        return $this->belongsTo(Promotion::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
