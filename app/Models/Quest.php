<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'title',
        'no_place',
        'order',
        'locX',
        'locY',
    ];

    public function playerQuests(){
        return $this->hasMany(Playerquest::class);
    }

    public function place(){
        return $this->belongsTo(Place::class);
    }
}
