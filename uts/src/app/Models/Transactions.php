<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'user_id',
        'package_id',
        'transaction_date',
        'amount',
        'payment_method',
        'status',
        'notes'
    ];

    protected $casts = [
        'transaction_date' => 'date',
        'amount' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
