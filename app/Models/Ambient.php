<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambient extends Model
{
    protected $table = 'ambients';

    protected $fillable = [
        'name','terms','status','ambient_type','active'
    ];
    
    public function scopeInfo($query){
        return $query->select('*');
    }

    public function schedule() {
        return $this->hasMany(Schedule::class);
    }

    public function ambientType(){
        return $this->belongsTo(AmbientType::class, 'ambient_type');
    }
}