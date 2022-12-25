<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    protected $fillable = [
        'years',
        'title',
        'description'
    ];
}
