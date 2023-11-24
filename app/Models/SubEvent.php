<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubEvent extends Model
{
    public function calendar(){
        return $this->belongsTo(Calendar::class);
    }

    public function results(){
        return $this->hasMany(Result::class);
    }
}
