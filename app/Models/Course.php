<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name','active'
    ];

    public function scopeInfo($query){
        return $query->select('*');
    }

    public function subject() {
        return $this->belongsTo(Subject::class);
    }
}
