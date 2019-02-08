<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'first', 'second', 'game', 'field', 'current', 'roll', 'winner',
    ];

    protected $appends = ['state'];

    public function getStateAttribute()
    {
        return unserialize($this->field);
    }
}
