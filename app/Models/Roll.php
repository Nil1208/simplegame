<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roll extends Model
{
    protected $fillable = [
        'field', 'user', 'binary',
    ];
}
