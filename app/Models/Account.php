<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'user_id', 'account_type', 'accountID', 'refer_bonus', 'balance',
        'currency', 'currency_symbol', 'status',
    ];

    protected $casts = [
        'refer_bonus' => 'decimal:2',
        'balance' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($account) {
            $account->accountID = static::generateUniqueId('accounts', 'accountID');
        });
    }

    protected static function generateUniqueId($table, $column)
    {
        do {
            $id = str_pad(mt_rand(0, 9999999999), 10, '0', STR_PAD_LEFT);
        } while (static::where($column, $id)->exists());
        return $id;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
