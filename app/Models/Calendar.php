<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
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
