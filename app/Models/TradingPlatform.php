<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradingPlatform extends Model
{
    // id	name	description	image_url	link	is_active	created_at	updated_at
    protected $fillable = [
        'name', 'description', 'image_url', 'link', 'is_active'
    ];
}
