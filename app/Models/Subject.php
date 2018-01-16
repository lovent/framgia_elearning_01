<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
    ];

    public function classes()
    {
        return $this->hasMany(Class::class);
    }
}
