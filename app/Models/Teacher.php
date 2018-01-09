<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    proteted $fillable = [
        'id',
        'email',
        'avatar_url',
        'name',
        'gender',
        'active',
        'graduated_at',
        'experience',
        'school_id',
    ];

    proteted $hidden = [
        'password',
        'remember_token',
    ];

    public function classes()
    {
        return $this->hasMany(Class::class);
    }

    public function school()
    {
        return $this->belongTo(School::class);
    }
}
