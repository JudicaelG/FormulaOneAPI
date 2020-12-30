<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilote extends Model
{
    public function calendars(){
        return $this->morphedByMany(Calendar::class, 'competitors');
    }

    public function results(){
        return $this->hasMany(Result::class);
    }
}
