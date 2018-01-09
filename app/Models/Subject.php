<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    public function classes()
    {
        return $this->hasMany(Class::class);
    }
}
