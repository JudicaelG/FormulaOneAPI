<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function pilote(){
        return $this->belongsTo(Pilote::class);
    }

    public function subevent(){
        return $this->belongsTo(SubEvent::class);
    }
}
