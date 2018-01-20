<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    protected $fillable = [
        'email',
        'name',
        'active',
        'gender',
        'avatar_url',
        'address',
        'phone_number',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1)->orderBy('created_at', 'DESC');
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
