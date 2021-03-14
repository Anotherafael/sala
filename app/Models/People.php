<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'peoples';

    protected $fillable = [
        'name','phone','enrollment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
