<?php

namespace App\Models;
use EloquentFilter\Filterable;


use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use Filterable;

    protected $fillable = [
        'date','started_time','finished_time','status','professor','ambient','user','subject','reason','description'
    ];
    public function scopeInfo($query){
        return $query->select('*');
    }

    public function ambient() {
        return $this->belongsTo(Ambient::class, 'ambient');
    }
    public function reason() {
        return $this->belongsTo(Reason::class, 'reason');
    }

    public function subject() {
        return $this->belongsTo(Subject::class, 'subject');
    }

    public function professor() {
        return $this->belongsTo(People::class, 'professor');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user');
    }

    public function allStatus() {
        return [
            1=> 'Pendente', 'Confirmado', 'Cancelado'
        ];
    }
    public function getStatus() {
        return $this->allStatus()[$this->status];
    }

    public function modelFilter()
    {
        return $this->provideFilter(ModelFilters\AgendamentosFilter::class);
    }
}
