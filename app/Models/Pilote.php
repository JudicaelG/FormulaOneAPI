<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pilote extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'number',
        'photo',
        'nationality',
        'team',
        'birthday',
    ];

    public $timestamps = false;

    public function calendars(){
        return $this->belongsToMany(Calendar::class);
    }

    public function results(){
        return $this->hasMany(Result::class);
    }
}
