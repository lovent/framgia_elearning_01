<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
        'point',
        'content',
        'student_id',
        'class_id',
    ];

    protected $timestamp = true;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function class()
    {
        return $this->belongsTo(Class::class);
    }
}
