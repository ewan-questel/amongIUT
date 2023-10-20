<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooldown extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_user',
        'action',
        'active',
        'meeting_room',
        'sab_duration',
        'cd_delay',
        'locX',
        'locY',
        'locX2',
        'locY2',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
