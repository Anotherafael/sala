<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    protected $table = 'reason';

    protected $fillable = [
        'name','active'
    ];

    public function scopeInfo($query){
        return $query->select('*');
    }
}
