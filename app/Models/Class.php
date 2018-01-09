<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $fillable = [
        'name',
        'begin_at',
        'number_of_lesson',
        'max_slot',
        'available_slot',
        'price',
        'discount',
        'subject_id',
        'teacher_id',
    ];

    protected $timestamp = true;

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
