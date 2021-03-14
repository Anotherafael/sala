<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'name', 'active', 'course_id'
    ];

    public function scopeInfo($query){
        return $query->select('*');
    }

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }
}
