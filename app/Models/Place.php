<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_place';
    protected $fillable = [
        'cover',
        'place_name',
        'asal',
        'short_description',
        'description',
    ];
}
