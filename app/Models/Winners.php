<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winners extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prize_code',
        'ticket_number',
        'winner_id',
        'winner_name',
        'description',
        'details',
        'category_id',
        'date'
    ];
}