<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'title','content','user_id','image'
    ];
    
    public function scopeInfo($query){
        return $query->select('*');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
