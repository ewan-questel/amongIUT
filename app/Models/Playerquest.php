<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playerquest extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_user',
        'no_quest',
        'start',
        'finish',
        'valid',
    ];

}
