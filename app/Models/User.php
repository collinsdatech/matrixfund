<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'username', 'email', 'internetId', 'phone', 'user_type', 'address', 'city',
        'state', 'country', 'postal_code', 'date_of_birth', 'profile_picture',
        'status', 'refer_by_id', 'email_verified_at', 'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_of_birth' => 'date',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->internetId = static::generateUniqueId('users', 'internetId');
        });
    }

    protected static function generateUniqueId($table, $column)
    {
        do {
            $id = str_pad(mt_rand(0, 9999999999), 10, '0', STR_PAD_LEFT);
        } while (static::where($column, $id)->exists());

        return $id;

    }

    public function accounts()
    {
        return $this->hasOne(Account::class);
    }

    public function referrer()
    {
        return $this->belongsTo(User::class, 'refer_by_id');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function userPackage() {
        return $this->hasMany(UserPackage::class);
    }


}
