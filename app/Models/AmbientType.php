<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmbientType extends Model
{
    protected $table = 'ambient_types';

    protected $fillable = [
        'name','active','status'
    ];
    
    public function scopeInfo($query){
        return $query->select('*');
    }
    
    public function ambient()
    {
        return $this->belongsTo(Ambient::class);
    }
}
