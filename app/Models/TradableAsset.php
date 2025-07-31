<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradableAsset extends Model
{


protected $fillable = [
'id',
'name',
'icon',
'description',
'is_active',
'created_at',
'updated_at'
];

}
