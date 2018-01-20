<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'email',
        'avatar_url',
        'name',
        'subject',
        'gender',
        'active',
        'experience',
        'school_id',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1)->orderBy('created_at', 'DESC');
    }

    public function saveteacher($data)
    {
        $this->name= $data['name'];
        $this->email= $data['email'];
        $this->subject= $data['subject'];
        $this->gender= $data['gender'];
        $this->experience= $data['experience'];
        $this->save();
    }

    public function updateteacher($data)
    {
        $teacher = $this->find($data['id']);
        $teacher->name = $data['name'];
        $teacher->email= $data['email'];
        $teacher->experience = $data['experience'];
        $teacher->save();
    }

    public function classes()
    {
        return $this->hasMany(Classes::class);
    }

    public function school()
    {
        return $this->belongTo(School::class);
    }
}
