<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradableAsset extends Model
{


// id
// name
// icon
// description
// is_active
// created_at
// updated_at

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
