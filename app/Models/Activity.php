<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $table = 'activity_logs';

    protected $fillable = [
        'user_id', 'type', 'description', 'ip_address', 'user_agent', 'device_fingerprint',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
