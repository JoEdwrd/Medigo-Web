<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
