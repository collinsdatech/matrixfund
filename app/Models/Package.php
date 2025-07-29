<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'account_size_min',
        'account_size_max',
        'challenge_type',
        'profit_target',
        'time_limit',
        'max_drawdown',
        'daily_loss_limit',
        'commission_rate',
        'leverage',
        'profit_share',
        'payout_frequency',
    ];

    // protected $casts = [
    //     'profit_target' => 'array',
    // ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
