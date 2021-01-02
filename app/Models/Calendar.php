<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = [
        'year',
        'circuit_id'
    ];

    protected $dates = [
        'startDate',
        'endDate',
    ];

    public $timestamps = false;

    public function circuit(){
        return $this->belongsTo(Circuit::class);
    }

    public function pilotes(){
        return $this->morphToMany(Pilote::class, 'competitors');
    }

    public function subevents(){
        return $this->hasMany(SubEvent::class);
    }
}
