<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{

    protected $fillable = [
        'user_id',
        'package_id',
        'purchased_at',
        'status',
        'transaction_id',
        'amount',
        'profit_made',
        'package_balances'
    ];

    // Define relationships if needed, e.g., with User or Package models
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
