<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    protected $fillable = [
        'name',
        'begin_at',
        'number_of_lesson',
        'max_slot',
        'available_slot',
        'status',
        'price',
        'discount',
        'teacher_id'
    ];

    protected $timestamp = true;

    public function savelophoc($data)
    {
        $this->name = $data['name'];
        $this->begin_at = $data['begin_at'];
        $this->number_of_lesson = $data['number_of_lesson'];
        $this->available_slot = $data['available_slot'];
        $this->status = $data['status'];
        $this->price = $data['price'];
        $this->discount = $data['discount'];
        $this->teacher_id = $data['teacher_id'];
        $this->save();
    }

    public function updatelophoc()
    {
        $lophoc = $this->find($data['id']);
        $lophoc->name = $data['name'];
        $lophoc->begin_at = $data['begin_at'];
        $lophoc->number_of_lesson = $data['number_of_lesson'];
        $lophoc->available_slot = $data['available_slot'];
        $lophoc->status = $data['status'];
        $lophoc->price = $data['price'];
        $lophoc->discount = $data['discount'];
        $lophoc->teacher_id = $data['teacher_id'];
        $lophoc->save();
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
