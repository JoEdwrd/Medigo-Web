<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Prescription extends Model
{
    use HasFactory;
    protected $table="prescriptions";
    protected $primaryKey="id";
    protected $fillable = [
        'transaction_id',
        'image',
        'status',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
