<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingOrder extends Model
{
    use HasFactory;

    protected $table = 'tracking_order';
    protected $guarded = ["id"];
    protected $fillable = ['transaction_id', 'waiting_for_verification', 'waiting_for_payment', 'already_paid', 'on_the_way', 'completed'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
