<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function schools()
    {
        return $this->hasMany(School::class);
    }
}
