<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'prize_id',
        'priority',
        'type'
    ];

    public function prize()
    {
        return $this->hasOne('\App\Models\Prizes', 'id', 'prize_id');
    }
}
