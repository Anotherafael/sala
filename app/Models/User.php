<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    use HasApiTokens,  Notifiable, HasRoles; 

    protected $guard_name = 'web';

    protected $table = 'users';

    protected $fillable = [
        'email', 'cpf', 'password', 'people_id','active'
    ];

    protected $hidden = [
        'password', 'remember_token','people_id',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function people(){
        return $this->belongsTo(People::class, 'people_id');
    }

    public function scopeInfo($query){
        return $query->select('*');
    }
}
