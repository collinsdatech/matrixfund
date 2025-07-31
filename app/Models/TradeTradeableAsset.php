<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeTradeableAsset extends Model
{
    protected $table = 'tradable_assets';
    protected $fillable = [
        'id',
        'name',
        'icon',
        'description',
        'is_active',
        'created_at',
        'updated_at',
    ];
}
