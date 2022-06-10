<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prizes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prize_code',
        'ticket_amount',
        'ticket_price',
        'prize_date',
        'description',
        'details',
        'category_id'
    ];

    public function category()
    {
        return $this->hasOne('\App\Models\Category', 'id', 'category_id');
    }

    public function medias()
    {
        return $this->hasMany('\App\Models\Media', 'prize_id', 'id');
    }
}
