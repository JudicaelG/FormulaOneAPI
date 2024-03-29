<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    protected $fillable = [
        'name',
        'pays',
        'flag',
        'length',
        'turns'
    ];

    public $timestamps = false;

    public function calendars(){
        return $this->hasMany(Calendar::class);
    }
}
